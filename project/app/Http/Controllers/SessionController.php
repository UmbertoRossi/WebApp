<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SessionController extends Controller
{
    public function destroy()
    {
        Auth::logout();

        return redirect('/')->with('success','Logout effettuato con successo!');
    }

    public function store()
    {
        $attributes = request()->validate([
            'email' => 'required|email|exists:users,email',
            'password' => 'required|min:6'
        ]);
        

        if(Auth::attempt($attributes)){
           return redirect('/')->with('success', 'Autorizzazione completata!');
        }
        return back()
        ->withInput()
        ->withErrors(['Questa combinazione di email e password non esiste']);
    }
}
