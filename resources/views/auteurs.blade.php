@extends('layouts/app')




@section('main')


    <h1 class="text-3xl text-center font-bold text-gray-900 mt-20 mb-10">Liste des livres par auteur</h1>
    <h1 class="text-3xl text-center font-bold text-gray-900 mt-20 mb-10">{{$auteurs->prenom}} {{$auteurs->nom}}</h1>
   
    <table class="min-w-full">
      <thead>
        <tr>
          <th
            class="th-amber">
            Liste des livres</th>
        </tr>
      </thead>

      <tbody class="bg-amber-50">
       
        @foreach ($livres as $livre)  
        
        <tr>
          <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
              <div class="flex items-center text-amber-900">
                <a href="/livres/{{ $livre->id}}"> {{ $livre->titre}}</a>
              </div>
        <tr>   
        @endforeach 
    </tbody>
  </table>   


    
@endsection

