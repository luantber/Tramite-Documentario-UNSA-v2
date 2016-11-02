
class Tramite extends React.Component{
	render(){
		return (
				
			<tr>
				<td>{this.props.id}</td>
				<td>{this.props.asunto}</td>
		        <td>
		        	De: {this.props.persona}  <br/>
		        	Para: {this.props.destino} <br/>
		        	Estado: {this.props.estado}  <br/>
		        </td>
		        <td>{this.props.fechainicio}</td>
		        <td>Final</td>
		        <th><span className="glyphicon glyphicon-envelope"></span> delegar</th>
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
				 			console.log(tramite.persona);
				 			if(!tramite.persona || !tramite.area ){ return(
				 				<Tramite
				 					id={tramite.nro_expediente}
									asunto={tramite.asunto}
									fechainicio={tramite.created_at}

									key={tramite.id}
				 				/>)
				 			}
				 			else{
				 				return(
				 					<Tramite
				 					id={tramite.nro_expediente}
									asunto={tramite.asunto}
									persona={tramite.persona.apellido + " "+ tramite.persona.nombre}
									destino={tramite.area.nombre}
									estado={JSON.stringify(tramite.estado)}
									fechainicio={tramite.created_at}

									key={tramite.id}
				 				/>
				 				)
				 			}
				 				
				 		
				 	}
			 	)
			}
		    </tbody>

		</table>

		);
	}

});