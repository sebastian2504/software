<?php

namespace App\Http\Controllers\Auth;

use Auth;
use App\Http\Controllers\Controller;


class LoginController extends Controller
{

    public function __construct(){
      $this->middleware('guest', ['only' => 'showLoginform']);
    }

    public function showLoginform(){
      return view('usuario');
    }

    public function login(){
        $credentials = $this->validate(request(), [
            'email' => 'email|required|string',

            'password' => 'required|string'
        ]);
        if(Auth::attempt($credentials)){
            return redirect()->route('usuario');
        }
        return back()
        ->withErrors(['email' => 'Estas credenciales no coinciden con nuestros registros'])
        ->withInput(request(['email']));
    }

    public function logout(){
      Auth::logout();

      return redirect('login');
    }
}
