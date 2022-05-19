<!DOCTYPE html>
<html lang="en" class="bg-yellow-500">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css">
  <title>Read Post</title>
</head>

<body class="bg-gray-500">
  <div>
    <div class="flex flex-col items-center min-h-screen pt-6 bg-green-500 sm:justify-center sm:pt-0">

      <div class="w-full px-16 py-20 mt-6 overflow-hidden bg-green-500 rounded-lg lg:max-w-4xl">

        <div class="mb-4">
          <h1 class="font-serif text-3xl text-gray-500 font-bold underline decoration-gray-300"> Post Show</h1>
        </div>

        <div class="w-full px-6 py-4 bg-white rounded shadow-md ring-1 ring-gray-900/10">
          <form method="POST" action="#">
            <!-- Title -->
            <div>
              <h3 class="text-2xl text-green-800 font-semibold mb-10">Table Recette</h3>
              <div class="grid grid-cols-6 gap-8">
              <div class="col-span-6 sm:col-span-3">
              <div class="flex items-center justify-between flex-nowrap mb-10 space-x-2">
              <label for="id_recette" class="block text-sm font-medium text-gray-700 mr-10">id_recette:</label>
              <input type="text" name="id_recette" id="id_recette" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full h-8 shadow-sm sm:text-sm border-gray-300 rounded-md">
              </div>
              </div>
              <div class="col-span-6 sm:col-span-3">
              <div class="flex items-center justify-between mb-10 space-x-2">
              <label for="id_categorie" class="block text-sm font-medium text-gray-700 mr-10">id_categorie:</label>
              <input type="text" name="id_categorie" id="id_categorie" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full h-8 shadow-sm sm:text-sm border-gray-300 rounded-md">
              </div>
              </div>
              <div class="col-span-6 sm:col-span-3">
              <div class="flex items-center justify-between mb-10 space-x-2">
              <label for="id_user" class="block text-sm font-medium text-gray-700 mr-10">id_user:</label>
              <input type="text" name="id_user" id="id_user" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full h-8 shadow-sm sm:text-sm border-gray-300 rounded-md">
              </div>
              <div class="col-span-6 sm:col-span-3">
              </div>
              <div class="flex items-center justify-between mb-10 space-x-2">
              <label for="rec_photo" class="block text-sm font-medium text-gray-700 mr-10">rec_photo:</label>
              <img src="../../images/" alt="rec_photo"id="rec_photo">
              </div>
              </div>
              <div class="col-span-6 sm:col-span-3">
              <div class="flex items-center justify-between mb-10 space-x-2">
              <label for="rec_nom" class="block text-sm font-medium text-gray-700 mr-10">rec_nom:</label>
              <input type="text" name="rec_nom" id="rec_nom" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full h-8 shadow-sm sm:text-sm border-gray-300 rounded-md">
              </div>
              </div>
              <div class="col-span-6 sm:col-span-3">
              <div class="flex items-center justify-between mb-10 space-x-2">
              <label for="rec_desc" class="block text-sm font-medium text-gray-700 mr-10">rec_desc:</label>
              <input type="text" name="rec_desc" id="rec_desc" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full h-8 shadow-sm sm:text-sm border-gray-300 rounded-md">
              </div>
              </div>
              <div class="col-span-6 sm:col-span-3">
              <div class="flex items-center justify-between mb-10 space-x-2">
              <label for="rec_prepaduree" class="block text-sm font-medium text-gray-700 mr-10">rec_prepaduree:</label>
              <input type="text" name="rec_prepaduree" id="rec_prepaduree" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full h-8 shadow-sm sm:text-sm border-gray-300 rounded-md">
              </div>
              </div>
              <div class="col-span-6 sm:col-span-3">
              <div class="flex items-center justify-between mb-10 space-x-2">
              <label for="rec_duree" class="block text-sm font-medium text-gray-700 mr-10">rec_duree:</label>
              <input type="text" name="rec_duree" id="rec_duree" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full h-8 shadow-sm sm:text-sm border-gray-300 rounded-md">
              </div>
              </div>
              <div class="col-span-6 sm:col-span-3">
              <div class="flex items-center justify-between mb-10 space-x-2">
              <label for="rec_date" class="block text-sm font-medium text-gray-700 mr-10">rec_date:</label>
              <input type="text" name="rec_date" id="rec_date" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full h-8 shadow-sm sm:text-sm border-gray-300 rounded-md">
              </div>
              </div>
              <div class="col-span-6 sm:col-span-3">
              <div class="flex items-center justify-between mb-10 space-x-2">
              <label for="nutri_calor" class="block text-sm font-medium text-gray-700 mr-10">nutri_calor:</label>
              <input type="text" name="nutri_calor" id="nutri_calor" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full h-8 shadow-sm sm:text-sm border-gray-300 rounded-md">
              </div>
              </div>
              <div class="col-span-6 sm:col-span-3">
              <div class="flex items-center justify-between mb-10 space-x-2">
              <label for="nutri_lipide" class="block text-sm font-medium text-gray-700 mr-10">nutri_lipide:</label>
              <input type="text" name="nutri_lipide" id="nutri_lipide" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full h-8 shadow-sm sm:text-sm border-gray-300 rounded-md">
              </div>
              </div>
              <div class="col-span-6 sm:col-span-3">             
              <div class="flex items-center justify-between mb-10 space-x-2">
              <label for="nutri_glucide" class="block text-sm font-medium text-gray-700 mr-10">nutri_glucide:</label>
              <input type="text" name="nutri_glucide" id="nutri_glucide" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full h-8 shadow-sm sm:text-sm border-gray-300 rounded-md">
              </div>
              </div>
              <div class="col-span-6 sm:col-span-3">
              <div class="flex items-center justify-between mb-10 space-x-2">
              <label for="nutri_choles" class="block text-sm font-medium text-gray-700 mr-10">nutri_choles:</label>
              <input type="text" name="nutri_choles" id="nutri_choles" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full h-8 shadow-sm sm:text-sm border-gray-300 rounded-md">
              </div>
              </div>
             </div>
             </form>
        </div>
      </div>
    </div>
  </div>
</body>

</html>