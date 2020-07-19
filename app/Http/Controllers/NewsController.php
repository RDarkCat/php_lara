<?php

namespace App\Http\Controllers;

use App\Http\Requests\NewsCreateRequest;
use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{

    public function all(string $name)
    {
        $id = request()->has('id') ? (int)request()->get('id') : null;
        echo $name . "-" . $id;
    }

    public function item(News $news)
    {
        return view('news.item', ['news' => $news, 'categories' => $this->getCategories()]);
    }

}
