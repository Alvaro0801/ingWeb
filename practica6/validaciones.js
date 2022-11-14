const form=document.getElementById('enviarC');


form.addEventListener('click',(e)=>{
    e.preventDefault();

    let enviar=true;
    const nombre=document.getElementById('nombre').value;
    let regex=/^[A-Za-z ]+$/;
    const msg=document.getElementById('msg_nombre');
    if(!regex.test(nombre)){
        msg.innerHTML='Nombre Inválido';
        enviar=false;
    }

    regex=/^[1-9]{9}$/
    
    const telefono=document.getElementById('tlf').value;
    const msgTlf=document.getElementById('msg_tlf');
    if(!regex.test(telefono)){
        msgTlf.innerHTML='El telefono solo debe tener 9 dígitos';
        enviar=false;
    }
    
    
    regex=/^(([^<>()[\]\.,;:\s@\"]+(\.[^<>()[\]\.,;:\s@\"]+)*)|(\".+\"))@(([^<>()[\]\.,;:\s@\"]+\.)+[^<>()[\]\.,;:\s@\"]{2,})$/i

    const email=document.getElementById('email').value;
    const msgEmail=document.getElementById('msg_email');
    if(!regex.test(email)){
        msgEmail.innerHTML='Correo Inválido';
        enviar=false;
    }

    if(enviar){
        const formC=document.querySelector('.form');
        console.log('Enviado')
        fetch('http://localhost/ingweb/practica6/agregar.php',{
            method:'post',
            body: new FormData(formC)
        }).then(res=>res.json()).then(res=>{
            console.log(res);
            formC.submit();
        })
    }
})
