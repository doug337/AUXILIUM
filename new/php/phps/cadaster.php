
<html>
	<head>
		<title>CADASTRO - AXESE</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body class="subpage">

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
					<li><a href="#" class="button fit">Login</a></li>
				</ul>
			</nav>

		<!-- Main -->
			<section id="main" class="wrapper">
				<div class="inner">
					<header class="align-center">
						<h1>CADASTRO</h1>
						<p>Cadraste-se e venha fazer parte dessa familia</p>
					</header>
					
			</section>
			
		<form action="casdastro.php" method="post">
    <fieldset>
        <fieldset class="grupo">
            <div class="campo">
                <label for="nome">Nome*</label>
                <input type="text" id="nome" name="nome" style="width:30em" value="" required="*">
            </div>
            <div class="campo">
                <label for="snome">Sobrenome*</label>
                <input type="text" id="snome" name="snome" style="width:30em" value="">
            </div>
        </fieldset>
        
        <div class="campo">
            <label for="email">E-mail*</label>
            <input type="email" id="email" name="email" style="width: 62em" value="" required="*">
		</div>
		<div class="campo">	
			<label for="senha">Senha*</label>
            <input type="password" id="senha" name="senha" style="width: 30em" value="" required="*">
			<label for="senha">Confirme a senha*</label>
            <input type="password" id="senha" name="senha" style="width: 30em" value="" required="*">
        </div>
        <div class="campo">
            <label for="telefone">Telefone</label>
            <input pattern= "^(\d{2}) \d{1}- \d({4}- \d{4}$" type="telefone">
        </div>
		<div class="campo">
                <fieldset class="grupo">
            <div class="campo">
                <label for="nome">Data de Nascimento*</label>
                <input type="data" type="text"id="nasci" name="nasci" required="*">
          
            </div>
        </fieldset>				
					
		</div>
					

        
		<fieldset class="grupo">
            <div class="campo">
                <label for="cidade">Cidade*</label>
                <input type="text" id="cidade" name="cidade" style="width:20em" value="" required="*">
            </div>
            <div class="campo">
                <label for="estado">Estado</label>
                    <select style="width:2em">
					<option value="">--</option>
                    <option value="AC">AC</option>
					<option value="AL">AL</option>
					<option value="AP">AP</option>
					<option value="AM">AM</option>
					<option value="BA">BA</option>
					<option value="CE">CE</option>
					<option value="DF">DF</option>
					<option value="ES">ES</option>
					<option value="GO">GO</option>
					<option value="MA">MA</option>
					<option value="MT">MT</option>
					<option value="MS">MS</option>
					<option value="MG">MG</option>
					<option value="PA">PA</option>
					<option value="PB">PB</option>
					<option value="PR">PR</option>
					<option value="PE">PE</option>
					<option value="PI">PI</option>
					<option value="RN">RN</option>
					<option value="RS">RS</option>
					<option value="RJ">RJ</option>
					<option value="RO">RO</option>
					<option value="RR">RR</option>
					<option value="SC">SC</option>
					<option value="SP">SP</option>
					<option value="SE">SE</option>
					<option value="TO">TO</option>
                </select>
            </div>
			
        </fieldset>
		<fieldset>
			<div class="campo">
                <label for="escola">Escola*</label>
                <input type="text" id="escola" name="escola" style="width:"10" value="" required="*">
            </div>
			</fieldset>
        <button type="submit" name="submit">Cadastrar</button>
    </fieldset>
    <?php
       	if(isset($_GET['msg']))
       	{
       		$message = $_GET['msg'];
       			if ($message = 1)
       			echo "<span>Cadastrado</span>";
       	}
    ?>
</form>

		<!-- Footer -->
			<footer id="footer">
				<div class="inner">
					<h2>Obrigado pela visita</h2>
					<ul class="actions">
						<li><span class="icon fa-phone"></span> <a href="#">(000) 000-0000</a></li>
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