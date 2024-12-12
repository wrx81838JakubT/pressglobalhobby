<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class AuthController extends Controller
{
	//login user
    public function login(Request $request){
		
		$fields = $request->validate([
			'name' => ['required', 'max:255'],
			'password' => ['required']
		]);
		
		if(Auth::attempt($fields)){
			return redirect()->intended('dashboard');
		}else{
			return back()->withErrors([
				'failed' => 'Błędna nazwa użytkownika/hasło'
			]);
		}
	}
	
	//logout user
	public function logout(Request $request){
		Auth::logout();
		
		$request->session()->invalidate();
		
		$request->session()->regenerateToken();
		
		return redirect('/');
	}
}
