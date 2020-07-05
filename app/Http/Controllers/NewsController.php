<?php

namespace App\Http\Controllers;

use App\Http\Requests\NewsCreateRequest;

class NewsController extends Controller
{

    public function index()
    {
        return view('news.index', ['news' => $this->news]);
    }

    public function add()
    {
        return view('news.add');
    }

    public function item($id)
    {
        return view('news.item', ['id' => $id, 'news'=> $this->news]);
    }

    public function edit($id)
    {
        return view('news.edit', ['id' => $id, 'news'=> $this->news]);
    }

    public function save(NewsCreateRequest $request)
    {
        $title = $request->input('title');
        $name = $request->input('name');
        $description = $request->input('description');
        $data_string = $title . ' ' . $name . ' ' . $description;
        file_put_contents(storage_path('app/public/db.txt'), $data_string, FILE_APPEND);
        return redirect()->route('news.index');
    }
}
