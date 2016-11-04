
class Empleado extends React.Component{
	render(){
		return (
			<tr>

				<td>{this.props.name}</td>
				<td>{this.props.apellido}</td>
				<td>{this.props.dni}</td>
				<td>{this.props.email}</td>
				<td>{this.props.area}</td>
				<td>{this.props.cargo}</td>
				<td><a href={this.props.base+'/'+this.props.id}> <span className =  "glyphicon glyphicon-user"></span></a></td>
				<td><a href={this.props.base+'/'+this.props.id+'/editar'}> <span className =  "glyphicon glyphicon-pencil"></span> </a></td>
				<td><a href={this.props.base+'/'+this.props.id+'/eliminar'}> <span className =  "glyphicon glyphicon-remove"></span></a></td>

			</tr>
			
		);
	}
}
	

window.TablaEmpleados = React.createClass({
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
	
		        <th>Nombre</th>
		        <th>Apellido</th>
		        <th>DNI</th>
		        <th>Email</th>
		        <th>Área</th>
		        <th>Cargo</th>
		        
	        	<th><span className =  "glyphicon glyphicon-user"></span></th>
		        <th><span className =  "glyphicon glyphicon-pencil"></span></th>
		        <th><span className =  "glyphicon glyphicon-remove"></span></th>

		      
		      </tr>
		    </thead>
		  
		    <tbody>      
			  {
				this.state.data.map(
				 	function (empleado){
				 		return(
				 				<Empleado
				 					name={empleado.user.nombre} 
				 					apellido={empleado.user.apellido} 
				 					email={empleado.user.email} 
				 					dni={empleado.user.dni}
									area={empleado.area.nombre}
									cargo ={empleado.cargo.nombreCargo}
				 					base={this.props.base}
				 					id={empleado.id} 
				 					key={empleado.id}
				 				/>
				 		)
				 	},this
			 	)
			}
		    </tbody>

		</table>

		);
	}

});
