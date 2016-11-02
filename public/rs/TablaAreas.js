
class Cargo extends React.Component{
	render(){
		return (
			<tr>
				<td>{this.props.nombre}</td>
				<td>{this.props.padre}</td>
				<td>{this.props.jefe}</td>
				<td>{this.props.descripcion}</td>

			</tr>
			
		);
	}
}
	

window.TablaAreas = React.createClass({
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
			
<table className="table table-striped">
		  <thead>
		      <tr>
		        
		        <th>Nombre de Area</th>
	        	<th>Area Padre</th>
	        	<th>Jefe de Area</th>
	        	<th>Descripción</th>
		      
		      </tr>
		    </thead>
		  
		    <tbody>      
			  {
				this.state.data.map(
				 	function (area){

				 		if(area.area){
				 			if(area.jefe){
				 				return(
				 				<Cargo
				 					nombre={area.nombre} 
				 					descripcion={area.descripcion}
				 					padre={area.area.nombre}
				 					jefe={area.jefe.user.nombre + " " +area.jefe.user.apellido}

				 					key={area.id}
				 				/>)
				 			}
				 			else{
				 				return(
				 				<Cargo
				 					nombre={area.nombre} 
				 					descripcion={area.descripcion}
				 					padre={area.area.nombre}
				 					
				 					key={area.id}
				 				/>)
				 			}
				 				
				 		}
				 		else{
				 			if(area.jefe){
				 				return(
				 				<Cargo
				 					nombre={area.nombre} 
				 					descripcion={area.descripcion}
				 					
				 					jefe={area.jefe.user.nombre + area.jefe.user.apellido}

				 					key={area.id}
				 				/>)
				 			}
				 			else{
				 				return(
				 				<Cargo
				 					nombre={area.nombre} 
				 					descripcion={area.descripcion}
				 			
				 					
				 					key={area.id}
				 				/>)
				 			}
				 		}
				 		
				 	}
			 	)
			}
		    </tbody>

		</table>

		);
	}

});
