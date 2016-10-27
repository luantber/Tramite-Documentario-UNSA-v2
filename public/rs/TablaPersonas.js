
class Persona extends React.Component{
	render(){
		return (
			<tr>
				<td>{this.props.id}</td>
				<td>{this.props.name}</td>
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
		      
		      </tr>
		    </thead>
		  
		    <tbody>      
			  {
				this.state.data.map(
				 	function (persona){
				 		return(
				 				<Persona name={persona.nombre} id={persona.id} key={persona.id}/>
				 		)
				 	}
			 	)
			}
		    </tbody>

		</table>

		);
	}

});
