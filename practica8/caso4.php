<?php
    class Operacion{
        protected $valor1;
        protected $valor2;
        protected $resultado;
        public function cargar1($v){
            $this->valor1=$v;
        }
        public function cargar2($v){
            $this->valor2=$v;
        }
        public function imprimirResultado(){
            return $this->resultado;
        }
    }

    class Suma extends Operacion{
        public function operar(){
            $this->resultado=$this->valor1+$this->valor2;
        }
    }
    class Resta extends Operacion{
        public function operar(){
            $this->resultado=$this->valor1-$this->valor2;
        }
    }

    if($_POST){
        $num1=$_POST['num1'];
        $num2=$_POST['num2'];
        $suma=new Suma();
        $suma->cargar1($num1);
        $suma->cargar2($num2);
        $resta=new Resta();
        $resta->cargar1($num1);
        $resta->cargar2($num2);
        $suma->operar();
        $resta->operar();
        echo "Numero 1: $num1 <br> Numero 2: $num2 <br>";
        echo "Suma : ".$suma->imprimirResultado();
        echo " <br> Resta :".$resta->imprimirResultado();
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">
        <label for="">Numero 1</label>
        <input type="text" name="num1" id="">
        <label for="">Numero 2</label>
        <input type="text" name="num2" id="">
        <button type="submit">Enviar</button>
    </form>
</body>
</html>