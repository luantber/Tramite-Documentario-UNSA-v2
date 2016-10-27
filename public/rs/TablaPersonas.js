
class Persona extends React.Component{
	render(){
		return (
			<tr>
				<td>{this.props.id}</td>
				<td>{this.props.name}</td>
				<td>{this.props.apellido}</td>
				<td>{this.props.dni}</td>
				<td>{this.props.email}</td>
			</tr>
			
		);
	}
}
	

window.TablaPersonas = React.createClass({
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
		        <th>ID</th>
		        <th>Nombre</th>
		        <th>Apellido</th>
		        <th>DNI</th>
		        <th>Email</th>
		      
		      </tr>
		    </thead>
		  
		    <tbody>      
			  {
				this.state.data.map(
				 	function (persona){
				 		return(
				 				<Persona
				 					id={persona.id} 
				 					name={persona.nombre} 
				 					apellido={persona.apellido} 
				 					email={persona.email} 
				 					dni={persona.dni}  
				 					key={persona.id}
				 				/>
				 		)
				 	}
			 	)
			}
		    </tbody>

		</table>

		);
	}

});
