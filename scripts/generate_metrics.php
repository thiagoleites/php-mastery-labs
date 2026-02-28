<?php
/**
 * generate_metrics.php (v2)
 * - Ignora pastas pesadas/irrelevantes (vendor, node_modules, .git, docs)
 * - Conta linhas sem carregar arquivo inteiro na memória (stream)
 * - Cria docs/ se não existir
 */

$base = realpath(__DIR__ . '/..');
if ($base === false) {
    fwrite(STDERR, "Base path inválido.\n");
    exit(1);
}

$excludeDirs = [
    $base . DIRECTORY_SEPARATOR . 'vendor',
    $base . DIRECTORY_SEPARATOR . 'node_modules',
    $base . DIRECTORY_SEPARATOR . '.git',
    $base . DIRECTORY_SEPARATOR . 'docs',
];

$phpFiles = 0;
$lines = 0;

$iterator = new RecursiveIteratorIterator(
    new RecursiveDirectoryIterator($base, FilesystemIterator::SKIP_DOTS)
);

foreach ($iterator as $file) {
    if (!$file->isFile()) {
        continue;
    }

    $path = $file->getPathname();

    // Ignorar diretórios excluídos
    foreach ($excludeDirs as $ex) {
        if (str_starts_with($path, $ex . DIRECTORY_SEPARATOR)) {
            continue 2;
        }
    }

    // Só .php
    if (pathinfo($path, PATHINFO_EXTENSION) !== 'php') {
        continue;
    }

    $phpFiles++;

    // Contar linhas por stream (mais leve que count(file()))
    $fh = @fopen($path, 'rb');
    if ($fh === false) {
        continue;
    }

    while (!feof($fh)) {
        $chunk = fread($fh, 8192);
        if ($chunk === false) break;
        $lines += substr_count($chunk, "\n");
    }

    fclose($fh);
}

$updatedAt = date('Y-m-d H:i:s');

$content = <<<MD
# Métricas do Projeto

Arquivos PHP: {$phpFiles}  
Linhas de código: {$lines}  
Atualizado em: {$updatedAt}

MD;

// Garantir pasta docs/
@mkdir($base . DIRECTORY_SEPARATOR . 'docs', 0777, true);

$out = $base . DIRECTORY_SEPARATOR . 'docs' . DIRECTORY_SEPARATOR . 'metrics.md';

// Escreve com lock
file_put_contents($out, $content, LOCK_EX);