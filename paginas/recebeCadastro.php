<?php
include ('conexao.php');
  $login = $_POST['login'];
  $senha = $_POST['senha']; 
  

 $criptografia = MD5 ($senha);
 
 if($login == "" || $login == null) {
	 echo "<script language='javascript' type='text/javascript'>
		alert('O campo login deve ser preenchido!');
		window.location.href='cadastro.html';</script>";
		die();
 }else{
	 $inserir = "INSERT INTO alunos (login, senha)
	 VALUES ('$login','$criptografia')";
$executar = mysqli_query ($conn, $inserir);
if ($executar){	 
	 echo "<script language='javascript' type='text/javascript'>
		alert('Login cadastrado com sucesso!');
		window.location.href='login.php';</script>";
  }else{
    echo "<script language='javascript' type='text/javascript'>
		alert('Não foi possível cadastrar seu usuário!');
		window.location.href='cadastro.html';</script>";
      }	
    }
 	 
?>