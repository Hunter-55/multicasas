$(document).ready(function () {
    datos = []
    //Se crea la grafica vacía
    var grafica = new CanvasJS.Chart("grafica", {
            animationEnabled: true,
            data: [
                {
                    dataPoints: datos
                }
            ]
        });

    //Se obtiene el JSON de data.php y manda la informacion a la gráfica
    $.getJSON("php/data.php", function (result) {
        grafica.options.data[0].dataPoints = result;
        grafica.render();
    });


var IntervalodeAct = 1000;

var actualizarGrafica = function () {

    $.getJSON("php/data.php", function (result) {
    grafica.options.data[0].dataPoints = result;

    grafica.render();
    });  

};
//En un intervalo de tiempo de 1 segundo se ejecuta la funcion actualizarGrafica()
setInterval(function(){actualizarGrafica()}, IntervalodeAct);
});