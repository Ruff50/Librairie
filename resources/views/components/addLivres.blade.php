<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>

<div x-data="{ modelOpen: false }">
    <button @click="modelOpen =!modelOpen" class="flex items-center justify-center px-3 py-2 space-x-2 text-sm tracking-wide text-white capitalize transition-colors duration-200 transform bg-indigo-500 rounded-md dark:bg-indigo-600 dark:hover:bg-indigo-700 dark:focus:bg-indigo-700 hover:bg-indigo-600 focus:outline-none focus:bg-indigo-500 focus:ring focus:ring-indigo-300 focus:ring-opacity-50">
        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 20 20" fill="currentColor">
            <path fill-rule="evenodd" d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z" clip-rule="evenodd" />
        </svg>

        <span>Ajouter un livre</span>
    </button>

    <div x-show="modelOpen" class="fixed inset-0 z-50 overflow-y-auto" aria-labelledby="modal-title" role="dialog" aria-modal="true">
        <div class="flex items-end justify-center min-h-screen px-4 text-center md:items-center sm:block sm:p-0">
            <div x-cloak @click="modelOpen = false" x-show="modelOpen" 
                x-transition:enter="transition ease-out duration-300 transform"
                x-transition:enter-start="opacity-0" 
                x-transition:enter-end="opacity-100"
                x-transition:leave="transition ease-in duration-200 transform"
                x-transition:leave-start="opacity-100" 
                x-transition:leave-end="opacity-0"
                class="fixed inset-0 transition-opacity bg-gray-500 bg-opacity-40" aria-hidden="true"
            ></div>

            <div x-cloak x-show="modelOpen" 
                x-transition:enter="transition ease-out duration-300 transform"
                x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95" 
                x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100"
                x-transition:leave="transition ease-in duration-200 transform"
                x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100" 
                x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                class="inline-block w-full max-w-xl p-8 my-20 overflow-hidden text-left transition-all transform bg-white rounded-lg shadow-xl 2xl:max-w-2xl">
<h1 class="text-3xl text-center font-bold text-gray-900 mt-20 mb-10">Créer un livre</h1>



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
            </div>
        </div>
    </div>
</div>





