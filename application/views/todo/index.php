<?php
header('Content-Type: application/json');
$json_pretty = json_encode($tasks, JSON_PRETTY_PRINT);
echo $json_pretty;
