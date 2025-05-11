<!DOCTYPE html>
<html lang="es_ES">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bhaskara</title>
</head>
<body>
    <!--Formulario-->
    <form action="" method="POST">
        <label for="a">Valor de a: </label>
        <input type="number" id="a" name="a">
        <br>
        <label for="b">Valor de b: </label>
        <input type="number" id="b" name="b">
        <br>
        <label for="c">Valor de c: </label>
        <input type="number" id="c" name="c">
        <br>
        <input type="submit" value="CALCULAR">
    </form>
    <?php 
    if($_SERVER["REQUEST_METHOD"]=="POST") {
        // Declaraciones
        $a = $_POST['a'];
        $b = $_POST['b'];
        $c = $_POST['c'];
        // Funciones
        function bhaskara($a, $b, $c) {
        $delta = ($b * $b) - 4 * $a * $c;
        if($delta < 0) {
            echo "No tiene raíces";
        }
        else {
            $delta= sqrt(floatval($delta));
            $division = $delta / 2 * $a;
            $raizUno = $division + ($b * -1);
            $raizDos = $division - ($b * -1);
            echo "Sus raíces son $raizUno y $raizDos";
            }
        }
        bhaskara($a, $b, $c);
    }
    ?>
</body>
</html>
