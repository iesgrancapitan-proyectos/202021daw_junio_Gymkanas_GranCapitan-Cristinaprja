<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class LoginController extends Controller{
    // public function login(Request $request){
    //   $this->validateLogin($request);
    //   if (!Auth::attempt($request->only('email', 'password'))) {
    //     return response()->json([
    //       'message' => 'Unauthorized'
    //     ], 401);
    //   }
    //   return response()->json([
    //     'token' => $request->user()->createToken($request->device)->plainTextToken,
    //     'message' => 'Success'
    //   ]);
    // }
    public function validateLogin(Request $request){
      return $request->validate([
        'email' => 'required|email',
        'password' => 'required',
        'device' => 'required'
      ]);
    }
    public function login(Request $request)
    {
        $this->validateLogin($request);

        if ($this->attemptLogin($request)) {
            $user = $this->guard()->user();
            // $user->generateToken();

            return response()->json([
                'data' => $user->toArray(),
            ]);
        }

        return $this->sendFailedLoginResponse($request);
    }
}