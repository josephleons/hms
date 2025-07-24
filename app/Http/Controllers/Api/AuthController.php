<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class AuthController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function login(Request $request)
    {
         $credential=$request->validate([
            'username'=>'required',
            'password'=>'required',
        ]);

        if(!Auth::attempt($credential)){
            return response()->json([
                'message'=>'invalide credentials'
            ]);
        }
        $user = Auth::user();
        $token = $request->user()->createToken('access_token')->plainTextToken;
        return response()->json([
            'message'=>'User Authenticated successfull',
            'token'=>$token,
            'token_type'=>'Bearer',
            'user'=>$user
        ]);

    }

    public function store(Request $request){
        $request->validate([
            'name'=>'required|string',
            'username'=>'required|string',
            'email'=>'required|string',
            'password'=>'required|min:8'
        ]);

        $user =User::create([
            'name'=>$request->name,
            'username'=>$request->username,
            'email'=>$request->email,
            'password'=>bcrypt($request->password),
            'role_id'=>1
        ]);

        return response()->json(
            data: [
                'user'=>$user,
                'message'=>'User Account Created'
            ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
