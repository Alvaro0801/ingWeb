<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        a{
            text-decoration: none;
            color: #000;
        }
    </style>
</head>
<body>
    <h1>Nro Cita</h1>
    <form action="cambiarcita.php" method="get" id="form">
        <input type="text" name="id" id="id_cita">
    </form>
    <br><br>
    <button>
        <a href="agregarcita.php">Agregar Cita</a>
    </button>
    <br><br>
    <button id="cambiarCita">
        Cambiar Cita
    </button>

    <script>
        const btnCita=document.getElementById("cambiarCita");

        btnCita.addEventListener("click",()=>{
            form.submit();
        })
    </script>

</body>
</html>