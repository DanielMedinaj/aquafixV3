<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>resultado en php</title>
    <link rel=StyleSheet type="text/css" href="../css/estilo.css">
</head>
<body class="fondo">
    <div class="CAJA">
        <img src="../imagenes/calculadora.jpg" width="200" align="center">
    <center class="texto">
    <?php
    //$pi=3.1416;
    $longitud=$_GET["longitud"];
    $anchura=$_GET["anchura"];
    $profundidad=$_GET["profundidad"];
    $volumen=0;
    if ($longitud != 0 && $anchura != 0 && $profundidad != 0){
        $volumen=$longitud*$anchura*$profundidad;
       // $area=$pi*$radio;
        print("El volumen de la alberca es:" . $volumen);
    }elseif($longitud==0){
        print("No ingresó longitud");
    }
    elseif($anchura==0){
        print("No ingresó anchura");
    }
    elseif($profundidad==0){
        print("No ingresó profundidad media");
    }    

    ?>
    </center>
    <br>
    <br>
    </div>
</body>
</html>