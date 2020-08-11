<div id="cabezera" class="filas col-3">
	<header>
					<section id="logo">
						<a href="index.php"><img src="img/logo.jpg" alt="Logo" class="cab-img"><a/>
					</section>
					<div class="icon">
						<a href="javascript:void(0);" style="font-size:1em;"  onclick="myFunction()">&#9776;</a>
					</div>
					<div id="cabe" class="topnav">
						<section id="navegador">
							<nav>
								<li class="afondoamarillo"><a href="quienes_somos.php">¿Quiénes Somos?</a></li>
								<li class="afondonaranja"><a href="planes.php">¿Qué te ofrecemos?</a></li>
								<li class="afondoverde"><a href="estamos.php">¿Dónde estamos?</a></li>
								<li class="afondoazul"><a href="contacto.php">Contáctanos</a></li>
								<div><img src=""></div>
							</nav>
						</section>
					</div>
					<section id="pie-nav">
						<img src="img/PieNav.png" alt="Pie">
					</section>
	</header>
	<footer>
	</footer>
</div>
<script>
	function myFunction() {
		 var x = document.getElementById("cabe");
		 if (x.className === "topnav") {
		    x.className += " responsive";
		 } else {
		    x.className = "topnav";
		 }
	}
</script>		