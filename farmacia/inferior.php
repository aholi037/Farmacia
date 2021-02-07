   <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.3/dist/Chart.min.js" integrity="sha256-R4pqcOYV8lt7snxMQO/HSbVCFRPMdrhAFMH+vr9giYI=" crossorigin="anonymous"></script>
        
  
        
</body>
<script>




          $(function(){
    $("#chart").dxChart({
        dataSource: dataSource,
        palette: "soft",
        title: {
            text: "Ingresos por mes",
            subtitle: "Desde Marzo 2021"
        },
        commonSeriesSettings: {
            type: "bar",
            valueField: "number",
            argumentField: "age",
            ignoreEmptyPoints: true,
            label: {
                visible: true,
                format: {
                    type: "fixedPoint",
                    precision: 0
                }
            }
        },
        seriesTemplate: {
            nameField: "age"
        },
        legend: {
            verticalAlignment: "top",
            horizontalAlignment: "center",
            itemTextPosition: "right"
        }
    });
});

var dataSource = [
    { age: "Marzo", number: 5900000 },
    { age: "Abril", number: 38250000 },
    { age: "Mayo", number: 52820000 },
];

//para editar datos en los modales



//los buscadores en tiempo real

$(buscar_datos());

function buscar_datos(consulta){
	$.ajax({
		url: 'Buscadores/buscarProv.php',
		type: 'POST',
		dataType: 'html',
		data: {Consultar: consulta},
	})
	.done(function(respuesta) {
		$("#tabla_busqueda_prov").html(respuesta);
	})
	.fail(function() {
		console.log("error");
	})
	
}

$(document).on('keyup', '#busquedaProv', function() 
{
	var valor=$(this).val();

	if (valor!= "") {
		buscar_datos(valor);
	}
     else
     {
     	buscar_datos();
     }
});





            </script>
</html>