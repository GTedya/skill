<?php

namespace App\Http\Controllers;

use App\Models\TelegraphText;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;
use Illuminate\Support\Facades\View;

class TelegraphController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $telegraphs = TelegraphText::all();
       return view('telegraph.index',['telegraphs' => $telegraphs]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('telegraph.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->all();
        $data['length'] = strlen($data['text']);
        TelegraphText::create($data);
        return redirect('/telegraph');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $text = TelegraphText::find($id);

        // show the view and pass the shark to it
        return View::make('telegraph.show')
            ->with('telegraph', $text);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $text = TelegraphText::find($id);
        return View::make('telegraph.edit')
            ->with('telegraph', $text);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data['author'] = $request->input('author');
        $data['text'] = $request->input('text');
        $data['length'] = strlen($data['text']);
        TelegraphText::updateOrCreate($data);
        return redirect('/telegraph');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        TelegraphText::destroy($id);
        return redirect('/telegraph');
    }
}
