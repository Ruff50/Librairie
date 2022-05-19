<!DOCTYPE html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css" >
        <script src="https://kit.fontawesome.com/1b839e1566.js" crossorigin="anonymous"></script>
    </head>
    <body class="bg-blue-300">
    <div class="max-w-2xl mx-auto">

<div class="flex flex-col">
  <div class="overflow-x-auto shadow-md sm:rounded-lg">
      <div class="inline-block min-w-full align-middle">
          <div class="overflow-hidden ">
              <table class="min-w-full divide-y divide-gray-200 table-fixed dark:divide-gray-700">
                  <thead class="bg-gray-100 dark:bg-gray-700">
                      <tr>
                          <th scope="col" class="p-4">
                              <div class="flex items-center">
                                  <input id="checkbox-all" type="checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                  <label for="checkbox-all" class="sr-only">checkbox</label>
                              </div>
                          </th>
                          <th scope="col" class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                              Product Name
                          </th>
                          <th scope="col" class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                              Category
                          </th>
                          <th scope="col" class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                              Price
                          </th>
                          <th scope="col" class="p-4">
                              <span class="sr-only">Edit</span>
                          </th>
                      </tr>
                  </thead>
                  <tbody class="bg-white divide-y divide-gray-200 dark:bg-gray-800 dark:divide-gray-700">
                      <tr class="hover:bg-gray-100 dark:hover:bg-gray-700">
                          <td class="w-4 p-4">
                              <div class="flex items-center">
                                  <input id="checkbox-table-1" type="checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                  <label for="checkbox-table-1" class="sr-only">checkbox</label>
                              </div>
                          </td>
                          <td class="px-6 py-4 text-sm font-medium text-gray-900 whitespace-nowrap dark:text-white">Apple Imac 27"</td>
                          <td class="px-6 py-4 text-sm font-medium text-gray-500 whitespace-nowrap dark:text-white">Desktop PC</td>
                          <td class="px-6 py-4 text-sm font-medium text-gray-900 whitespace-nowrap dark:text-white">$1999</td>
                          <td class="px-6 py-4 text-sm font-medium text-right whitespace-nowrap">
                              <a href="#" class="text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                          </td>
                      </tr>
                      <tr class="hover:bg-gray-100 dark:hover:bg-gray-700">
                          <td class="w-4 p-4">
                              <div class="flex items-center">
                                  <input id="checkbox-table-2" type="checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                  <label for="checkbox-table-2" class="sr-only">checkbox</label>
                              </div>
                          </td>
                          <td class="px-6 py-4 text-sm font-medium text-gray-900 whitespace-nowrap dark:text-white">Apple MacBook Pro 17"</td>
                          <td class="px-6 py-4 text-sm font-medium text-gray-500 whitespace-nowrap dark:text-white">Laptop</td>
                          <td class="px-6 py-4 text-sm font-medium text-gray-900 whitespace-nowrap dark:text-white">$2999</td>
                          <td class="px-6 py-4 text-sm font-medium text-right whitespace-nowrap">
                              <a href="#" class="text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                          </td>
                      </tr>
                      <tr class="hover:bg-gray-100 dark:hover:bg-gray-700">
                          <td class="w-4 p-4">
                              <div class="flex items-center">
                                  <input id="checkbox-table-3" type="checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                  <label for="checkbox-table-3" class="sr-only">checkbox</label>
                              </div>
                          </td>
                          <td class="px-6 py-4 text-sm font-medium text-gray-900 whitespace-nowrap dark:text-white">iPhone 13 Pro</td>
                          <td class="px-6 py-4 text-sm font-medium text-gray-500 whitespace-nowrap dark:text-white">Phone</td>
                          <td class="px-6 py-4 text-sm font-medium text-gray-900 whitespace-nowrap dark:text-white">$999</td>
                          <td class="px-6 py-4 text-sm font-medium text-right whitespace-nowrap">
                              <a href="#" class="text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                          </td>
                      </tr>
                      <tr class="hover:bg-gray-100 dark:hover:bg-gray-700">
                          <td class="w-4 p-4">
                              <div class="flex items-center">
                                  <input id="checkbox-table-4" type="checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                  <label for="checkbox-table-4" class="sr-only">checkbox</label>
                              </div>
                          </td>
                          <td class="px-6 py-4 text-sm font-medium text-gray-900 whitespace-nowrap dark:text-white">Apple Magic Mouse 2</td>
                          <td class="px-6 py-4 text-sm font-medium text-gray-500 whitespace-nowrap dark:text-white">Accessories</td>
                          <td class="px-6 py-4 text-sm font-medium text-gray-900 whitespace-nowrap dark:text-white">$99</td>
                          <td class="px-6 py-4 text-sm font-medium text-right whitespace-nowrap">
                              <a href="#" class="text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                          </td>
                      </tr>
                      <tr class="hover:bg-gray-100 dark:hover:bg-gray-700">
                          <td class="w-4 p-4">
                              <div class="flex items-center">
                                  <input id="checkbox-table-5" type="checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                  <label for="checkbox-table-5" class="sr-only">checkbox</label>
                              </div>
                          </td>
                          <td class="px-6 py-4 text-sm font-medium text-gray-900 whitespace-nowrap dark:text-white">Apple Watch Series 7</td>
                          <td class="px-6 py-4 text-sm font-medium text-gray-500 whitespace-nowrap dark:text-white">Accessories</td>
                          <td class="px-6 py-4 text-sm font-medium text-gray-900 whitespace-nowrap dark:text-white">$599</td>
                          <td class="px-6 py-4 text-sm font-medium text-right whitespace-nowrap">
                              <a href="#" class="text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                          </td>
                      </tr>
                  </tbody>
              </table>
          </div>
      </div>
  </div>
</div>

</div>
</body>
</html>
