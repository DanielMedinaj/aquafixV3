<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
 <!--  <link rel=StyleSheet type="text/css" href="Bootstrap/css/bootstrap.min.css">-->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.0/css/bulma.min.css">

    <link rel=StyleSheet type="text/css" href="css/estilo.css">
	
	<title>ACUAFIX...Mantenimiento de albercas</title>
</head>
<body>
<header>

	<section class="section">
			<div class="container">
			<div class="columns">
				<div class="colum is-one-quarter">
					<h1 class="title has-text-white">
						AQUAFIX - MANTENIMIENTO DE ALBERCAS		
					</h1>
					
				</div>

				
			<div class="column">
				
			<p margin="left">Envíanos tus datos para contactarte:   <button class="button is-success" onclick="window.location.href='clientes'">Contacto</button></p>	
			@if(Session::has('mensaje'))
					{{ Session::get('mensaje') }}
				@endif

			</div>
			</div>
			</div>
		
	</section>
</header>



<nav>
    <ul>
        <li><a href="menu">Menu Principal</a> </li>
         <li class="right"><a href="index">Salir</a> </li>

    </ul>
</nav>



	
		
<section class="section">
	<article class="article">
		<div class="container">
		<div class="columns">
			<div class="column is-three-quarters">
		<p>
			<img src="imagenes/alberca.jpg" class="izquierda" alt="IMAGEN DEL PERFECTISIMO Daniel" width="470">
			<h3>¿QUÉ CAPACIDAD TIENE MI ALBERCA?</h3>
			
			
			Antes de empezar cualquier tratamiento en su alberca, debe conocer cual es su capacidad. De esta forma se podrá calcular exactamente la dosis de productos quimicos que deberá acondicionar el agua. <br><br>
		</p>	 
	
		<p>
			<h3>TIPOS DE ALBERCA</h3>
			<ul>
			<li>Alberca circular</li>
			<li>Alberca rectangular/cuadrada</li>
			<li>Alberca ovalada</li>
			</ul>
		</p>	
			
			</div>

			
<aside>		
	
<div class="column">
	<p class="lateral">
		
<form action="volumen" method="GET">
  <div class="container">
    <label class="label" for="exampleInputEmail1">LONGITUD</label>
    <input type="text" class="input" name="longitud" aria-describedby="emailHelp" placeholder="INGRESE LONGITUD">
    </div>
  <div class="form-group">
    <label class="label" for="exampleInputPassword1">ANCHURA</label>
    <input type="text" class="input" name="anchura" placeholder="INGRESE ANCHURA">
  </div>
  <div class="form-group">
    <label class="label" for="exampleInputEmail1">PROFUNDIDAD MEDIA</label>
    <input type="text" class="input" name="profundidad" aria-describedby="emailHelp" placeholder="INGRESE PROFUNDIDAD MEDIA">
    </div>
  <button type="submit" class="button is-primary">CALCULAR</button>
</form>

</p>

</div>
</aside>

</div>
</div>	
</article>
</section>	

<div class="row">
	
	<div class="col-xs-12 col-md-9">
		<p>
			<h4>PARA CALCULAR EL VOLUMEN EN TODOS LOS CASOS DEBE USAR LA SIGUIENTE FORMULA:</h4>
			Longitud (m) X anchura(m) X profundidad media(m) = volumen(m)
		</p>
	</div>
	

<div class="color2 col-xs-12 col-md-3">
		<p>
			
		<h4>NO OLVIDAR NUNCA</h4>
		<ul>
		<li>Mantener un nivel correcto de agua</li>
		<li>Ante cualquier amenaza de lluvia, aumente el nivel de cloro</li>
		<li>Cuando haga aportaciones de agua nueva, analice el nivel de cloro y el ph necesario</li>

		</ul>

		</p>
	</div>



</div>


<footer>
	<div class="container">
	<h5>
	<a href="curriculum.html">Acerca de mi</a>
	</h5>	
	</div>
	
</footer>
</body>
</html>