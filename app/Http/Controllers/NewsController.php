<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
}
