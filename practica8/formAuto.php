<html>

<body>
    <form method="post">
        Color de auto : <input type="text" name="color"><br>
        Potencia de auto : <input type="text" name="potencia"><br>
        Marca de auto : <input type="text" name="marca"><br>
        Imagen del auto : <input type="file" name="img" id="">
        <br><br>
        <input type="submit" value="Enviar">
    </form>
</body>

</html>
<?php
class Auto
{
    public $color;
    public $potencia;
    public $marca;
    public $img;
    public function getColor()
    {
        return $this->color;
    }
    public function getPotencia()
    {
        return $this->potencia;
    }
    public function getMarca()
    {
        return $this->marca;
    }
    public function getImg(){
        return $this->img;
    }
}
function Caracteristicas($clase, $datos)
{
    $clase->color = isset($_POST['color']) && !empty($_POST['color']) ? 'Color:
    ' . $_POST['color'] . "<br>" : null;
    $clase->potencia = isset($datos['potencia']) && !empty($datos['potencia']) ? 'Potencia:
' . $datos['potencia'] . "<br>" : null;

    $clase->marca = isset($datos['marca']) && !empty($datos['marca']) ? 'Marca:
' . $datos['marca'] : null;
    $clase->img = isset($datos['img']) && !empty($datos['img']) ? $datos['img'] : null;
}
function imprimir($cocheConcreto)
{
    echo $cocheConcreto->getColor();
    echo $cocheConcreto->getPotencia();
    echo $cocheConcreto->getMarca();
    echo "<br><img src=".$cocheConcreto->getImg().">";
}
$miCoche = new Auto();
Caracteristicas($miCoche, $_POST);
imprimir($miCoche);
?>