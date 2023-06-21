<?php

namespace Http\Controllers;

use Views\View;
use Database\PdoHandle;
use Helpers\AbsoluteUrl;
use Http\Controllers\Controller;
use Models\Repositories\CategoriesRepository;

class CategoryController extends Controller
{
    private $categoryRepository;
    private $view;

    public function __construct()
    {
        $this->categoryRepository = new CategoriesRepository(
            new PdoHandle()
        );
        $this->view = new View();
    }

    public function index()
    {
        $this->view->render(
            'categories',
            [
                'title' => 'Kategorie',
                'categories' => $this->categoryRepository->all(),
            ]
        );
    }
}
