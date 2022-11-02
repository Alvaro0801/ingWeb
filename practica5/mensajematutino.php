<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <button onclick="myFunction()">Presionar boton para mostrar saludo del dia</button>
    <p id="demo"></p>
    <script>
        function funcion1() {
            document.getElementById("demo").innerHTML = "Buenos dias";
        }

        function myFunction(){
            fA(fB,fC,fError);
        }

        const fB=function(){
            document.getElementById("demo").innerHTML="Buenos dias";
        }
        
        const fC=function(){
            document.getElementById("demo").innerHTML="Buenos Tardes";
        }
        const fError=function(){
            document.getElementById("demo").innerHTML="Buenos Noches";
        }
        const fA=function(callback1,callback2,callbackError){
            var hour=new Date().getHours();
            if(hour >=4 && hour <12) callback1();
            else if(hour >=12 && hour <18) callback2();
            else callbackError();
            document.getElementById("demo").innerHTML+=" son las "+hour + " horas.";
        }

        
    </script>
</body>
</html>