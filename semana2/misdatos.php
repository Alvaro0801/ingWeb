<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="index.css">
    <title>Document</title>
</head>

<body>
    <form action="mostrardatos.php" method="post" class="form">
        <div class="form__title">Mis Datos</div>
        <div class="form__paragraph">Coloque sus datos</div>
        <div class="form__container">
            <div class="form__group">
                <label for="nombre" class="form__label">Nombre</label>
                <input type="text" id="nombre" name="nombre" placeholder="Su nombre de usuario" required
                    pattern="[A-Za-z0-9]{5,40}" />
            </div>
            <div class="form__group">
                <lab id="email" class="form__label">Email</lab>
                <input type="text" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$">
            </div>
            <div class="form__group">
                <label for="pwd" class="form__label">Password</label>
                <input type="password" name="pwd" id="pwd" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"
                    title="Contraseña invalida">
            </div>
            <div class="form__group">
                <label for="patente" class="form__label">Patente</label>
                <input type="text" name="patente" id="patente" required pattern="[A-Za-z]{3}[0-9]{3}"
                    placeholder="Su patente">
            </div>
            <div class="form__group">
                <label for="coche" class="form__label">Modelo de auto</label>
                <input type="text" name="coche" id="coche" placeholder="Su modelo de auto" required
                    pattern="A|a(1|3|4|15)" title="Modelos posibles: A1, A3, A4 y A15">
            </div>
            <div class="form__group">
                <label for="">Fichero Adjunto</label>
                <input type="file" name="imagencoche" id="">
            </div>
        </div>
        <input type="submit" class="form__submit"></input>

    </form>
</body>

</html>