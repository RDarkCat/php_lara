<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    const STATUS_PAGE_NOT_FOUND = 404;
    
    public function __invoke(string $name)
    {
        $category = Category::where('name', $name)->first();

        if (!$category) {
            return abort(STATUS_PAGE_NOT_FOUND);
        }

        return view('categories.show', ['category' => $category]);
    }

}
