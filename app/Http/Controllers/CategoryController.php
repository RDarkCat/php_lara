<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{

    public function index()
    {
        return view('categories.index', ['categories' => $this->categories]);
    }

    public function view($id)
    {
        return view('categories.view', [
            'id' => $id,
            'categories' => $this->categories,
            'category_news'=> $this->category_news,
            'news' => $this->news
        ]);
    }
}
