
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
		return {data:[]};
	},

	cargarDatos(){
		$.ajax({
	  		url: this.props.url,
			dataType: 'json',
	  			  		
	  		success: function(data) {
	  			console.log(data);
	    		this.setState({data: data});
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

	render(){
		console.log(this.props.ver);
		return(
			
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

		);
	}

});