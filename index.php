<html>
<head lang="es">
	<link rel="stylesheet" type="text/css" href="style.css">
	<meta charset="utf-8">
	<title>Renova Spa</title>
</head>
<header>
	
</header>
<body>
	<div  id="formulario">
		<img src="renovaspa.png" id="renova">
		<h1 style="clear: right;">Exoneración de Responsabilidad</h1>
	</div>
	<br>
	<nav>
		Bienvenido | welcome | willkommen | benvenuto | valkomen | bienvenue
	</nav>
	<p>Por favor, dedique unos meinutos a leer cuidadosamente
		la información siguiente y suscribirla con una 
		firma al finalizar. Muchuas gracias.
	</p>
	<div id="Relleno">
	<form  method="post" action="guardar.php">
	<input type="text" placeholder="Nombre:" class="textNom" name="name">
	<input type="number" placeholder="Edad:" class="textEda" name="age">
	<br>
	<br>
	<input type="text" placeholder="País:" class="textPai" name="country">
	<input type="text"placeholder="E-mail:" class="textEma" name="email">
	<br>
	<br>
	<input type="text" placeholder="Hotel:" class="textHot" name="hotel" id="hotel">
	<input type="text" placeholder="Habitación:" class="textHab" name="habitacion" id="room">
	<br>
	<br>
	<input type="text" placeholder="Agencia de viaje:" class="textAge" name="agencia" id="agency">
	<br>
	<br>
	<input type="text" placeholder="Tratamiento:" class="textTra" name="tratamiento" id="treatment">
	<input type="text" placeholder="Terapeuta" class="textTer" name="terapeuta" id="therapist">
	<br>
	<input type="submit" value="insertar" name="guardar">
	</form>
</div>
	
	
	<ol>
		<li value="1"> El mesaje o tratamietno que usted va a recibir tiene el propósito 
			básico de la relajación y el alivio de la tensión muscular superficial.</li>
			<br>
		<li>Si usted está inastfecho con el servicio, o experimenta cualquier tipo de molestia  o dolor durante la 
		sesión, informe por favor al terapeuta cuanto antes.</li>
			<br>
		<li>Si no se menciona nada durante la sesión, asumiremos que no ha habido
		 ningún problema.</li>
		 	<br>
		<li>Hágamos saber antes del inicio de la sesión si se encuentra bajo algunas de 
		las siguientes circuntancias:</li>
		<br>
		<input type="checkbox">Embarazo<input type="checkbox">Problemas del corazón<input type="checkbox">Claustrofobia 
		<input type="checkbox">Dolor general <input type="checkbox">Alergía <input type="checkbox">Epilepsia<br>
		<input type="checkbox">Problemas en la piel <input type="checkbox">Cirugía reciente <input type="checkbox">Problemas
		o lesión de la espina dorsal <input type="checkbox">Diabetes <input type="checkbox">Acne<br><input type="checkbox">algún otro desquilibrio de la salud:
		<br>
		<div style="text-align: center;">
		<textarea rows="5" cols="80" class="comentario" id="comentario">

		</textarea>	
	</div>
		<br>
		<li>Cualquier insinuación, hecho o propuesta de caracter ocasionara el final inmediato
			dela sesión él/la huésped seera obligada al pago completo del servicio</li>
		<br>
		<li>Por la seguridad de sus valores, le sugerimos dejarlos en la caja fuerte de su habitación.<br>
			Renova Spa no asumirá ninguna responsabiidad por robo o extravío de valores</li>
	</ol>
	<p>Le agradecemos su compresión y esperamos que difrute de nuestros servicios.</p>
	<br>
	<br>

	<table style="margin: 0 auto;"  width="100%">
	<tr>
    	<td><hr style='width: 50%'>Firma del Terapeuta</td>
    	<td><hr style='width: 50%'>Firma del Cliente</td>
	</tr>
    </table>
    <br>
    <p>Por favor ayúdenos a mejorar nuestros servicios dándonos su opinión sobre le servicio recibido.</p>
    <div id="imagenes" align="center">
    	<img src="muyBueno.png">
    	<img src="bueno.png">
    	<img src="normal.png">
    	<img src="malo.png">
    </div>
    <div id="check" align="center">
    	<input type="checkbox">
    	<input type="checkbox">
    	<input type="checkbox">
    	<input type="checkbox">
    </div>
    <br>
    <br>
    <footer>Dada la inexistencia previa de condición médica especial, Renova Spa y el Hotel no se hacen responsables
     de ningún efecto secundario resultante.
 	</footer>
</body>
</html>