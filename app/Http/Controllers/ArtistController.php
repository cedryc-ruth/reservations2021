<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Artist;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Database\QueryException;
use App\Http\Requests\ArtistUpdateRequest;

class ArtistController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $artists = Artist::all();

        return view('artist.index',[
            'artists' => $artists,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $artist = Artist::find($id);

        if($artist==null) {
            return Redirect::route('artist.index');
        }

        return view('artist.show', [
            'artist' => $artist,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $artist = Artist::find($id);

        if($artist==null) {
            return Redirect::route('artist.index');
        }

        return view('artist.edit', [
            'artist' => $artist,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ArtistUpdateRequest $request, $id)
    {
        //Récupérer l'artiste à modifier
        $artist = Artist::find($id);

        if($artist==null) {
            return Redirect::route('artist.index');
        }

        //Valider (Heavy controller)
    /*  $validated = $request->validate([
            'firstname' => 'required|max:60',
            'lastname' => 'required|max:60',
        ]);

        //OU

        $validator = Validator::make($request->all(), [
            'firstname' => 'required|max:60',
            'lastname' => 'required|max:60',
        ], [
            'required' => 'Le champ :attribute est obligatoire',
            'max' => 'La longueur doit être de :max caractères'
        ])->validate();
    */

        //Récupérer les données entrantes et les valider
        $validated = $request->validated();
        
        //Modifier
        $artist->firstname = $validated['firstname'];
        $artist->lastname = $validated['lastname'];

        //Sauver
        try {
            $artist->save();
        
            return view('artist.show', [
                'artist' => $artist,
            ]);
            //return redirect()->route('artist.show', $artist->id);
        } catch(QueryException $e) {
            return view('artist.edit', [
                'artist' => $artist,
            ]);
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
        //
    }
}
