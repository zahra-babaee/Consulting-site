<?php

namespace App\Http\Controllers\auth;

use App\Models\Client;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\RegisterRequest;

class RegisterController extends Controller
{

    public function index()
    {
       return view('auth.register');
    }


    public function store(RegisterRequest $request)
    {
        $client = Client::query()->create([
            'name'=>$request->name,
            'email'=>$request->email,
            'phone'=>$request->phone,
            'password'=>Hash::make($request->password),
        ]);
        auth()->guard('Client')->login($client);
        return redirect()->route('home');
    }
}
