<?php

namespace Http\Controllers;

use Database\PdoHandle;
use Helpers\AbsoluteUrl;
use Http\Controllers\Controller;
use Models\Repositories\CategoriesRepository;

class CategoryController extends Controller
{
    private $categoryRepository;

    public function __construct()
    {
        $this->categoryRepository = new CategoriesRepository(
            new PdoHandle()
        );
    }

    public function index()
    {
        d(
            $this->categoryRepository->all()
        );
    }
}
