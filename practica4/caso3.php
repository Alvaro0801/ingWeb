<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="block" id="block"></div>
</body>
<script>
    const block=document.getElementById('block');
    let HTMLString='<h1>Encabezado1</h1> <h2>Encabezado 2</h2> <h3>Encabezado 3</h3> <h4>Encabezado 4</h4>';
    block.innerHTML=HTMLString;
</script>
</html>