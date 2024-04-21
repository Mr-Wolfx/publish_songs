<?php

namespace App\Http\Controllers;

use App\Models\Song;
use Illuminate\Http\Request;

class SongController extends Controller
{

    public function index(){
        $songs = Song::all();

        return view('song.index', compact('songs'));
    }



    public function create() {
        return view('song.create');
    }

    public function store(Request $request) {

        
        
        
        
        //! METODO NON SICURO (chiunque può aggiungere altri parametri)
        
        // $song = new Song();
        // $song->songName = $request->songName;
        // $song->artist = $request->artist;
        // $song->duration = $request->duration;
        
        // $song->year = $request->year;

        // $song->save();

        // Mass assignement

        $song = Song::create([
            'songName' => $request->songName,
            'artist' => $request->artist,
            'duration' => $request->duration,
            'year' => $request->year,

        ]);

        return redirect (route('homepage'))->with('message', 'Canzone inserita con successo');
    }

}
