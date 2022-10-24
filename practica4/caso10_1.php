<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <script>
        var x=1;
        document.write("Ingresando un bucle <br>");
        while(x<20){
            if(x==5){
                break;
            }
            x=x+1;
            document.write(x+"<br>")
        }
        document.write("Saliendo del bucle <br>");
    </script>
</body>
</html>