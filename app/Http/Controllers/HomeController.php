<?php

namespace App\Http\Controllers;

use App\Models\Externals;
use App\Models\ForeignNews;
use App\Models\News;
use App\Models\Category;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function index()
    {
        return view('news.index', ['news' => ForeignNews::all()]);
    }
}
