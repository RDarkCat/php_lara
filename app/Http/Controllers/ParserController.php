<?php

namespace App\Http\Controllers;

use App\Services\XmlParserService;
use Illuminate\Http\Request;

class ParserController extends Controller
{
    public function __invoke()
    {
        return view('extra.index', ['extended_news' => (new XmlParserService())->parse()]);
    }
}
