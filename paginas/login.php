<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<title>Senac Tech</title>
		<meta charset="utf-8">
		
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="shortcut icon" type="image/x-icon" href="imagens/Senac.ico">
		<link rel="stylesheet" type="text/css" href="../paginas/css/menu.css">
		<link rel="stylesheet" type="text/css" href="../paginas/css/corpo.css">
		<link rel="stylesheet" type="text/css" href="../paginas/css/estilo.css">
		<link rel="stylesheet" type="text/css" href="../paginas/css/formulario.css">
	</head>
<body>

	<header>
		<p id="pheader">
		<img id="imgheader" src="../paginas/imagens/senac.png">
		</p>
	</header>
	<hr>
	<section>
	<div id="link">
	<input type="checkbox" id="bt_menu">
		<label for="bt_menu">&#9776;</label>
		<nav id="menu" >
			<ul>
				<li><a href="../modelo.html">HOME </a></li>
		         <li><a href="../paginas/cursos.html">Cursos</a> 
				 
			      <ul>
					     <li><a href="../paginas/TecInfo.html">Técnico de Informática</a></li>
						  <li><a href="../paginas/TecRedes.html">Técnico de Redes</a></li>
						   <li><a href="../paginas/TecAdm.html">Técnico em Administração</a></li>
						    <li><a href="../paginas/DevSis.html">Desenvolvedor de Sistemas</a></li>
						     <li><a href="../paginas/jogos.html">Programação de Jogos Digitais</a></li>
						      <li><a href="#">Cursos Livres</a></li>
					</ul>
				</li>	
		            <li><a href="../paginas/localizacao.html">Localização</a> </li>    
		            			
			</ul>
		</nav>
		</div>
		  <br>
		  <br>
		  <h2>Entre</h2>
	<section>  
			
			 <h2 align="center">Login</h2>
		<form action="verificaLogin.php" method="post" align="center">
			<label>Usuário<br />
				<input type="text" name="login" id="login">			
			</label><br />
			<label>Senha<br />
				<input type="password" name="senha" id="senha">			
			</label><br />
			<input type="submit" name="entrar" value="Entrar">
		</form>
				</section>

	<footer>
		<a href="https://pt-br.facebook.com/" target="black">
		<img class="imgredes" src="../imagens/facebook.jpg" alt="Facebook" title="facebook" >
		</a>
		<a	href="https://www.instagram.com/?hl=pt-br" target="black">		
		<img class="imgredes" src="../imagens/instagram.jpg" alt="instagram"  title="instagram" >
		</a>
		<a	href="https://twitter.com/login?lang=pt" target="black">	
		<img class="imgredes" src="../imagens/twitter.png" alt="twitter"  title="twitter" >
		</a>
	</footer>

</body>
</html>
