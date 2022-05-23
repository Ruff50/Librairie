<?php

namespace App\Http\Controllers;

use App\Models\livres;
use App\Models\Auteurs;
use Illuminate\Http\Request;


class Livrescontroller extends Controller
{
    function getall()
    {
        $book =  livres::with('auteur')->get();
        $auteurs = Auteurs::all();
        //  $livres = livres::all();
        //  $auteurs = DB::select('select * from auteurs');
        //dd($Book);
        return view(
            'livres',
            [
                'livres' => $book,
                'auteurs' => $auteurs
            ]
        );
    }
    function show($id)
    {
        $livre = livres::find($id);
        if (isset($livre)) {
            return view('livre', [
                'livre' => $livre,

            ]);
        } else {
            return redirect()->route('livres');
        }
    }

    public function add(Request $request)
    {
        $input = $request->input();
        // dd($input);

        $request->validate([
            'title' => 'required|max:255',
            'contenu' => 'required',
        ]);


        $livre = new livres();
        $livre->titre = $request->title;
        $livre->extrait = $request->contenu;
        $livre->auteurs_id = $request->auteur;
        $livre->save();
        return redirect()->route('livres')->with('status', 'le livre a bien été ajouté !');
    }


    public function edit($id)
    {
        $book = livres::find($id);
        $auteurs = Auteurs::all();

        if (isset($book)) {

        return view('editLivres', [
            'livre' => $book,
            'auteurs' => $auteurs
        ]);
        } else {
        return redirect()->route('livres'); 
    }

}
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|max:255',
            'contenu' => 'required',
        ]);

        $book = livres::find($id);
        if (isset($book)) {
        $book->titre = $request->title;
        $book->extrait = $request->contenu;
        $book->auteurs_id = $request->auteur;
        $book->save();
        return redirect()->route('livres')->with('status', 'le livre a bien été modifié !'); }
        else {
            return redirect()->route('livres');   
        }
    }

    function supprdialog($id)
    {
        $livre = livres::find($id);
        if (isset($livre)) {
        return view('delLivre', [
            'livre' => $livre
        ]);
    } else {
        return redirect()->route('livres');   
    }
    }


    public function destroy(Request $request, $id)
    {
        $input = $request->input();
        if (isset($input)){
        if (isset($request->submit)) {
            livres::find($id)->delete();
            return redirect()->route('livres')->with('status', 'Le livre a bien été supprimé!');
        } else {
            return redirect()->route('livres')->with('status', 'opération annulée');
        }
    }
    else{
        return redirect()->route('livres');     
    }
    }
    //return $this->livres[$id] ?? 'erreur'


    public function showlivresAut($id)
    {
        $books = livres::where('auteurs_id', $id)->get();
        $auteurs = Auteurs::find($id);
        if (isset($auteurs)) {
        return view('auteurs', [
            'livres' => $books,
            'auteurs' => $auteurs,
        ]);
    } else {
        return redirect()->route('livres');    
    }
    }
};
