<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class SessionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("auth.login");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $attributes = $request->validate([
            'email' => ['required','email'],
            'password' => ['required',],
        ]);

        if (! Auth::attempt($attributes)) {
            
            throw ValidationException::withMessages([
                'email'=> 'Sorry, Those Credentials do not match',
            ]);
        }
        request()->session()->regenerate();

        return redirect('/');
    }

    
    public function destroy(string $id)
    {
        Auth::logout();

        return redirect('/');
    }
}
