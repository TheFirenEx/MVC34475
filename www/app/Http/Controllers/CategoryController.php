<?php

namespace Http\Controllers;

use Views\View;
use Database\PdoHandle;
use Helpers\AbsoluteUrl;
use Http\Controllers\Controller;
use Exceptions\DatabaseException;
use Http\Requests\CategoryRequest;
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
                'addTitle' => 'Dodawanie nowej kategorii',
                'addButton' => 'Dodaj',
            ]
        );
    }

    public function add(CategoryRequest $request)
    {
        $errorsBag = $request->validate();
        if ($errorsBag !== null) {
            // TODO: Zapisać błędy w sesji
            // $this->redirect("");
            d($errorsBag);
            exit();
        }
        $id = $this->categoryRepository->insert(
            $this->categoryRepository->create([
                'name' => $request->post('category_name')
            ])
        );
        if ($id < 0) {
            throw new DatabaseException();
        }
        $this->redirect("");
    }
}
