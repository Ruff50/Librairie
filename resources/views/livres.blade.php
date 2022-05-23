@extends('layouts/app')




@section('main')


@include('components/addLivres')

    <h1 class="text-3xl text-center font-bold text-gray-900 mt-20 mb-10">Liste des livres</h1>
    @if (session('status'))
    <div class="text-3xl text-left font-bold text-green-600 mt-20 mb-10">
        {{ session('status') }}
    </div>
@endif
@if ($errors->any())
<div class="text-red-600 text-2xl text-left font-semibold">
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif
    <table class="min-w-full mb-14">
      <thead>
        <tr>
          <th
            class="th-amber">
            Titre</th>
            <th
            class="th-amber">
            Auteur</th>  
            <th
            class="th-amber">
            Action</
          </tr>
      </thead>

      <tbody class="bg-amber-50">
       
        @foreach ($livres as $livre)  
        
        <tr>
          <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
              <div class="flex items-center text-amber-900">
                <a href="/livres/{{$livre->id}}"> {{ $livre->titre}}</a>
              </div>

            </td>
            <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
              <div class="flex items-center text-amber-900">
                <a href="/auteurs/{{$livre->auteurs_id}}">   {{ $livre->auteur->prenom}} {{ $livre->auteur->nom}}</a>
              </div>

            </td>
            <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
              <div class="flex items-center justify-between text-amber-900 flex1 m-0">
                <a href="/editLivres/{{$livre->id}}" style="color:darkgreen">Mettre à jour</a><a href="/delLivre/{{$livre->id}}" style="color:red">Supprimer</a>
              </div>
 
            </td>
        </tr>
        @endforeach 
    </tbody>
  </table>   


    
@endsection

