<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AuthController extends Controller
{
  public function register(Request $request){

    $validatedData = $request->validate([
    'name'=>'required|max:55',
    'email' => 'required|required',
    'password'=>'required|confirmed'
]);
    $user=User::create($validatedData);
    $accessToken=$user->createToken('authToken')->access_token;
    return response(['user'=>$user,'access_token'=>$accessToken]);
          }
  public function login(Request $request){

  }
}
