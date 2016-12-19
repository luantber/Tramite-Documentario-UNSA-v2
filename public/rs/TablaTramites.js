
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
		        <td>
		        	{ this.props.comentario}
		        </td>
		        


		       	
    			<td><a href={this.props.base+'/'+this.props.id} target="_top" > <span className = "glyphicon glyphicon-envelope"></span></a> </td>
    			


    			{this.props.recibido &&
				<td><a href={this.props.base+'/'+this.props.id+'/recibir'} target="_top"> <span className = "glyphicon glyphicon-ok-sign"></span> </a></td>
				}


    			{this.props.norecibido &&
				<td><a href={this.props.base+'/'+this.props.id+'/recibir'} target="_top"> <span className = "glyphicon glyphicon-remove-sign"></span> </a></td>
				}

    			{this.props.ver &&
				<td><a href={this.props.base+'/'+this.props.id+'/delegar'} target="_top"> <span className = "glyphicon glyphicon-send"></span> </a></td>
				}


    			{this.props.ver &&
				<td><a href={this.props.base+'/'+this.props.id+'/editar'} target="_top"> <span className = "glyphicon glyphicon-pencil"></span> </a></td>
				}
				
				{this.props.ver &&
				<td><a href={this.props.base+'/'+this.props.id+'/cambiarEstado'} target="_top"> <span className =  "glyphicon glyphicon glyphicon-edit"></span> </a></td>
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
			num:0,
			actual:1

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
		this.setState({url2 : this.props.url + '?page=' +id,actual:id},function(){
			//console.log(this.state.url2);
			this.cargarDatos();

		});


	},

	render(){
		//console.log(this.props.ver);
		var indents = [];
		
		for (var i = 1; i <= this.state.num; i=i+10) {
			if(this.state.actual == i){
				indents.push(<li className="active" onClick={this.click.bind(this,i)}  key={i}> <a>{i}</a></li>);	
			}else{
  				indents.push(<li onClick={this.click.bind(this,i)}  key={i}> <a>{i}</a></li>);
			}
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
		        <th>Último Comentario</th>


		        <th><span className="glyphicon glyphicon-envelope"></span> </th>
    		
    			{this.props.ver &&
				<th><span className = "glyphicon glyphicon-ok"></span> </th>
				}

				{this.props.ver &&
				<th><span className = "glyphicon glyphicon-send"></span></th>
				}


    			{this.props.ver &&
				<th><span className = "glyphicon glyphicon-pencil"></span></th>
				}
				{this.props.ver &&
				<th><span className =  "glyphicon glyphicon glyphicon-edit"></span></th>
				}

		    </tr>
		  </thead>
		  
		    <tbody>      
			  {
				this.state.data.map(
				 	function (tramite){

				if(tramite.estado){
					
				if(this.props.ver){

						if(tramite.aceptado && this.props.yes){

							console.log("here 2");

						return(
		 					<Tramite
		 					ide={tramite.nro_expediente}
		 					id={tramite.id}

							asunto={tramite.asunto}

							persona={tramite.persona.apellido + " "+ tramite.persona.nombre}
							destino={tramite.area.nombre}
							estado={tramite.estado.nombre}
							fechainicio={tramite.created_at}

							comentario={ JSON.stringify(tramite.comentario[tramite.comentario.length-1].comentario) }

							ver={this.props.ver}

							recibido="true"

							base={this.props.base}
							key={tramite.id}
		 				/>
		 				)
					}
					else{

						if(this.props.no){
							
						console.log("here 1");

						return(
		 					<Tramite
		 					ide={tramite.nro_expediente}
		 					id={tramite.id}

							asunto={tramite.asunto}

							comentario={ JSON.stringify(tramite.comentario[tramite.comentario.length-1].comentario) }

							persona={tramite.persona.apellido + " "+ tramite.persona.nombre}
							destino={tramite.area.nombre}
							estado={tramite.estado.nombre}
							fechainicio={tramite.created_at}

							ver={this.props.ver}

							norecibido="true"

							base={this.props.base}
							key={tramite.id}
		 				/>
		 				)

						}
					}
				}
				else{
					console.log("here ");
					return(
		 					<Tramite
		 					ide={tramite.nro_expediente}
		 					id={tramite.id}

							asunto={tramite.asunto}

							comentario={ JSON.stringify(tramite.comentario[tramite.comentario.length-1].comentario) }

							persona={tramite.persona.apellido + " "+ tramite.persona.nombre}
							destino={tramite.area.nombre}
							estado={tramite.estado.nombre}
							fechainicio={tramite.created_at}
					

							base={this.props.base}
							key={tramite.id}
		 				/>
		 				)
				}					
				}
				else{
					console.log("error Con tramite");
					console.log(tramite);
				}

				 		
					
		 				
				 				
				 		
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