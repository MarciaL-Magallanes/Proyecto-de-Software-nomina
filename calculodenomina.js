function calcularNomina() {
    // Obtener los valores del formulario
    var nombre = document.getElementById('nombre').value;
    var salarioBase = parseFloat(document.getElementById('salarioBase').value);
    var deducciones = parseFloat(document.getElementById('deducciones').value);
    var otrosIngresos = parseFloat(document.getElementById('otrosIngresos').value);

    // Realizar el cálculo de la nómina
    var totalNomina = salarioBase - deducciones + otrosIngresos;

    // Mostrar el resultado
    var resultadoDiv = document.getElementById('resultado');
    resultadoDiv.innerHTML = '<h3>Resultado del Cálculo:</h3>' +
    '<p>Nombre: ' + nombre + '</p>' +
    '<p>Salario Base: $' + salarioBase.toFixed(2) + '</p>' +
    '<p>Deducciones: $' + deducciones.toFixed(2) + '</p>' +
    '<p>Otros Ingresos: $' + otrosIngresos.toFixed(2) + '</p>' +
    '<p>Total Nómina: $' + totalNomina.toFixed(2) + '</p>';}







    