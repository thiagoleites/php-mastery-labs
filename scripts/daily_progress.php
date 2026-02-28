<?php
$base = realpath(__DIR__ . '/..');
$file = $base . '/docs/progress.md';
@mkdir(dirname($file), 0777, true);

$today = date('Y-m-d');

$header = "# Progresso de Estudo (PHP)\n\n| Data | Status |\n|---|---|\n";
$row = "| {$today} | ✅ Estudo contínuo |\n";

if (!file_exists($file) || trim((string)file_get_contents($file)) === '') {
    file_put_contents($file, $header, LOCK_EX);
}

$content = (string)file_get_contents($file);
if (strpos($content, "| {$today} |") === false) {
    file_put_contents($file, $row, FILE_APPEND | LOCK_EX);
}