<?php
require('../../vendor/autoload.php');

use Volc\Service\Notify;
$client = Notify::getInstance();

$client->setAccessKey("ak");
$client->setSecretKey("sk");


