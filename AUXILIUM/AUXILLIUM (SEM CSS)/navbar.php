<?php
	header("Content-Type: text/html; charset=ISO-8859-1",true);
	require_once("functions.php");
	seguranca();

	$username = $_SESSION['user']['username'];
	$nome = $_SESSION['user']['nome'];
	$email = $_SESSION['user']['email'];
?>
	  <!-- topo -->
		<div id = "topo">
      <a href= "inicial.php" style="text-decoration: none;">
  			<div id = "logo">
  				<p>Yoread</p>
  			</div>
      </a>
			<div id = "divavatar">
				<div id = "posiavatar">
					<a class = "avatar" href="perfil.php" >
						<img src = "../img/avatar.png" title="<?php echo $username?>" border="none" />
					</a>
				</div>
			</div>
			<div id = "divpub">
				<div id = "posipublicon">
					<a class = "publicon" href="publicar.php" >
						<img src = "../img/publicon.png" title="Publicar" border="none" />
					</a>
				</div>
			</div>

			<div style="float: right; margin: -30px 30px auto;">
				<a href= "logout.php">
					<img src = "../img/logout.png" title="Logout" border="none" />
				</a>
			</div>
		</div>
