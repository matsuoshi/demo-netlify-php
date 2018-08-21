<?php
include "vendor/autoload.php";

use Cake\Chronos\Chronos;

$php_version = phpversion();
$now = Chronos::now()->format('c');

$html = <<< EOF
    <p>version: {$php_version}</p>
    <p>now: {$now}</p>
EOF;

file_put_contents('public/index.html', $html);
