<?php

$base = __DIR__ . '/../';
$rii = new RecursiveIteratorIterator(
    new RecursiveDirectoryIterator($base)
);

$phpFiles = 0;
$lines = 0;

foreach ($rii as $file) {
    if ($file->isFile() && pathinfo($file, PATHINFO_EXTENSION) === 'php') {
        $phpFiles++;
        $lines += count(file($file->getPathname()));
    }
}

$content = <<<TXT
# Métricas do Projeto

Arquivos PHP: $phpFiles  
Linhas de código: $lines  
Atualizado em: {date('Y-m-d H:i:s')}

TXT;

file_put_contents(__DIR__ . '/../docs/metrics.md', $content);
