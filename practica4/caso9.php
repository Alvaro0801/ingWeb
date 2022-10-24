<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <input type="text" name="" id="demo">
    <p id="message">Ingresar un número entre 5 y 10</p>
    <button type="button" onclick="enviarTRY()">Enviar</button>
    <script>
        function enviarTRY(){
            const message=document.getElementById("message");
            message.innerHTML="";
            let x=document.getElementById("demo").value;
            try{
                if(x=="") throw "esta vacio";
                if(isNaN(x)) throw "no es un número";
                if(x>10) throw "Muy Grande";
                if(x<5) throw "Muy pequeño";
            }catch(err){
                message.innerHTML=err;
            }finally{
                document.getElementById("demo").value="";
            }
        }
    </script>
</body>
</html>