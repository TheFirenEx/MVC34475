<?php

namespace Http;

use Exception;
use Http\Controllers\CategoryController;

class Kernel
{
    public function run()
    {
        try {
            // TODO: prosty routing
            $c = new CategoryController();
            $c->index();
        } catch (Exception $e) {
            echo $e->getCode() . ': ' . $e->getMessage();
        }
    }
}
