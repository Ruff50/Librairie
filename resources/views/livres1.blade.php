@extends('layouts/app')




@section('main')


@include('components/addLivres')
    <h1 class="text-3xl text-center font-bold text-gray-900 mt-20 mb-10">Liste des livres</h1>

    
    <table class="min-w-full">
      <thead>
        <tr>
          <th
            class="th-amber">
            Liste des Livres</th>
            <th
            class="th-amber">
            Liste des Auteurs</th>  
          </tr>
      </thead>

      <tbody class="bg-amber-50">
        
        @foreach ($livres_auteurs as $livre_auteur) 
        <tr>
          <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
              <div class="flex items-center text-amber-900">
                <a href="/livres1/{{ $livre_auteur->id}}"> {{ $livre_auteur->titre}}</a>
              </div>

            </td>
            <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
              <div class="flex items-center text-amber-900">
                {{ $livre_auteur->nom}} {{ $livre_auteur->prenom}}
              </div>

            </td>
        </tr>
        @endforeach 
      </tbody>
  </table>   


    
@endsection

