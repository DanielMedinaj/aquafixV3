<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel=StyleSheet type="text/css" href="Bootstrap/css/bootstrap.min.css">
    <link rel=StyleSheet type="text/css" href="css/estilodaniel.css">
    <title>Daniel Medina</title>
<!--    
<script>
alert("Bienvenido a mi página!!");
</script> -->
</head>
<body class="fondo">
    
  
  <!---<script>
let d = new Date();
document.body.innerHTML = "<h1>Son las:  " + d.getHours() + ":" + d.getMinutes() + ":" + d.getSeconds()+" horas"
"</h1>"
</script> -->
<header> 
<div class="container">
   <h1 class="display-2">Mi curriculum vitae</h1> 
</div>


   </header>

<div class="container">
<section class="main row">
   <article class=col-xs-12 col-sm-8 col-md-9 col-lg-9>
       <img src="imagenes/Daniel.jpeg" class="img-responsive" alt="IMAGEN DEL PERFECTISIMO Daniel" width="200" align="left" border="5px"> 
        
       <p class="CAJA" >Nombre: Daniel Jesus Medina Avila<br> Numero telefonico: 983 13 8 7379 <br>Correo electronico: Daniel.JMA@gmail.com <br><br><br><br></p>
    <br>
    <br><br>
    <p class="CAJA">Una breve introducción acerca de mí, me llamo Daniel Jesus Medina Avila nací el 25 de diciembre del 2002 actualmente tengo 17 años, practico el deporte de básquetbol y estoy un año de salir de la preparatoria.</p>
<div class="CAJA">
    <h2>Mi Educación</h2>
<p>° Estudie los 3 años en un kínder particular que se llamaba “OSITOS CARIÑOSITOS”.</p>
<p>° Estudie los 6 años en una primaria que se llamaba “RUFO FIGUEROA”.</p>
<p>° Estudie los 3 años en la escuela secundaria técnica nº 2 “JUSTO SIERRA MENDEZ”.</p>
<p>° Actualmente estoy estudiando mi preparatoria en el “CENTRO DE BACHILLERATO TECNOLOGICO INDUSTRIAL Y DE SERVICIO” N°253  Estudiola carrera de programación</p>
</div>
<br><br>
<div class="CAJA">
    <h2>EXPERIENCIA COMO ESTUDIANTE </h2>
    <p>Pues desde pequeño decía  que la escuela era relativamente sencilla pero con el paso del tiempo cosas empezaban a subir de dificultad, el kínder era lo más sencillo pase a la primaria y ya notaba que era algunos días con tarea y otros que no pero sin embargo las terminaba y pues termine la primaria y me fui a la secundaria y en ese lapso de primaria a secundaria se me complicaba porque eran muchos maestros no como en la primaria que solo era uno para todas las asignatura, pero pues nunca baje la cabeza y me llegue a acostumbrar al cambio de maestros y como todo alumno de secundaria llevaba el taller de diseño arquitectónico, en el cual tengo un poco de experiencia en las medidas y construcciones antes de que termine la secundaria ya tenía en mente que me iba a estudiar y pues quería agarrar programación y que mejor opción que ir al CBTIS 253 en el área de programación en el cual estoy actualmente en 4to semestre. Es una carrera muy completa pero la verdad no me siento muy apto para seguir en un fututo como programador, cuando termine la preparatoria me dirigiré al ITCH a estudiar el campo de Biología.
    </p>
</div>
<br><br>
<div class="CAJA">
<h2>ACTIVIDADES EN TIEMPOS LIBRES</h2>
<p>Antes decía que quería jugar al futbol pero la verdad no era bueno y decidí entrar a básquetbol en el cual no me considero el mejor pero hago mi esfuerzo para superarme día tras día.</p>
</div>
<br><br>

   

    
<div class="CAJA">  
    <h2>Calculador de radio:</h2>
    <img src="imagenes/calculadora.jpg" alt="" align="center" width="192" border="3">
    <p>Calcula el area de un circulo cuyo radio puede ingresar para realizar la operación</p>
    <form action="calculadora" method="GET"> 
    Ingrese el radio:<input type="text" name="radio" placeholder="Ingrese el radio">
    <input type="submit" name="enviar" button class="btn btn-primary">

    @if(Session::has('mensaje'))
					{{ Session::get('mensaje') }}
				@endif
    <br><br><br><br>
    </form>
    
</div>

</article> 
</section>
    
</div>

<script src="Bootstrap/js/jquery.js"></script>
<script src="Bootstrap/js/bootstrap.min.js"></script>
</body>
</html>