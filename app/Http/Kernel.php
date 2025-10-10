<?php

namespace Http;

use Exception;
use Http\Requests\Request;
use Http\Requests\CategoryRequest;
use Http\Controllers\ProductController;
use Http\Controllers\CategoryController;

class Kernel
{
    public function run()
    {
        try {
            $request = new Request();
            switch ($request->path()) {
                case '/add':
                    (new CategoryController())->add(
                        new CategoryRequest()
                    );
                    break;
                    case '/products':
                        (new ProductController())->index();
                    break;
                default:
                    (new CategoryController())->index();
            }
        } catch (Exception $e) {
            echo $e->getCode() . ': ' . $e->getMessage();
        }
    }
}
