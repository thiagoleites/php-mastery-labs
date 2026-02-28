<?php
$base = realpath(__DIR__ . '/..');
$dir  = $base . '/docs/logs';
@mkdir($dir, 0777, true);

$today = date('Y-m-d');
$time  = date('H:i:s');

$file = "{$dir}/{$today}.md";

// Dica: você pode editar esse texto quando quiser
$line = "- [{$today} {$time}] Estudo contínuo de PHP\n";

file_put_contents($file, $line, FILE_APPEND | LOCK_EX);