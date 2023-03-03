<?php

namespace App\Http\Controllers;

use App\Models\TelegraphText;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;

class TextController extends Controller
{
    public function create(Request $request)
    {
        $req['text'] = $request->input('text');
        $req['author'] = $request->input('author');
        $req['length'] = strlen($req['text']);
        TelegraphText::create($req);
        return redirect('/');
    }


    public function edit(TelegraphText $telegraphText)
    {
//        $telegraph = TelegraphText::find();
        return view('edit_text', compact('telegraphText'));
    }

    public function update(TelegraphText $telegraphText,Request $request)
    {
        $all = $request->all();
        $telegraphText->update($all);
        return redirect()->route('/');
    }

    public function delete()
    {
    }

    public function read()
    {
        $texts = TelegraphText::all();
        return view('text', [
            'texts' => $texts,
        ]);
    }
}
