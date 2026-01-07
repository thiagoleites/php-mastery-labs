<?php

$file = __DIR__ . '/../docs/progress.md';

$today = date('Y-m-d');

$entries = file_exists($file)
    ? file($file, FILE_IGNORE_NEW_LINES)
    : [];

if (!in_array("- [$today] Estudo contínuo em PHP", $entries)) {
    $entries[] = "- [$today] Estudo contínuo em PHP";
}

file_put_contents($file, implode("\n", $entries));
