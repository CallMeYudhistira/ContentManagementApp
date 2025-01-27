<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function loginPage(){
        return view('welcome');
    }

    public function login(Request $request){
        $user = User::where("email", $request->email)->first();

        if($user == null){
            return redirect()->back()->with("error", "User Tidak Ditemukan");
        }

        if(!Hash::check($request->password, $user->password)){
            return redirect()->back()->with("error", "Password Salah!");
        }

        $request->session()->regenerate();
        $request->session()->put('isLogged', true);
        $request->session()->put('userId', $user->id);
        $request->session()->put('role', $user->role);
        $request->session()->put('name', $user->name);

        return redirect()->route('users.index');
    }

    public function logout(Request $request){
        session()->flush();

        return redirect()->route('auth.login');
    }
}
