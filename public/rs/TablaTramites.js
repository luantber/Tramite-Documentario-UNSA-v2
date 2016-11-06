
class Tramite extends React.Component{
	render(){
		console.log(this.props.ver);
		return (
				
			<tr>
				<td>{this.props.ide}</td>
				<td>{this.props.asunto}</td>
		        <td>
		        	De: {this.props.persona}  <br/>
		        	Para: {this.props.destino} <br/>
		        	Estado: {this.props.estado}  <br/>
		        </td>
		        <td>{this.props.fechainicio}</td>
		        <td>Final</td>
		       	{this.props.ver &&
      			 <td> <a href={this.props.base+'/'+this.props.id} > Ver Estado </a>  </td>
    			}
			</tr>
			
		);
	}
}




	

window.TablaTramites = React.createClass({
	getInitialState(){
		return {
			data:[],
			url2:this.props.url,
			num:0

		};
	},

	cargarDatos(){
		$.ajax({
	  		url: this.state.url2,
			dataType: 'json',
	  			  		
	  		success: function(data) {
	  			console.log(data);
	    		this.setState({data: data.data,num:data.total});
	  		}.bind(this),
	  
	  		error: function(xhr, status, err) {
	    		console.error(this.props.url, status, err.toString());
	  		}.bind(this)
		});
	},

	componentDidMount(){
		this.cargarDatos();
	setInterval(this.cargarDatos,this.props.refresh)
	},

	click(id){
		this.setState({url2 : this.props.url + '?page=' +id},function(){

		console.log(this.state.url2);
		this.cargarDatos();
		});
	},

	render(){
		//console.log(this.props.ver);
		var indents = [];
		
		for (var i = 1; i <= this.state.num; i++) {
  			indents.push(<li onClick={this.click.bind(this,i)}  key={i}> <a>{i}</a></li>);
  			console.log(i);
		}

		return(
			<div>
			
<table className="table table-hover">
		  <thead>
			<tr>
		        <th><span className="glyphicon glyphicon-folder-open"></span></th>
		        <th>Asunto</th>
		        <th>Datos</th>
		        <th>Fecha de Inicio</th>
		        <th>Fecha de Finalización</th>
		        <th><span className="glyphicon glyphicon-envelope"></span> </th>
		    </tr>
		  </thead>
		  
		    <tbody>      
			  {
				this.state.data.map(
				 	function (tramite){
				 			//console.log(tramite.persona);
				
		 				return(
		 					<Tramite
		 					ide={tramite.nro_expediente}
		 					id={tramite.id}

							asunto={tramite.asunto}

							persona={tramite.persona.apellido + " "+ tramite.persona.nombre}
							destino={tramite.area.nombre}
							estado={JSON.stringify(tramite.estado)}
							fechainicio={tramite.created_at}

							ver={this.props.ver}

							base={this.props.base}
							key={tramite.id}
		 				/>
		 				)
				 			
				 				
				 		
				 	}
			 	,this)
			}
		    </tbody>

		</table>

		<ul className="pagination">
		
		 {indents}
		</ul>

		</div>

		);
	}

});