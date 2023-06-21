<?php

namespace Http\Controllers;

use Helpers\AbsoluteUrl;
use Http\Controllers\Controller;

class CategoryController extends Controller
{
    public function index()
    {
        d(AbsoluteUrl::get('categories'));
        d(route('categories'));
        d(config('app.name'));
    }
}
