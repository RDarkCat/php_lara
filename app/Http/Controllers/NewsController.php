<?php

namespace App\Http\Controllers;

use App\Http\Requests\NewsCreateRequest;
use App\News;
use Illuminate\Support\Facades\DB;

class NewsController extends Controller
{

    public function index()
    {
        $news = (new News())->getAllNews();
        return view('news.index', ['news' => $news]);
    }

    public function add()
    {
        return view('news.add');
    }

    public function item($id)
    {
        $news = (new News())->getOneNews($id);

        if (!$news) {
            return abort(404);
        }

        return view('news.item', ['id' => $id, 'news'=> $news]);
    }

    public function edit($id)
    {
        $news = (new News())->getOneNews($id);

        if (!$news) {
            return abort(404);
        }

        return view('news.edit', ['id' => $id, 'news'=> $news]);
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
