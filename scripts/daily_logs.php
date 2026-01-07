<?php

$file = __DIR__ . '/../docs/daily-log.md';

$today = date('Y-m-d');
$time  = date('H:i');

$line = "- [$today $time] Estudo contínuo de PHP (algoritmos, POO, boas práticas)";

$lines = file_exists($file)
    ? file($file, FILE_IGNORE_NEW_LINES)
    : [];

if (!in_array($line, $lines)) {
    $lines[] = $line;
}

file_put_contents($file, implode("\n", $lines) . "\n");
