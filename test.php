<!DOCTYPE HTML>
<html lang="ja">
<head>
<meta charset="utf8">
<title>卒業研究</title>
<link rel="stylesheet" href="style.css">
</head>
<html>
<body>
<?php
	try{
	$pdo = new PDO("mysql:host=localhost; dbname="sotsuken", "root", "12345");
	$res = $pdo->prepare("insert into sotsuken(No,Username,Email,Ninzuu)
	values(:No,:Username,:Email,:Ninzuu)");
	$res->bindValue(":No",$_POST['No']);
	$res->bindValue(":Username",$_POST['Username']);
	$res->bindValue(":Email",$_POST['Email']);
	$res->bindValue(":Ninzuu",$_POST['Ninzuu']);
	$res->execute();
?>
</body>
</html>
