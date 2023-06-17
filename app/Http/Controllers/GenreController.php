<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Genre;
use Inertia\Inertia;

class GenreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $genres = Genre::all();
        //dd($genres);
        return Inertia::render('IndexGenres',['genres'=> $genres]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return Inertia::render('NouveauGenre');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nom' => 'required|string|max:255',
            'vernaculaire' => 'required|string|max:255',
            'famille' => 'required|string|max:255',
        ]);
        Genre::create([
            'nom' => $request->nom,
            'vernaculaire' => $request->vernaculaire,
            'famille' => $request->famille
        ]);
        sleep(1);

        return redirect()->route('genres')->with('message', 'Genre ajouté avec succès');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $genre = Genre::find($id);
      
        return Inertia::render('ShowGenre',['genre'=> $genre]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $genre = Genre::find($id);
        return Inertia::render('EditGenre', ['genre' => $genre]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nom' => 'required|string|max:255',
            'vernaculaire' => 'required|string|max:255',
            'famille' => 'required|string|max:255',
        ]);

        if ($request->has('id')) {

            Genre::find($request->input('id'))->update($request->all());

            return redirect()->route('genres')->with('message', 'Genre modifié avec succès');
        }

    }
    

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        

            Genre::find($id)->delete();

            return redirect()->back();

        
    }
}
