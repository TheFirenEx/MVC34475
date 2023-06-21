<?php

require __DIR__ . '/../vendor/autoload.php';

require __DIR__ . '/../app/Http/Controllers/Controller.php';

$ob = new \Http\Controllers\Controller();
d($ob);
$ob->test();
