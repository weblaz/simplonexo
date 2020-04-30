<?php

session_start();

$mysqli = new mysqli('localhost', 'myuser', 'mypass123', 'crud') or die(mysqli_error($mysqli));

$name = '';
$email = '';
$password = '';
$birthday = '';

if (isset($_POST['save'])){
	$email = $_POST['email'];
	$password = $_POST['password'];
	$birthday = $_POST['birthday'];
	$title = $_POST['title'];
	$post_date = $_POST['post_date'];
	$content = $_POST['content'];

	$mysqli->query("INSERT INTO user(email, password, birthday) VALUES('$email', '$password', '$birthday')") or die($mysqli->error);

    $_SESSION['message']= "Informations ont été enregistrées";
	$_SESSION['msg-type']= "success";

	header("name: index.php");


	$mysqli->query("INSERT INTO post(post_date, content) VALUES('$post_date', '$content')") or die($mysqli->error);

	}

	if(isset($_GET['delete'])){
		$id = $_GET['delete'];
		$mysqli->query("DELETE FROM user WHERE id=$id") or die($mysqli->error());

		$_SESSION['message']= "Informations ont été supprimées";
	    $_SESSION['msg-type']= "danger";

	    header("name: index.php");
	}

	/*if (isset($_GET['edit'])){
		$id = $_GET['edit'];
		$result = $mysqli->query("SELECT * FROM user WHERE id=$id") or die($mysqli->error());
		if(count($result)==1){
			$row = $result->fetch_array();
			$email = $row['email'];
			$password = $row['password'];
			$birthday= $row['birthday'];
		}
	}
	*/