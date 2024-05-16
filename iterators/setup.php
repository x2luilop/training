<?php

// create a directory structure with empty files

$basePath = __DIR__.'/hospital';

$dirnames = [
    'claims',
    'remits',
    'payments',
];

foreach ($dirnames as $dirname) {

    $dirPath = $basePath . '/' . $dirname;

    if (! file_exists($dirPath)) {
        mkdir($dirPath, 0755, true); // create "parent" folders recursively
    }

    foreach (range(1, 3) as $index) {

        $fileName = "file{$index}.txt";

        $filePath = $dirPath . '/' . $fileName;

        touch($filePath);
    }
}