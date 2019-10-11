<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Auth;

class RegisterController extends Controller
{
    public function registrar(){
        $credentials = $this->validate(request(), [
            'name' => 'required|string',

            'email' => 'email|required|string',

            'password' => 'required|string'
        ]);
        if(Auth::attempt($credentials)){
            return 'Se han ingresado los datos correctamente';
        }
        return 'Los datos no se han podido ingresar';
    }
    
}
