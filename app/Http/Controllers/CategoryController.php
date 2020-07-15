<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{

    public function create()
    {
        return view('categories.create');
    }
    
    public function store(Request $request)
    {
        $data = $request->only('name');
        $category = Category::create($data);
        if($category) {
            return redirect('/');
        }
  
        return back();
    }

    public function edit(Category $category)
    {
        return view('categories.edit', ['category' => $category, 'categories' => $this->getCategories()]);
    }
    
    public function update(Category $category)
    {
        return view('categories.update');
    }
    
    public function show(string $slug)
    {
        $category = Category::where('slug', $slug)->first();
        if(!$category) {
            return abort(404);
        }
        return view('categories.show', ['category' => $category, 'categories' => $this->getCategories()]);
    }
    
}
