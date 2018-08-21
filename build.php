<?php
include "vendor/autoload.php";

use Cake\Chronos\Chronos;

$now = Chronos::now()->format('c');
$php_version = phpversion();

$html = <<< EOF
    <p>now: {$now}</p>
    <p>version: {$php_version}</p>
    <p>🍺</p>
EOF;

file_put_contents('public/index.html', $html);
