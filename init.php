<?php
session_start();

function login($user,$senha){
	$usuario = $user."-".$senha;
	$usuarios = file('dados.txt');
	for($i=0 ; $i < sizeof($usuarios); $i++){
		$usuarios [$i] = trim($usuarios[$i]);
	}

	if(in_array($usuario, $usuarios)){
		$_SESSION['usuario'] = $usuario;
		return true;
	}
	return false;
}


function logado(){
	return isset($_SESSION['usuario']);
}

?>