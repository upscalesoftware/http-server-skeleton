<?php

$autoloadScript = __DIR__ . '/vendor/autoload.php';
if (file_exists($autoloadScript)) {
    return require $autoloadScript;
}
throw new \RuntimeException('Installation is incomplete. Please run "composer install".');
