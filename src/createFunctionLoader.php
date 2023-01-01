<?php

function createFunctionLoader(string $baseDir): callable
{
    $baseDir = rtrim($baseDir, '/') . '/';

    return function(string $fullyQualifiedName) use ($baseDir): void {
        $filename =
            $baseDir
            .str_replace('\\', '/', $fullyQualifiedName)
            .'.php';

        if (file_exists($filename)) {
            include_once $filename;
        }
    };
}
