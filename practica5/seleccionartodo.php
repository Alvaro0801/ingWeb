<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <span class="salida"></span>
    <script type="text/javascript">  
    (function (){
        const d = new Date();
        let fecha = d.toString();
        document.querySelector('.salida').textContent = fecha;
        }
    )();
    
    function selectAllData(id) {  
        var obj = document.getElementById(id); 
        obj.innerHTML=document.querySelector('.salida').innerHTML; 
        var text_val=eval(obj);  
        text_val.focus();  
        text_val.select();  
        if (!document.all) return;  
            r = text_val.createTextRange();  
            r.execCommand('copy');  
    }
    </script>  
    <p>
        <textarea cols="30" id="textareaId" row="50">  
            javascript interview questions and answers  
        </textarea>  
    </p>
    <p>
        <input onclick="return selectAllData('textareaId')" type="button" value="Selecccionar todo" />
    </p>      
</body>
</html>