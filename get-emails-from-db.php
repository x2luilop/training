<?php

$dns = "mysql:host=localhost;dbname=training";

$pdo = new PDO($dns, 'root', 'root');

$sth = $pdo->prepare("SELECT * FROM users");

$sth->execute();

$users = $sth->fetchAll(PDO::FETCH_ASSOC);

foreach ($users as $user) {
	echo $user['email'], PHP_EOL;
}
