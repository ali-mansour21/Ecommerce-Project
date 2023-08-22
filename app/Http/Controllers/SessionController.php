<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class SessionController extends Controller
{
    public function index(){
        return view('session.index');
    }
    public function register(){
        return view('session.register');
    }
    public function store(Request $request,User $user){
        $data = $request->validate([
            'name'=>['required','min:2','max:50'],
            'email'=>['required','email'],
            'password'=>['required','min:7','max:50'],
            'phone'=>['required','min:8','max:12']
        ]);
        $user->create($data);
        return redirect('login');
    }
    public function login(){
        $attributes = request()->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);
        if (! auth()->attempt($attributes)) {
            throw ValidationException::withMessages([
                'email' => 'Your provided credentials could not be verified.',
                'password'=>'Try Another Password'
            ]);
        }
        session()->regenerate();
        $user_type = auth()->user()->user_type;
        if($user_type == 1 ){
            return redirect('dashboard');
        }
        else{
            return redirect('/home');
        }
    }
    public function destroy(){
        Auth::logout();
        return redirect('/');
    }
}
