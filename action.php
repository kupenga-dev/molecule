<?php

require_once __DIR__ . "/vendor/autoload.php";

use App\Bacterium;

$data = json_decode(file_get_contents("php://input"), true);
$bacteriumItem = new Bacterium($data);
$result = $bacteriumItem->division();
exit(json_encode($result));
