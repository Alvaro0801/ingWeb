<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="">
        <p>
            <label for="">Elija algunos tipos de musica, luego haga clic en el boton de abajo</label><br>
            <select name="musicTypes" id="musicTypes" multiple="multiple">
                <option selected="selected">R&B</option>
                <option value="">Jazz</option>
                <option value="">Blues</option>
                <option value="">New Age</option>
                <option value="">Classical</option>
                <option value="">Opera</option>
            </select>
        </p>
        <input type="submit" id="idSubmit" value="¿Cuántos estan seleccionados?">
    </form>
    <script>
        let btn=document.getElementById('idSubmit');
        btn.addEventListener('click',()=>{
            let objetoSeleccionado=document.forms[0].musicTypes;
            let opciones_seleccionadas=0;

            for(let i=0;i<objetoSeleccionado.options.length;i++){
                if(objetoSeleccionado.options[i].selected){
                    opciones_seleccionadas++;
                }
            }
            alert('Número de opciones seleccionadas: '+opciones_seleccionadas);
        })
    </script>
</body>
</html>