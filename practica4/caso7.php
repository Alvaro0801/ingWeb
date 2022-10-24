<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <h5>Contenido Original</h5>
        <p>
            Dentro del parrafo...
            <span>dentro del element span</span>
            ... aun dentro del parrafo
        </p>
    </div>
    <div>
        <h5>salida</h5>
        <div id="output"></div>
    </div>
    <script>
        var baseElement=document.querySelector("p")
        document.getElementById("output").innerHTML='Texto capturado: <b>'+(baseElement.querySelector("div span").innerHTML)+'</b>';
    </script>
</body>
</html>