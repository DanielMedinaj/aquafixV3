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
    $pi=3.1416;
    $radio=$_GET["radio"];
    $area=0;
    if ($radio != 0){
        $radio=$radio*$radio;
        $area=$pi*$radio;
        print("El area del circulo es:" . $area);
    }elseif($radio==0){
        print("No ingreso ningun valor");
    }
    ?>
    </center>
    <br>
    <br>
    </div>
</body>
</html>