/* ARCHIBO JAVASCRIPT CON CODIGO DESARROLLO PROYECTO API */

// Se declaran las variables, tomando del DOM por los id los elementos del fomulario
var productoInput = document.getElementById("producto")
var montoConDescuentoInput = document.getElementById("montoCon")
var descuentoInput = document.getElementById("descuento")
var montoSinDescuentoInput = document.getElementById("montoSin")
var detalle = document.getElementById("detalle")

// Se crear un evento, cada vez que cambie el input del nombre del producto, el ejecutara una funcion dentro de ella
// Esta funcion almacena todo en una varable llamada articulo, tomando su valor y colocandolas en mayusculas
// Despues ejecuta una funcion llamada consultar la cual se le envia lo que se escribe en el input
productoInput.addEventListener("input", function (e) {
    articulo = e.target.value.toUpperCase()
    consultar(articulo)
})

/*
La funcion consultar recibe un parametro, esta hace una llamada al servidor con una funcion fetch, la cual recibe
como parametro la pagina o en este caso el archivo php que ejecuta la consulta.
Despues de eso se hace una promesa con la palabra reservada then (entonces) da una respuesta que se convertira en un JSON
Despues de toma la respuesta almacenada en una variable

Se hace un for para que recorra todos los datos que tiene el JSON para comparar con lo que esta en params(parametro)
y hay un SI que compara, si el dato que viene del input, es extrictamente igual a la respuesta que da el JSON cada vez q recorre
entonces
1 genera unas variables donde se almacena cada uno de los datos que vamos a pintar en pantalla, como es el nombre, precio minimo,
    precio maximo, descuento, despues como siempre va a traer un precio minimo se hace la operacion de restarle el descuento
2 Se ejecuta un SI esta vez para que si precio maximo es diferente a nulo entonces resta el descuento del precio maximo y lo guarda en una variable
    Pero sino entonces crea una variable tanto para el precio como para el total del descento, que va a retornar "No tiene valor maximo"
3 Al terminar el SI SINO coloca los valores en cada input correspondiente, monto sin descuento, monto con descuento y el descuento
4 Despues imprime en pantalla el detalle, mostrando cada uno de las variables, si la lectura del navegador llega hasta alli, entonces rompe el codigo
    y no se sigue ejecutando

Despues de break, el SINO es la respuesta a si el valor del input no es igual a algo del JSON entonces, limpia pantalla y limpia cada input
*/
function consultar(params) {
    fetch('./logica.php')
        .then(response=>response.json())
        .then(data=>{
            for (let index = 0; index < data.length; index++) {
                if( params === data[index].consola){
                    document.getElementById("listar").innerHTML="  "
                    var nombre = data[index].consola
                    var precioMinimo = data[index].precioMinimo
                    var precioMaximo = data[index].precioMaximo
                    var descuento = data[index].descuento
                    var  precioMinDescuento = precioMinimo - ((precioMinimo * descuento) /100)
                    if (precioMaximo!=null){
                        var precioMaxDescuento = precioMaximo - ((precioMaximo * descuento) /100)
                    }else{
                        var precioMaxDescuento = "No tiene valor maximo"
                        precioMaximo = "No tiene valor maximo"
                    }
                    montoSinDescuentoInput.value=precioMinimo
                    montoConDescuentoInput.value=precioMinDescuento
                    descuentoInput.value=descuento

                    document.getElementById("listar").innerHTML = `
                        <p>Producto en existencia: ${nombre}</p>
                        <p>Precio Minimo: ${precioMinimo}</p>
                        <p>Precio Maximo: ${precioMaximo}</p>
                        <p>Descuento: ${descuento}%</p>
                        <p>Valor a pagar con precio minimo: ${precioMinDescuento}</p>
                        <p>Valor a pagar con precio maximo: ${precioMaxDescuento} </p>
                        `
                        break
                }else{
                    document.getElementById("listar").innerHTML = ""
                    montoSinDescuentoInput.value=""
                    montoConDescuentoInput.value=""
                    descuentoInput.value=""
                }
            }
    });
}



