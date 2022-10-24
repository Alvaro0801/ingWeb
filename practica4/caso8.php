<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script>
        function mostrarMensaje(){
            var nombre,edad,mensaje;
            nombre=prompt('Por favor introduce tu nombre:');
            if(nombre==''){
                alert('No has introducido ningún nombre');
            }else{
                alert('Hola '+ nombre + '. Bienvenido a esta página web.');
            }
            edad=prompt('¿Cuál es tu edad?');
            edad=Number(edad);
            if(edad>3 && edad<=12){
                mensaje=nombre + ' es de edad infantil.';
            }else if(edad>=13 && edad<18){
                mensaje=nombre + ' es de edad adolescente.';
            }else if(edad>=18 && edad<90){
                mensaje=nombre + ' es mayor de edad.';
            }else if(edad>=90){
                mensaje=nombre + ' Tiene muchos años encima ...';
            }else{
                alert('No has introducido un valor válido de edad ('+edad+')');
            }
            document.querySelector("p").innerHTML=mensaje;
        }
    </script>
</head>
<body>
    <div>
        <p>Presione la imagen</p>
        <input type="image" src="https://i.imgur.com/q06Co3J.png" alt="registrando" id="image" onclick="mostrarMensaje()">
    </div>
</body>
</html>