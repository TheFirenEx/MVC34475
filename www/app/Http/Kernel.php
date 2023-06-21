<?php

namespace Http;

use Exception;
use Http\Controllers\CategoryController;
use Http\Requests\Request;

class Kernel
{
    public function run()
    {
        try {
            $request = new Request();
            switch ($request->path()) {
                default:
                    (new CategoryController())->index();
            }
        } catch (Exception $e) {
            echo $e->getCode() . ': ' . $e->getMessage();
        }
    }
}
