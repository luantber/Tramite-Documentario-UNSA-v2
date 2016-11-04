
class Persona extends React.Component{
	render(){
		return (
			<tr>
				<td>{this.props.name}</td>
				<td>{this.props.apellido}</td>
				<td>{this.props.dni}</td>
				<td>{this.props.email}</td>
				<td><a href={this.props.base+'/'+this.props.id}> <span className =  "glyphicon glyphicon-user"></span></a></td>
				<td><a href={this.props.base+'/'+this.props.id+'/editar'}> <span className =  "glyphicon glyphicon-pencil"></span> </a></td>


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
		     
		        <th>Nombre</th>
		        <th>Apellido</th>
		        <th>DNI</th>
		        <th>Email</th>
		        <th>Ver</th>
		        <th>Editar</th>
		        
		      
		      </tr>
		    </thead>
		  
		    <tbody>      
			  {
				this.state.data.map(
				 	function (persona){
				 		return(
				 				<Persona
				 					name={persona.nombre} 
				 					apellido={persona.apellido} 
				 					email={persona.email} 
				 					dni={persona.dni}
				 					base={this.props.base}
				 					id={persona.id} 
				 					key={persona.id}
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
