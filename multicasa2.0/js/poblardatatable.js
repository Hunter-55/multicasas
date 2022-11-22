$(document).on("ready", function(){
	listar();
})

var listar = function(){
	var table = $("#inmuebles").DataTable({
		dom: 'Bfrtip',
				buttons: [
				'excel'
				],
		ajax:{
			type:"POST",
			url:"listarDataTable.php"
		},
		columns:[
		{data:"modificar"},
		{data:"eliminar"},
		{data:"encabezado"},
		{data:"estatus"},
		{data:"ciudad"},
		{data:"estado"},
		{data:"direccion"},
		{data:"codigo_postal"}
		]
	});
}