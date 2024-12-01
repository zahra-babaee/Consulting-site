<?php

namespace App\Http\Controllers\auth;

use App\Models\Client;
use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class LoginController extends Controller
{

    public function index()
    {
        return view('auth.login');
    }
    public function logout()
    {
        auth()->guard('Client')->logout();
        return redirect()->back();
    }


    public function store(LoginRequest $request)
    {
        $client=Client::query()->where('email', $request->email)->firstOrFail();
        if(Hash::check($request->password, $client->password)){
            auth()->guard('Client')->login($client);
        }
        else
        throw ValidationException::withMessages(['password'=>'رمزعبور اشتباه است.']);
    return redirect()->route('dashboard');
    }
    public function show($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        //
    }
}
