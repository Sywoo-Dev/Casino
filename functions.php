<?php
//le fichier data.php doit etre appelé avant celui la !
function debug($variable){
	echo'<pre>' . print_r($variable, true) . '<pre>';
}

function start(){
	if(session_status() == PHP_SESSION_NONE){
	session_cache_expire(120);
	session_start();
	}
}

function degage(){
	if(!isset($_SESSION['auth'])){
        header('Location: /');
        exit();
    }
}

function iflog(){
	if(isset($_SESSION['auth']) && !empty($_SESSION['auth'])){
		header('Location: /login');
		exit();
	}
}

function login($user, $password){
	$u = htmlspecialchars($user);
	$p = htmlspecialchars($password);

	$query = $pdo->query("SELECT * FROM user WHERE uuid = " . $u);
	$response = $query->fetch();

	if(empty($response)){
		return "Aucun compte n'a étyé trouvé";
	}

	if(count($response) > 1){
		return "Merci de contacter un administrateur !";
	}

	$fetched_user = $response;

	if(password_verify($p, $fetched_user->password)){
		session_start();
		$fetched_user->password = "";
		$_SESSION["auth"] = $fetched_user;
		return "connected !";
	}else{
		return "mot de passe incorrect";
	}
}

?>