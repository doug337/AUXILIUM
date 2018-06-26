
<?php
include("loginserv.php"); // Include loginserv for checking username and password
?>

<!DOCTYPE HTML>
<!--
	Intensify by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>
	<head>
		<title>LOGIN - AXESE</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body>

		<!-- Header -->
			<header id="header">
				<nav class="left">
					<a href="#menu"><span>Menu</span></a>
				</nav>
				<a href="inicio.html" class="logo">AXESE</a>
				<nav class="right">
					<a href="login.html" class="button alt">Log in</a>
				</nav>
			</header>

		<!-- Menu -->
			<nav id="menu">
				<ul class="links">
					<li><a href="inicio.html">Home</a></li>
					<li><a href="#">Projetos</a></li>
					<li><a href="#">Doações</a></li>
				</ul>
				<ul class="actions vertical">
					<li><a href="login.html" class="button fit">Login</a></li>
				</ul>
			</nav>


		<!-- Two -->
			<section id="two" class="wrapper style1 special">
				<div>
					<h2>Login</h2>
					<figure>
					    <!-- Break -->
						<fieldset>
						<form method="post" action="loginserv.php">
						<p> e-mail: <center><input type="text" name="email" id="cnome" size="50" maxlength="50" style="width:300px;" placeholder="digite seu email" /> </center></p>
						<p> senha: <center><input type="password" name="senha" id="csenha" size="15" maxlength="15" style="width:300px;" </center> </p>
						</fieldset>
						<button type="submit" name="submit">Entrar</button>
						</form>
						<a href="cadastro.html" class="logo">Cadastre-se aqui</a>
						
					    </footer>
					</figure>
				</div>
			</section>


		<!-- Footer -->
			<footer id="footer">
				<div class="inner">
					<h2>Obrigado pela visita</h2>
					<ul class="actions">
						<li><span class="icon fa-phone"></span> <a href="#">(00) 000-0000</a></li>
						<li><span class="icon fa-envelope"></span> <a href="#">problemas@sac.com</a></li>
				
					</ul>
				</div>
				
			</footer>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>