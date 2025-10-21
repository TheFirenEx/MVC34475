<?php

namespace Http\Controllers;

use Views\View;
use Database\PdoHandle;
use Models\Repositories\ProductsRepository;

class ProductController extends Controller
{
    private $productRepository;
    private $view;

    public function __construct()
    {
        $this->productRepository = new ProductsRepository(
            new PdoHandle()
        );
        $this->view = new View();
    }

    public function index()
    {
        $this->view->render(
            'products',
            [
                'title' => 'Produkty',
                'products' => $this->productRepository->all(),
            ]
        );
    }

}
