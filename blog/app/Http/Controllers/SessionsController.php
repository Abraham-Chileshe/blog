<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionsController extends Controller
{
    public function create()
    {
        return view('sessions.create');
    }
    
    public function store()
    {
        if (auth()->attempt(request(['email', 'password'])) == false) {
            return back()->withErrors([
                'message' => 'The email or password is incorrect, please try again'
            ]);
        }else{}
        
        return redirect()->to('/home');
    }

    public function destroy() {
        auth()->logout();
        return redirect()->to('/login');
    } // Destroy the user session  // Redirect to the login page

    }