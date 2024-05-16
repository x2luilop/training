<?php

// Get the users from DB

$dns = "mysql:host=localhost;dbname=training";

$pdo = new PDO($dns, 'root', 'root');

$sth = $pdo->prepare("SELECT * FROM users");

$sth->execute();

$users = $sth->fetchAll(PDO::FETCH_ASSOC);

// Dump the users to CSV

$outputPath = __DIR__.'/output';

if (! file_exists($outputPath)) {
	mkdir($outputPath);
}

$outputFilePath = $outputPath . '/users.csv';

// Open the file handler in write mode
$outputFile = new SplFileObject($outputFilePath, 'w');

// Set the headers of the CSV file
$outputFile->fputcsv(['name', 'email']);

// Add on user at a time
foreach ($users as $user) {
	$outputFile->fputcsv([
		$user['name'],
		$user['email'],
	]);
}

// Manually close the file
$outputFile = null;
