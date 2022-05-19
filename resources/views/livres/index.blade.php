@extends('layouts/app')

@section('main')
    <h1 class="text-3xl text-center font-bold text-gray-900 mt-20 mb-10">Liste des livres</h1>
    <br>
    <a href="{{route('livres.create')}}" class="block text-center text-blue-600 dark:text-blue-500 hover:underline bg-amber-100 px-10 pt-2 h-10 w-64 rounded">Ajouter un livre</a>
    <br>
    <table class="min-w-full mt-5">
      <thead>
        <tr>
          <th
            class="th-amber">
            Liste des Livres</th>
          </tr>
      </thead>

      <tbody class="bg-amber-50">
        
        @foreach ($books as $livre) 
        <tr>
          <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
              <div class="flex items-center text-amber-900">
                <a href="/livres/{{ $livre->id}}"> {{ $livre->titre}}</a>
              </div>

            </td>
        </tr>
        @endforeach 
      </tbody>
  </table>   


    
@endsection