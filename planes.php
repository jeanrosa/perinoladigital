<!DOCTYPE HTML>
<html>
	<?php include('config/head.php'); ?>
	<body>
		<div id="lateral" class="col-12">
<!--Cabezera Menu-->				
			<?php include('config/cabezera.php'); ?>
<!--Cuerpo de Pagina -->				
			<div id="cuerpo" class="col-9">
				<section class="filas col-12 redondas naranja sombras relativo  ">
					<!--Planes-->				
					<div class="tab">
						<button class="tablinks active" onclick="openTab(event, 'Planes')">PLANES > </button>
						<button class="tablinks" onclick="openTab(event, 'Balero')">BALERO</button>
						<button class="tablinks" onclick="openTab(event, 'Emboque')">EMBOQUE</button>
						<button class="tablinks" onclick="openTab(event, 'Boliche')">BOLICHE</button>
						<button class="tablinks" onclick="openTab(event, 'Ticayo')">TICAYO</button>
						<button class="tablinks" onclick="openTab(event, 'Ensamble')">ENSAMBLE</button>
						<button class="tablinks" onclick="openTab(event, 'Eventos')">EVENTOS</button>
						<button class="tablinks" onclick="openTab(event, 'Asesoria')">ASESORIA</button>
					</div>
					<!--Planes-->
					<div id="Planes" class="tabcontent filas centrar tfondoOfrecemos ImgComp" style="display: block;">					
						<article class="">
							<header>
								<h1>PLANES</h1>
							</header>
							<ul class="pointer">
								<li onclick="openTab(event, 'Balero')"><h2>PLAN – Balero</h2></li>
								<li onclick="openTab(event, 'Emboque')"><h2>PLAN - Emboque</h2></li>
								<li onclick="openTab(event, 'Boliche')"><h2>PLAN - Boliche</h2></li>
								<li onclick="openTab(event, 'Ticayo')"><h2>PLAN - Ticayo</h2></li>
								<li onclick="openTab(event, 'Eventos')"><h2>Eventos</h2></li>
								<li onclick="openTab(event, 'Ensamble')"><h2>Ensamble Digital</h2></li>
								<li onclick="openTab(event, 'Asesoria')"><h2>Asesoría Gratuita</h2></li>
							</ul>
							<footer id="titulos" class="col-6 absoluto">
								<p class="izquierda titulo ">¿QUÉ TE</p>
								<p class="derecha titulo afondonaranja ">OFRECEMOS?</p>	
							</footer>
						</article>
					</div>
					<!--/Planes-->
					<!--Balero-->
					<div id="Balero" class="tabcontent filas centrar tfondoBalero ImgComp">
						<article class="">
							
							<H2>Optimiza y administra tu presencia digital</H2>
							<H3>¿Qué ofrece?</H3>
							<P>
								Analizamos las herramientas web que estás usando, cómo las estás usando, y tus resultados
								actuales en la red.
								Te ayudamos a <strong>incrementar</strong> la presencia en la red, <strong>optimizar</strong> el uso de herramientas web
								(usar solo las que realmente necesitas), <strong>mejorar</strong> tu imagen 2.0, y <strong>administrarte
								independientemente</strong> en Internet.
							</P>
							<H3>¿Para quiénes?</H3>
							<p>
								Empresas y personas con páginas web y/o presencia en redes sociales que quieren <strong>mejorar</strong>
								los resultados, hacerse notar en la web y <strong>administrar ellos mismos</strong> sus herramientas 2.0.
							</p>
							<footer>
								<h1>Plan BALERO <a href="contacto.php">Contratar</a></h1>

							</footer>

						</article>
					</div>
					<!--/Balero-->
					<!--Emboque-->
					<div id="Emboque" class="tabcontent filas centrar tfondoEmboque ImgComp">
						<article class="">
							<H2>Desarrolla y Administra tu presencia digital</H2>
							<H3>¿Qué ofrece?</H3>
							<P>
								Analizamos tu perfil, necesidades y objetivos, y te ayudamos a <strong>desarrollar</strong> tu presencia en la
								red, <strong>implementar</strong> herramientas web (solo las que realmente necesitas), <strong>mejorar</strong> tu imagen
								2.0, y <strong>administrarte independientemente</strong> en Internet.
							</P>
							<H3>¿Para quiénes?</H3>
							<p>
								Empresas y personas que <strong>no tienen presencia digital</strong>, pero entienden la importancia de ésta
								para el desarrollo exitoso de sus empresas y emprendimientos. También quieren <strong>administrar
								ellos mismos</strong> sus herramientas 2.0.
							</p>
							<footer>
								<h1>Plan EMBOQUE <a href="contacto.php">Contratar</a></h1>
							</footer>
						</article>
					</div>
					<!--/Emboque-->
					<!--boliche-->
					<div id="Boliche" class="tabcontent filas centrar tfondoBoliche ImgComp">
						<article class="">
									
									<H2>Optimiza tu presencia digital</H2>
									<H3>¿Qué ofrece?</H3>
									<P>
										Analizamos las herramientas web que estás usando, cómo las estás usando, y tus resultados actuales en la red.
										Te ayudamos a <strong>incrementar</strong> tu presencia en la red, <strong>optimizar</strong> el uso de herramientas web
										(usar solo las que realmente te ayudarán) y <strong>mejorar</strong> tu imagen 2.0. Además, a<strong>dministraremos
										juntos</strong> tu presencia en Internet
									</P>
									<H3>¿Para quiénes?</H3>
									<p>
										Empresas y personas con páginas web y/o presencia en redes sociales, que quieren <strong>mejorar</strong>
										los resultados, hacerse notar en la web, y prefieren que nosotros le <strong>ayudemos a administrar</strong>
										sus herramientas 2.0.
									</p>
									<footer>
										<h1>Plan BOLICHE <a href="contacto.php">Contratar</a></h1>
									</footer>
						</article>
					</div>
					<!--/Boliche-->
					<!--Ticayo-->
					<div id="Ticayo" class="tabcontent filas centrar tfondoTicayo ImgComp">
						<article class="">
									
									<H2>Desarrolla tu presencia digital</H2>
									<H3>¿Qué ofrece?</H3>
									<P>
										Analizamos tu perfil, necesidades y objetivos, y te ayudamos a <strong>desarrollar</strong> tu presencia en la
										red, <strong>implementar</strong> herramientas web (solo las que realmente te ayudarán), y <strong>mejorar</strong> tu
										imagen 2.0. Además, <strong>administraremos juntos</strong> tu presencia en Internet
									</P>
									<H3>¿Para quiénes?</H3>
									<p>
										Empresas y personas que <strong>no tienen presencia digital</strong>, pero entienden la importancia de ésta
										para el desarrollo exitoso de sus empresas y emprendimientos. También, prefieren que
										nosotros le <strong>ayudemos a administrar</strong> sus herramientas 2.0.
									</p>
									<footer>
										<h1>Plan TICAYO <a href="contacto.php">Contratar</a></h1>
									</footer>
						</article>
					</div>
					<!--/Ticayo-->	
					<!--Ensamble-->	
					<div id="Ensamble" class="tabcontent filas centrar tfondoEnsamble ImgComp">
						<article class="">
									<header>
										<h1>ENSAMBLE DIGITAL</h1>
									</header>
									<P>
										<strong>Ajustamos</strong> nuestros servicios para darte una <strong>solución</strong> efectiva para lo que <strong>necesites</strong>:
										campañas, promociones, soluciones temporales, entre otros.
										Escríbenos y te contactaremos para construirla juntos.
									</P>
									<footer>
										<h1>ENSAMBLE DIGITAL <a href="contacto.php">Contratar</a></h1>
									</footer>
						</article>
					</div>
					<!--/Ensamble-->	
					<!--Eventos-->	
					<div id="Eventos" class="tabcontent filas centrar tfondoEventos ImgComp">
						<article class="">
									
									<H2>Eventos, congresos y talleres</H2>
									<H3>¿Qué ofrece?</H3>
									<P>
										Analizamos tu perfil, necesidades y objetivos, y te ayudamos a <strong>diseñar</strong> y <strong>producir</strong> eventos,
										congresos, talleres o cursos a la medida de tus deseos.
									</P>
									<H3>¿Para quiénes?</H3>
									<p>
										Empresas y personas que desean que los ayudemos a realizar eventos, congresos o talleres
										con calidad, estética y tecnología.
									</p>
									<footer>
										<h1>EVENTOS <a href="contacto.php">Contratar</a></h1>
									</footer>
						</article>
					</div>
					<!--/Eventos-->	
					<!--Asesoria-->	
					<div id="Asesoria" class="tabcontent filas centrar tfondoEnsamble ImgComp">
						<article class="">
									
									<H3>Necesitas ayuda con tu presencia digital, y quieres saber rápidamente cómo comenzarla o
										mejorar la que ya tienes. </H3>
									<footer>
										<h1>ASESORÍA GRATUITA <a href="contacto.php">Contratar</a></h1>
									</footer>
						</article>
					</div>
					<!--/Asesoria-->
			</div>
<!--Cuerpo de Pagina -->
			<?php include('config/pie.php'); ?>
		</div>
	</body>
</html>


<script>
function openTab(evt, tabName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(tabName).style.display = "block";
    evt.currentTarget.className += " active";
}
</script>
     
