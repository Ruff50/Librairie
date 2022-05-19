<h1 class="text-3xl text-center font-bold text-gray-900 mt-20 mb-10">Créer un livre</h1>
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
@if (session('status'))
    <div class="text-3xl text-left font-bold text-green-600 mt-20 mb-10">
        {{ session('status') }}
    </div>
@endif

<div class="bg-gray-100 dark:bg-slate-800 relative rounded-lg p-8 sm:p-12 shadow-lg">
<form action="/livres" method="POST">
    <br>
    @csrf
    <select name="auteur">
        @foreach ($auteurs as $auteur) 
        <option value="{{$auteur->id}}">{{$auteur->nom}} {{$auteur->prenom}}</option>
        @endforeach
     </select>
     <br><br>  
    <div class="mb-6">
    <label for="title">Entrez le titre de votre livre svp</label>
    <input id="title" type="text" name="title" class="w-full rounded p-3 text-gray-800 dark:text-gray-50 dark:bg-slate-700
    border-gray-500 dark:border-slate-600 outline-none focus-visible:shadow-none focus:border-primary"
    >
    </div>
    <br>
    <br>
    <div class="mb-6">
    <label for="contenu">Entrez un extrait de votre livre svp</label>
    <textarea id="contenu" name="contenu" cols="30" rows="5" class="w-full rounded p-3 text-gray-800 dark:text-gray-50
    dark:bg-slate-700 border-gray-500 dark:border-slate-600 outline-none focus-visible:shadow-none
    focus:border-primary"></textarea>
    </div>

    <br>
    <div>
    <input type="submit" value="Créer votre livre" class="w-full text-gray-100 hover:text-gray-700
    bg-yellow-400 rounded border border-primary dark:border-slate-600 p-3 transition ease-in-out
    duration-500 hover:bg-yellow-300">
    </div>
</form>
<br>
<br>
<br>
<br>




