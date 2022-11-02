<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <div class="form">
        <h1>REGISTRO DE RUC</h1>
        <form>
            <p>El número de RUC solo debe contener 11 digitos numéricos</p>
            <div class="form__group">
                <label for="ruc" class="form__label">Numero de RUC</label>
                <input type="text" id="ruc" onchange="myFunction()" class="form__input">
            </div>
        </form>
        <p id="msg"></p>
    </div>
    <script>
        function myFunction(){
            const numeroRuc=document.getElementById('ruc').value;
            const regex=/^[0-9]{11}$/;
            const mensaje=document.getElementById('msg');
            if(regex.test(numeroRuc)){
                mensaje.innerHTML='RUC VÁLIDO';
            }else{
                mensaje.innerHTML='RUC INVÁLIDO';
            }
        }
    </script>
</body>
</html>