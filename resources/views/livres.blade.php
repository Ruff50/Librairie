@extends('layouts/app')




@section('main')


@include('components/addLivres')

    <h1 class="text-3xl text-center font-bold text-gray-900 mt-20 mb-10">Liste des livres</h1>

    
    <table class="min-w-full">
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
                <a href="/livres/{{ $livre->id}}"> {{ $livre->titre}}</a>
              </div>

            </td>
            <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
              <div class="flex items-center text-amber-900">
                {{ $livre->auteur->prenom}} {{ $livre->auteur->nom}}
              </div>

            </td>
            <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
              <div class="flex items-center justify-between text-amber-900 flex1 m-0">
                <a href="../components/editLivres" style="color:darkgreen">Edit</a><a href="/delLivre/{{$livre->id}}" style="color:red">Delete</a>
              </div>

            </td>
        </tr>
        @endforeach 
    </tbody>
  </table>   


    
@endsection

