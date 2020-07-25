<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function __invoke(string $name)
    {
        $category = Category::where('name', $name)->first();
        if (!$category) {
            return abort(404);
        }

        return view('categories.show', ['category' => $category]);
    }

}
