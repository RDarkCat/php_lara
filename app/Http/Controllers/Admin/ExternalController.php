<?php

namespace App\Http\Controllers\Admin;

use App\Events\ResourceUpdateEvent;
use App\Http\Controllers\Controller;
use App\Models\Externals;
use App\Models\ForeignNews;
use App\Services\XmlParserService;
use Illuminate\Http\Request;
use GuzzleHttp\Client;

class ExternalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        return view('externals.index', ['externals' => Externals::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        return view('externals.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $news = Externals::create($request);
        if ($news) {
            return redirect()->route('externals');
        }

        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Externals $externals
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit(Externals $externals)
    {
        return view('externals.edit', ['externals' => $externals]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param Externals $externals
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function update(Request $request, Externals $externals)
    {
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    /**
     * @param Request $request
     * @param Externals $externals
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function check(Request $request)
    {
        $external = Externals::find($request->input('externals'));
        $client = new Client();
        $request = $client->head($external->url);

        if( $request->getStatusCode() == 200 ) {
            event((new ResourceUpdateEvent($external)));

            return redirect('/admin/externals')->with('success', 'Ссылка рабочает');
        }
    }

    public function getData(Request $request)
    {
        $external = Externals::find($request->input('externals'));
        $savedNews = (new XmlParserService())->parse($external->url);
        if (array_key_exists('news', $savedNews)) {
            foreach ($savedNews['news'] as $item) {
                $news = ForeignNews::create($item);
            }
        }
    }
}
