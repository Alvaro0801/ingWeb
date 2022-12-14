<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        form{
            margin: 10px;
        }
        label,input{
            margin:5px;
        }
        button{
            display: block;
            margin: 10px 8px;
            width: 60px;
        }
    </style>
</head>
<body>
    <form action="index.php" method="GET" id="formV">
        <h2 id="title"></h2>
        <input type="hidden" name="tipo" value="<?= $_GET['tipo']?>">
        <label for="">Marca:</label>
        <input type="text" name="marca" id="">
        <br>
        <label for="">Modelo:</label>
        <input type="text" name="modelo" id="">
        <br>
        <label for="">Color</label>
        <input type="text" name="color" id="">
        <br>
        <label for="">Propietario:</label>
        <input type="text" name="prop" id="">
        <br>
    </form>
    <button id="enviar">Enviar</button>
    <script>
        let ruta=new URLSearchParams(window.location.search);
        let tipoVehiculo=ruta.get('tipo');
        document.querySelector('#title').innerHTML=tipoVehiculo;
        if(tipoVehiculo=="Autobus"){
            formV.innerHTML+=`<label for="">Empresa:</label>
        <input type="text" name="emp">`;
        }

        enviar.addEventListener('click',(e)=>{
            formV.submit();
        })
    </script>
</body>
</html>