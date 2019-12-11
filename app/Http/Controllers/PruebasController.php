<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class PruebasController extends Controller
{
    public function dataLogin(Request $request){
    	// dd($request->all());

    	$request->session()->put('user', $request->user);

    	$info = $request->session()->get('user');


			
    	dd( $info['roles'] );
    }
}
