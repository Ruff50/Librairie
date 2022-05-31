<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public function registerForm()
    {
        return view('register');
    }

    public function registration(Request $request)
    {
        $input = $request->input();
        //dd($input);
        $validate = $request->validate([
            'email' => 'required|unique:users,email|max:255',
            'password' => 'required',
        ]);

        $user = new User();
        $user->email = $validate['email'];
        $user->password = Hash::make($validate['password']);
        $user->save();
        return redirect()->Route('livres');
    }

    public function login (request $request) {

        $validated = $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        $user = User::where('email' ,'=', $validated['email'])
            ->first();

            if (
                isset($user) && Hash::check($validated['password'], $user->password)
            ) {
                session(['user' => $user]);
                return redirect()->route('livres');

            } else {
                return redirect()->route('login');
            }
    }
    public function authenticate(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
   
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials, $remember = true)) {
            $request->session()->regenerate();
            return redirect()->intended('livres');
                     
        }
        //dd($request);
        return view('welcome');
    }




    public function logged()
    {
        return view('login');
    }

    public function logout(Request $request)
{
    Auth::logout();
 
    $request->session()->invalidate();
 
    $request->session()->regenerateToken();
 
    return redirect('/');
}
}