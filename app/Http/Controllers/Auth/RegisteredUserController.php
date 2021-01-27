<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\County;

class RegisteredUserController extends Controller
{
    /* otvori registracijsku formu */
    public function create()
    {
        $counties = County::pluck('name', 'id');
        return view('auth.register', compact('counties'));
    }

    /* pozvano na Register gumb */
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|max:255',
            'password' => 'required|min:7|confirmed',
            'county_id' => 'required'
        ]);

        $data['supplier_id'] = 2;
        $data['password'] = Hash::make($data['password']);

        $user = User::create($data);

        Auth::login($user);
        event(new Registered($user));
        return redirect()->route('home');
    }
}