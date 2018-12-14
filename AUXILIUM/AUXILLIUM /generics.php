<!DOCTYPE html>
<html>
<head>
	<title>AUXILIUM</title>
		<!-- Header -->
			<header id="header">
				<h2><a href="index.html">AUXILIUM</a></h2>
				<nav id="nav">
					<ul>
						<li><a href="index.html">Auxilium</a></li>
						<li><a href="generic.php">Quem somos</a></li>
						<li><a href="elements.html">Objetivo</a></li>
						<li><a href="entrar.html" class="button special">Entrar</a></li>
					</ul>
				</nav>
			</header>
</head>
<body>
<section id="main" class="wrapper">
				<div class="container">

					<header class="major">
						<h2>Quem somos</h2>
						<p>Estudantes do Instituto Federal Fluminense Campus Quissama</p>
					</header>

					<p>Criamos esse site para um trabalho de um dos professores de nossa escola, o site tem o intuito de ajudar crianças e jovens que precisam estudar e que nao podem por algum motivo especificoOferecendo diversos tipos de ajuda, para que possamos levar a educacao a todos.OS JOVENS E A EDUCAÇÃO A Educação sempre serviu para tornar os jovens mais conhecedores de si mesmos. Educar é estimular os jovens a avaliar com consciência os valores pelos quais a humanidade se rege e prestar-lhes a sua adesão, procurando crer neles e seguindo-os o mais fielmente possível. O grande objectivo da educação é o desenvolvimento do jovem ao nível de todas as facetas da sua personalidade para conseguir seguir um caminho digno e construir uma vida com base no sonho de cada um. Por vezes, os jovens pensam que a educação é feita somente a nível escolar, o que, inevitavelmente, conduz a um grave erro, porque a educação que vamos adquirindo e transmitindo ao longo de gerações tem em vista não só o desenvolvimento escolar mas também o pessoal, o social, o religioso, entre muitos outros que poderiam ser citados. A missão de qualquer jovem em fase de aprendizagem, de procura, de descoberta... é a de auto-educar-se com base no que está registado como verdadeiro (por exemplo, livros), mas nunca esquecendo o que está à sua volta, e as experiências do dia a dia, tão ou mais importantes, e que devem ser integradas nesse processo de auto-educação. A verdadeira liberdade, recta e responsável, que todos, directa ou indirectamente, buscamos só é atingida se os jovens conseguirem assimilar a verdadeira educação na sua totalidade, não aprendendo apenas as partes que são do livre interesse de cada um. No entanto, esta liberdade também só é conseguida se o jovem viver em harmonia no seio familiar, porque também pertence aos pais um papel importante. Deles depende, em muito, a maneira de pensar e de encarar as realidades da vida por parte dos jovens que se encontram sob a sua tutela. Mesmo que não pareça, o jovem procura, quase sempre, seguir o exemplo dos pais ou dos familiares mais chegados. A liberdade de cada um está intrinsecamente ligada ao processo educativo adquirido por cada indivíduo. É de extrema importância que os pais e os educadores assumam uma atitude de compreensão e de diálogo perante os jovens. De contrário, eles tornar-se-ão insatisfeitos e revoltados com tudo o que os circunda, por outras palavras, com a sua própria educação. Está certo que o jovem aceite a educação que lhe é oferecida. A "missão" de educar, dentro ou fora de casa, é recíproca. Tanto vai depender do jovem como das pessoas que o rodeiam e procuram apoiar. Mas a nossa sociedade, cada vez mais, se está a afastar do verdadeiro lema e objectivo da educação. Habitamos uma sociedade materialista onde o dinheiro ocupa o lugar de destaque, e os pais, cedendo aos novos valores que se erguem, preocupam-se mais em proporcionar uma boa vida aos filhos do ponto de vista material, menosprezando, assim, uma boa parte do carácter emocional que deve ser sempre uma constante. Os jovens, por seu lado, não compreendendo a posição dos pais, sentem-se abandonados, acabando, muitas vezes por partilhar os seus problemas com falsos amigos - droga, álcool, roubo... e outros valores considerados vis na nossa sociedade, mas que são verdades inegáveis. A educação está cada vez mais degradada. Os jovens começam a desesperar pois não vêm soluções para os problemas que sentem desenrolar à volta. O passo decisivo tem de partir desta geração, senão a que virá muito dificilmente irá reagir pois tudo estará praticamente perdido. A educação dos jovens e da sociedade não se faz somente nas escolas. Não nos podemos esquecer disso! Será que não é melhor começar a apresentar soluções, a abrir portas, a criar fugas...? Depois, quando chegarem ao fim do poço, as portas podem são se abrir e o colapso será irreversível. </p>

				</div>
			</section>
			<h1> lista de usuário</h1>
										<?php
										require_once("config.php");
										$config = new Config();
										$conexao = $config->conectaBanco();

										$query = "select username from usuario";

										$result = mysqli_query($conexao, $query) or die('Invalid query: ' . $conexao->error);

										$num = 0;
										if ($result->num_rows > 0) {
								    	// output data of each row
									    while($row = $result->fetch_assoc()) {
												$num = $num + 1;
												echo "<div class = \"quadro".$num."\">";
												echo "		<div class = \"textoconf\">";
												echo "			<h3 class = \"titulosinopse\">".$row["username"]."</h3>";
												echo "		</div>";
												echo "		</div>";
												echo "</div>";
									    }
										}
										$conexao->close();
										?>

</body>
</html>