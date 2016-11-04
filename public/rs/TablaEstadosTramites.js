
class Cargo extends React.Component{
	render(){
		return (
			<tr>
				<td>{this.props.nombre}</td>
				<td>{this.props.descripcion}</td>
				<td><a href={this.props.base+'/'+this.props.id}> <span className =  "glyphicon glyphicon-folder-open"></span></a></td>
				<td><a href={this.props.base+'/'+this.props.id+'/editar'}> <span className =  "glyphicon glyphicon-pencil"></span> </a></td>
				<td><a href={this.props.base+'/'+this.props.id+'/eliminar'}> <span className =  "glyphicon glyphicon-remove"></span></a></td>

			</tr>
			
		);
	}
}
	

window.TablaEstadosTramites = React.createClass({
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
	        	<th>Descripción</th>
	        	<th><span className =  "glyphicon glyphicon-folder-open"></span></th>
		        <th><span className =  "glyphicon glyphicon-pencil"></span></th>
		        <th><span className =  "glyphicon glyphicon-remove"></span></th>

		      
		      </tr>
		    </thead>
		  
		    <tbody>      
			  {
				this.state.data.map(
				 	function (cargo){
				 		return(
				 				<Cargo
				 					nombre={cargo.nombre} 
				 					descripcion={cargo.descripcion}
				 					base={this.props.base}
				 					id={cargo.id}
				 					key={cargo.id}

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
