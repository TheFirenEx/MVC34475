<?php

use \Http\Controllers\CategoryController;

require __DIR__ . '/../vendor/autoload.php';

$ob = new CategoryController();
d($ob);
$ob->index();
