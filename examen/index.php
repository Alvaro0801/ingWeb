<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
    <style>
        body{
            display:flex;
            justify-content:center;
            align-items:center;
        }
        span{
            color:red;
            display:block;
        }

        form{
            background-color:#fd0;
            padding: 10px;
            border-radius: 4px;
        }

    </style>
</head>
<body>
    <form action="datos.php" method="post" target="_blank" id="form">
        <h1>Formulario</h1>
        <label for="">Nombre</label>
        <input type="text" name="nombre" id="nombre">
        <span id="msg_nombre"></span>
        <br>
        <label for="">Edad</label>
        <input type="text" name="edad" id="edad">
        <span id="msg_edad"></span>
        <br>
        <label for="">Dni</label>
        <input type="text" name="dni" id="dni">
        <span id="msg_dni"></span>
        <br>
        <button type="submit" id="enviar">Enviar</button>
    </form>
    <script>
        const btn=document.getElementById("enviar");
        btn.addEventListener("click",(e)=>{
            const edad=document.getElementById("edad").value;
            const nombre=document.getElementById("nombre").value;
            const dni=document.getElementById("dni").value;
            const msg_edad=document.getElementById("msg_edad")
            let sen=true;
            e.preventDefault();
            if(edad==""){
                msg_edad.innerHTML="Edad esta vacio";
                sen=false;
            }
            if(nombre==""){
                msg_nombre.innerHTML="Nombre esta vacio"
                sen=false;
            }
            if(dni==""){
                msg_dni.innerHTML="Dni esta vacio";
                sen=false;
            }else{
                const regex=/^[0-9]{8}$/;
                if(!regex.test(dni)){
                    msg_dni.innerHTML="DNI debe tener 8 digitos numéricos";
                    sen=false;
                }
            }
            
            if(sen){
                const form=document.getElementById("form");
                form.submit();
            }
        })
        
    </script>
</body>
</html>