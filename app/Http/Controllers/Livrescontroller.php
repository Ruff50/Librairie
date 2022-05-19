<?php

namespace App\Http\Controllers;

use App\Models\livres;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Livrescontroller extends Controller
{
    function getall()
    {
        $livaut = DB::table('livres')
            ->join('auteurs', 'livres.auteurs_id', '=', 'auteurs.id')
            ->select('livres.*', 'auteurs.*')
            ->get();
        
      //  $livres = livres::all();
      //  $auteurs = DB::select('select * from auteurs');
        //dd($auteurs);
        return view(
            'livres1',
            [
                'livres_auteurs' => $livaut,
            ]
        );
    }
    function show($id)
    {
        $livre = livres::find($id);
        if (isset($livre)) {
            return view('livre1', [
                'livre' => $livre,

            ]);
        } else {
            return redirect()->route('livres1');
        }
    }

    public function add(Request $request)
    {
         $input= $request->input();
       // dd($input);
       
        $request->validate([
            'title' => 'required|max:255',
            'contenu' => 'required',
        ]);    
               

        $livre = new livres();
        $livre->titre = $request->title;
        $livre->extrait = $request->contenu;
        $livre->auteurs_id= $request->auteur;
        $livre->save();
        return redirect()->route('livres1');
}

    //return $this->livres[$id] ?? 'erreur'
}

     
