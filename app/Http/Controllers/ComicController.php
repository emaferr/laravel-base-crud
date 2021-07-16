<?php

namespace App\Http\Controllers;

use App\Comic;
use Illuminate\Http\Request;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comics = Comic::all();
        return view('comics.index',compact('comics'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('comics.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $comic=new Comic();
        // $comic->poster=$request->poster;
        // $comic->title=$request->title;
        // $comic->autor=$request->autor;
        // $comic->desc=$request->desc;
        // $comic->price=$request->price;
        // $comic->save();

        // Validate
        $validated = $request->validate([
            'poster' => 'required',
            'title' => 'required | min:5 | max:100',
            'autor' => 'required | min:5 | max:150',
            'desc' => 'required',
            'price' => 'required'
        ]);

        Comic::create($validated);

        return redirect('comics');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function show(Comic $comic)
    {
        return view('comics.show',compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function edit(Comic $comic)
    {
        return view('comics.edit',compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comic $comic)
    {
        // $comic->update($request->validate([
        //     'poster' => 'required',
        //     'title' => 'required | min:5 | max:100',
        //     'autor' => 'required | min:5 | max:150',
        //     'desc' => 'required',
        //     'price' => 'required'
        // ]));

        $validated = $request->validate([
            'poster' => 'required',
            'title' => 'required | min:5 | max:100',
            'autor' => 'required | min:5 | max:150',
            'desc' => 'required',
            'price' => 'required'
        ]);

        // Comic::update($validated);

        $comic->update($validated);

        return redirect('comics');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comic $comic)
    {
        $comic->delete();
        return redirect('comics');
    }
}
