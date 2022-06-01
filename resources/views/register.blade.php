<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css" >
    <title>Register</title>
</head>
<body>
    <div class="relative flex flex-col justify-center min-h-screen overflow-hidden">
      <div
          class="w-full p-6 m-auto bg-white border-t border-purple-600 rounded shadow-lg shadow-purple-800/50 lg:max-w-md">
          <h1 class="text-3xl font-semibold text-center text-purple-700">LOGO</h1>
          @if ($errors->any())
          <div class="text-red-600 text-2xl text-left font-semibold">
              <ul>
                  @foreach ($errors->all() as $error)
                      <li>{{ $error }}</li>
                  @endforeach
              </ul>
          </div>
          @endif
          <form class="mt-6" action="{{route('register.action')}}" method="POST">
            @csrf
            <div>
                <label for="name" class="block text-sm text-gray-800">Name</label>
                <input type="text" name="name"
                    class="block w-full px-4 py-2 mt-2 text-purple-700 bg-white border rounded-md focus:border-purple-400 focus:ring-purple-300 focus:outline-none focus:ring focus:ring-opacity-40"
                    value="{{old('name')}}">
            </div>
              <div>
                  <label for="email" class="block text-sm text-gray-800">Email</label>
                  <input type="email" name="email"
                      class="block w-full px-4 py-2 mt-2 text-purple-700 bg-white border rounded-md focus:border-purple-400 focus:ring-purple-300 focus:outline-none focus:ring focus:ring-opacity-40"
                   value="{{old('email')}}">
              </div>
              <div class="mt-4">
                  <div>
                      <label for="password" class="block text-sm text-gray-800">Password</label>
                      <input type="password" name="password"
                          class="block w-full px-4 py-2 mt-2 text-purple-700 bg-white border rounded-md focus:border-purple-400 focus:ring-purple-300 focus:outline-none focus:ring focus:ring-opacity-40">
                  </div>
                  <div class="mt-6">
                      <button
                          class="w-full px-4 py-2 tracking-wide text-white transition-colors duration-200 transform bg-purple-700 rounded-md hover:bg-purple-600 focus:outline-none focus:bg-purple-600">
                          Register
                      </button>
                  </div>
          </form>
          
      </div>
  </div>
</body>
</html>