<x-doctype/>







<h1 class="text-3xl text-center font-bold text-gray-900 mt-20 mb-10">Supprimer un livre</h1>
<form action="{{route('supprimer',$livre->id)}}" method="POST">
    <br>
    @csrf
    @method('DELETE')
    <div class="mb-6">
        <label for="title" class="text-2xl text-left font-bold text-red-600 mt-20 mb-10">Vous êtes sur le point de supprimer le livre n° {{$livre->id}} , êtes-vous sûr ?</label>
        <br>

        <div class="mt-10 flex items-center justify-center">
        <br>    
        <input type="submit" name="submit" value="OK" class="w-96 text-gray-100 hover:text-gray-700
        bg-yellow-400 rounded border border-primary dark:border-slate-600 p-3 transition ease-in-out
        duration-500 hover:bg-yellow-300">
        <input type="submit" name="annuler" value="Annuler" class="w-96 text-gray-100 hover:text-gray-700
        bg-blue-400 rounded border border-primary dark:border-slate-600 p-3 transition ease-in-out
        duration-500 hover:bg-blue-300">
        </div>
   </div>     
</form>

