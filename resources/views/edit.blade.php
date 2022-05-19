<!DOCTYPE html>
<html lang="en" class="bg-gray-500">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Tailwind CSS Edit Post UI with form plugins</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css" >
  </head>

  <body>
    <!-- Edit Post -->
    <div>
      <div class="flex flex-col items-center min-h-screen pt-6 bg-blue-500 sm:justify-center sm:pt-0">
        <div class="w-full px-16 py-20 mt-6 overflow-hidden bg-blue-500 rounded-lg lg:max-w-4xl">
          <div class="mb-4">
            <h1 class="font-serif text-3xl font-bold underline text-gray-700 decoration-indigo-900">
              Edit Post
            </h1>
          </div>

          <div class="w-full px-6 py-4 bg-white rounded shadow-md ring-1 ring-gray-900/10">
            <form method="POST" action="#">
              <!-- Title -->
              <div>
                <label class="block text-sm font-bold text-gray-700" for="title">
                  id_recette:
                </label>

                <input
                  class="block w-full mt-1 border-gray-300 rounded-md shadow-sm placeholder:text-gray-400 placeholder:text-right focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                  type="text" name="id_recette" placeholder="180" value="id_recette" />
              </div>
              <div>
                <label class="block text-sm font-bold text-gray-700" for="title">
                  id_categorie:
                </label>

                <input
                  class="block w-full mt-1 border-gray-300 rounded-md shadow-sm placeholder:text-gray-400 placeholder:text-right focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                  type="text" name="id_categorie" placeholder="180" value="id_categorie" />
              </div>
              <div>
                <label class="block text-sm font-bold text-gray-700" for="title">
                  id_user:
                </label>

                <input
                  class="block w-full mt-1 border-gray-300 rounded-md shadow-sm placeholder:text-gray-400 placeholder:text-right focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                  type="text" name="id_user" placeholder="180" value="id_user" />
              </div>
              <div>
                <label class="block text-sm font-bold text-gray-700" for="title">
                  rec_nom:
                </label>

                <input
                  class="block w-full mt-1 border-gray-300 rounded-md shadow-sm placeholder:text-gray-400 placeholder:text-right focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                  type="text" name="rec_nom" placeholder="180" value="rec_nom" />
              </div>
              <div>
              <label class="block text-sm font-medium text-gray-700"> rec_photo </label>
              <div class="mt-1 flex justify-center px-6 pt-5 pb-6 border-2 border-gray-300 border-dashed rounded-md">
                <div class="space-y-1 text-center">
                  <svg class="mx-auto h-12 w-12 text-gray-400" stroke="currentColor" fill="none" viewBox="0 0 48 48" aria-hidden="true">
                    <path d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                  </svg>
                  <div class="flex text-sm text-gray-600">
                    <label for="file-upload" class="relative cursor-pointer bg-white rounded-md font-medium text-indigo-600 hover:text-indigo-500 focus-within:outline-none focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-indigo-500">
                      <span>Upload a file</span>
                      <input id="file-upload" name="rec_photo" type="file" class="sr-only">
                    </label>
                    <p class="pl-1">or drag and drop</p>
                  </div>
                  <p class="text-xs text-gray-500">PNG, JPG, GIF up to 10MB</p>
                </div>
              </div>
            </div>
          
          <div>
            <div>
                <label class="block text-sm font-bold text-gray-700" for="title">
                  rec_desc:
                </label>

                <input
                  class="block w-full mt-1 border-gray-300 rounded-md shadow-sm placeholder:text-gray-400 placeholder:text-right focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                  type="text" name="rec_desc" placeholder="180" value="rec_desc" />
              </div>
              <div>
                <label class="block text-sm font-bold text-gray-700" for="title">
                  rec_prepaduree:
                </label>

                <input
                  class="block w-full mt-1 border-gray-300 rounded-md shadow-sm placeholder:text-gray-400 placeholder:text-right focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                  type="text" name="rec_prepaduree" placeholder="180" value="rec_prepaduree" />
              </div>
              <div>
                <label class="block text-sm font-bold text-gray-700" for="title">
                  rec_duree:
                </label>

                <input
                  class="block w-full mt-1 border-gray-300 rounded-md shadow-sm placeholder:text-gray-400 placeholder:text-right focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                  type="text" name="rec_duree" placeholder="180" value="rec_duree" />
              </div>
              <div>
                <label class="block text-sm font-bold text-gray-700" for="title">
                  rec_date:
                </label>
                <input
          name="rec_date"
          type="date"
          class="
            block
            w-full
            mt-1
            border-gray-300
            rounded-md
            shadow-sm
            focus:border-indigo-300
            focus:ring
            focus:ring-indigo-200
            focus:ring-opacity-50
          "
        />
               <!-- <input
                  class="block w-full mt-1 border-gray-300 rounded-md shadow-sm placeholder:text-gray-400 placeholder:text-right focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                  type="text" name="rec_date" placeholder="180" value="rec_date" />
              </div> -->
              <div>
                <label class="block text-sm font-bold text-gray-700" for="title">
                  nutri_calor:
                </label>

                <input
                  class="block w-full mt-1 border-gray-300 rounded-md shadow-sm placeholder:text-gray-400 placeholder:text-right focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                  type="text" name="nutri_calor" placeholder="180" value="nutri_calor" />
              </div>
              <div>
                <label class="block text-sm font-bold text-gray-700" for="title">
                  nutri_lipide:
                </label>

                <input
                  class="block w-full mt-1 border-gray-300 rounded-md shadow-sm placeholder:text-gray-400 placeholder:text-right focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                  type="text" name="nutri_lipide" placeholder="180" value="nutri_lipide" />
              </div>
              <div>
                <label class="block text-sm font-bold text-gray-700" for="title">
                  nutri_glucide:
                </label>

                <input
                  class="block w-full mt-1 border-gray-300 rounded-md shadow-sm placeholder:text-gray-400 placeholder:text-right focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                  type="text" name="nutri_glucide" placeholder="180" value="nutri_glucide" />
              </div>
              <div>
                <label class="block text-sm font-bold text-gray-700" for="title">
                  nutri_choles:
                </label>

                <input
                  class="block w-full mt-1 border-gray-300 rounded-md shadow-sm placeholder:text-gray-400 placeholder:text-right focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                  type="text" name="nutri_choles" placeholder="180" value="nutri_choles" />
              </div>

          <!-- Description 
              <div class="mt-4">
                <label class="block text-sm font-bold text-gray-700" for="password">
                  Description
                </label> 
                <textarea name="description"
                  class="block w-full mt-1 border-gray-300 rounded-md shadow-sm placeholder:text-gray-400 placeholder:text-right focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                  rows="4" placeholder="400">lorem ipsum dolor sit amet, consectet</textarea>
              </div>-->
              <div class="flex items-center justify-start mt-4 gap-x-2">
                <button type="submit"
                  class="px-6 py-2 text-sm font-semibold rounded-md shadow-md text-sky-100 bg-sky-500 hover:bg-sky-700 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300">
                  Update
                </button>
                <button type="submit"
                  class="px-6 py-2 text-sm font-semibold text-gray-100 bg-gray-400 rounded-md shadow-md hover:bg-gray-600 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300">
                  Cancel
                </button>
              </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </body>

</html>