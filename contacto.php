<!DOCTYPE HTML>
<html>
	<?php include('config/head.php'); ?>
	<body>
		<div id="lateral" class="col-12">
<!--Cabezera Menu-->				
			<?php include('config/cabezera.php'); ?>
<!--Cuerpo de Pagina -->				
			<div id="cuerpo" class="col-9">
				<section class="filas col-12 redondas azul sombras centrar relativo">
					<article class="">
							
							<form class="formularios" action="#">
								<fieldset class="col-12">
							    	
							    	<h3 class="">Nombre de persona o Compañía solicitante</h3>
							    	<input class="col-12" type="text" name="nombre" placeholder="tu compañía" required/><br>
							    	<h3>País</h3>
							    	<input class="col-12" type="text" name="pais" placeholder="tu país"/><br>
							    	<h3>Ciudad</h3>
							    	<input class="col-12" type="text" name="ciudad" placeholder="tu ciudad"/><br>
							    	<h3>Correo Electrónico</h3>
							    	<input class="col-12" type="mail" name="correo" placeholder="tucorreo@dominio.ve" required/><br>
							    	<h3>Teléfono de contacto</h3>
							    	<input class="col-12" type="number" name="telefono"/><br>
							    	<h3>Comentarios</h3>
							    	<textarea class="col-12" rows="4" cols="50"></textarea>
							  </fieldset>
							  <br><br>
							  	<input class="col-6" type="submit"/>
							  	<input class="col-6" type="reset"/>
							</form>
							<footer id="titulos" class="col-6 absoluto">
								<p class="izquierda titulo "></p>
								<p class="derecha titulo afondoazul ">CONTÁCTANOS</p>	
							</footer>
					</article>
				</section>
			</div>
			<!--Pie de Pagina -->
			<?php include('config/pie.php'); ?>
		</div>		
	</body>
</html>