<?php

namespace App\Http\Controllers;

use App\Models\User; // Assuming your User model is in the "Models" namespace
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function register(Request $request)
    {
        // try{
        //     $fields = $request->validate([
        //         'name' => 'required|string',
        //         'email' => 'required|string|unique:users,email',
        //         'password' => 'required|string|confirmed',
        //     ]);
    
        //     $user = User::create([ // Change to User::create
        //         'name' => $fields['name'],
        //         'email' => $fields['email'],
        //         'password' => bcrypt($fields['password']),
        //     ]);
    
        //     $token = $user->createToken('m4rkbellotoken')->plainTextToken;
    
        //     $response = [
        //         'user' => $user,
        //         'token' => $token,
        //     ];
    
        //     return response()->json($response, 201);
    

        // } catch (\Exception $e) {
        //     dd($e->getMessage());
        // }


            $fields = $request->validate([
                'name' => 'required|string',
                'email' => 'required|string|unique:users,email',
                'password' => 'required|string|confirmed',
            ]);
    
            $user = User::create([ // Change to User::create
                'name' => $fields['name'],
                'email' => $fields['email'],
                'password' => bcrypt($fields['password']),
            ]);
    
            $token = $user->createToken('m4rkbellotoken')->plainTextToken;
    
            $response = [
                'user' => $user,
                'token' => $token,
            ];
    
            return response()->json($response, 201);
    


    }
}
