<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        #cuadrado{
            background-color:#f00e0e;
            border-radius: 15px;
            height: 110px;
            position: relative;
            width: 110px;
            margin-left:auto;
            margin-right:auto;
            margin-top:40vh;
        }
    </style>
    <title>Document</title>
</head>
<body>
    <div id="cuadrado"></div>
    <script>
        document.addEventListener('keydown',colorBlack);
        function colorBlack(e){
            if(e.keyCode=='37'){
                document.getElementById('cuadrado').style.background="#f4a130";
            }
        }
        
        window.addEventListener('keydown',colorGreen);
        function colorGreen(e){
            if(e.keyCode=='39'){
                document.getElementById('cuadrado').style.background="#f00ea239";
            }
        }
    </script>
</body>
</html>