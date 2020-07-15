<?php

namespace App\Http\Controllers;

use App\Http\Requests\NewsCreateRequest;
use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{

    public function add()
    {
        return view('news.add');
    }

    public function item(News $news)
    {
        return view('news.item', ['news' => $news]);
    }

    public function edit(News $news)
    {
        return view('news.edit', ['news' => $news]);
    }

    public function save(NewsCreateRequest $request)
    {
        $news = new News();
        $news->fill($request->all());
        $news->save();
        return redirect()->route('news.index');
    }
    public function delete(Request $request)
    {
        return true;
    }
    
}
