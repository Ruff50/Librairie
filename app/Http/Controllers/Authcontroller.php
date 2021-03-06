<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


class AuthController extends Controller
{
    public function register()
    {
        return view('register');
    }

    public function register_action(Request $request)
    {
        $input = $request->input();
        //dd($input);
        $validate = $request->validate([
            'name' =>'required',
            'email' => 'required|unique:users,email|max:255',
            'password' => 'required',
        ]);

        $user = new User();
        $user->name=$validate['name'];
        $user->email = $validate['email'];
        $user->password = Hash::make($validate['password']);
        $user->save();
        return redirect()->route('login')->with('status','Registration succes.Please Login!');
    }
    public function login()
    {
        return view('login');
    }
    public function login_action(Request $request) 
    {
            $request->validate([
            'email' => 'required',
            'password' => 'required',
            ]);
            $user = User::where('email' ,'=', $request['email'])
            ->first();
            //$roles=User::with('roles')->get()->where('name' ,'=', $user->name);
          
            if (Auth::attempt(['email'=>$request->email, 'password'=>$request->password])){
            $request->session()->regenerate();
            session(['user' => $user]);
            return redirect()->intended('livres');
            }
       return redirect()->route('login')->with('Echec','Wrong username or password!');      
    }
    public function logout(Request $request)
{
    Auth::logout();
 
    $request->session()->invalidate();
 
    $request->session()->regenerateToken();
 
    return redirect('/');
}

}