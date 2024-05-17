<?php

	$pdo = new PDO('mysql:host=localhost;dbname=cadastrar','root','');


	if(isset($_POST['submit'])){
		$nome = $_POST['nome'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];

	$sql = $pdo->prepare("INSERT INTO `usuarios` VALUES (null,?,?,?)");

	$sql->execute(array($nome,$email,$senha));
        echo "Cadastro efetuado com sucesso!";

		header("Location: ../Login/login.php");
		die();

}

?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Bem Vindo!!</title>
</head>
<body>

	<form action="cadastro.php" method="POST">
<div class="box-login">
		
		<h1>Crie sua conta</h1>
		<br>
		<input type="text" id="nome" name="nome" placeholder="Digite seu nome" required/>
		<br>
		<input type="text" name="email" placeholder="Digite seu email" required/>
		<br>
		<input type="password" name="senha" placeholder="Digite sua senha" required/>
		<br>
		<button type="submit" name="submit">Criar</button>

	</div><!--box-login-->
	</form>
	<br></br>

	<div class="span">
	<span>Já tem uma conta?</span><div class="clique-aqui"><a href="#">Clique Aqui</a></div>
	</div><!--span-->

	<style>

		body{
			font-family: arial,helvetica, sans-serif;
			background-color: #1e092e;
		}


		.clique-aqui a{
			font-size: 20px;
			color: yellow;
			text-decoration: none;
		}

		span{
			font-size: 20px;
			color: white;
		}

		.span{
			margin-top: 34%;
			margin-left: 40%;
		}

		.clique-aqui{
			cursor: pointer;
			padding: 7px;
			margin-top: -2.6%;
			margin-left: 15.3%;
			text-align: center;
			width: 105px;
			border-radius: 7px;
			background-color: #1e092e;
		}

		.clique-aqui:hover{
			background-color: #050108;
		}

		div.box-login{
			transform: translate(-50%,-50%);
			top: 50%;
			left: 50%;
			position: absolute;
			width: 400px;
			height: 350px;
			border: 2px solid black;
			border-radius: 15px;
			background-color: #050108;
			color: white;
		}

		button{
			font-size: 15px;
			margin-top: 13px;
			margin-left: 90px;
			border-radius: 6px;
			border: none;
			width: 220px;
			height: 40px;
			color: white;
			cursor: pointer;
			background-color: #1e092e;
		}

		button:hover{
			background-color: #210542;
		}

		.box-login h1{
			text-align: center;
		}

		input{
			margin-top: 5px;
			margin-left: 90px;
			outline: none;
			padding: 15px;
			margin-bottom: 7px;
			border: none;
			border-radius: 6px;
			font-size: 15px;
		}

	</style>

</body>
</html>