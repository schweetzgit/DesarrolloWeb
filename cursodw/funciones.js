function validar() {     
    var valor, text;     
    valor = document.getElementById("numero").value;     
        if (isNaN(valor) || valor < 1 || valor > 10) {text = "No es peque&ntilde;o!";} 
        else {text = "Muy bien!";}     
    document.getElementById("mensaje").innerHTML = text;} 


    function colorear(){     
        var imagen = document.getElementById('escudo');     
        if (imagen.src.match("escudi")) {imagen.src = "escudoUNAM.jpg"; } 
        else {imagen.src = "escudito.jpg";}}

    function fondo(){
        var backg = document.getElementById('color');
        document.body.style.backgroundColor = 'grey';
        if (backg = "rojo")
            window.alert("Lo sabia!")
            document.body.style.backgroundColor = 'red';
        } 
       
