<?php

// Connect to the DB

$dns = "mysql:host=localhost;dbname=training";

$pdo = new PDO($dns, 'root', 'root');

// Truncate the users table

$pdo->exec("TRUNCATE TABLE `users`");

// Create a "insert" date object

$now = new DateTime();

// Open the CSV file handler

$usersFilePath = __DIR__ . '/output/users.csv';

$usersFile = new SplFileObject($usersFilePath); // read mode by default

$headers = $usersFile->fgetcsv(); // Get the headers (we asume that the first line is the headers)

while (! $usersFile->eof()) {

	$values = $usersFile->fgetcsv(); // Get the values (read the next line)

	$row = []; // we'll create a header => value map

	foreach ($headers as $index => $header) {
		if (! isset($values[$index])) {
			$row[$header] = '';
		} else {
			$row[$header] = trim($values[$index]);
		}
	}

	var_dump($row);

	if (! $row['name']) { // Skip if the name is empty
		continue;
	}

	// Create statement handler
	$sth = $pdo->prepare("INSERT INTO `users` (`name`, `email`, `created_at`) VALUES (?,?,?)");

	// Insert the row
	$sth->execute([
		$row['name'],
		$row['email'],
		$now->format('Y-m-d H:i:s'),
	]);

}

// Manually closing the file
$usersFile = null;
