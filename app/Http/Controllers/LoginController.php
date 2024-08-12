<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Validation\ValidationException;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    //start fungsi untuk memberikan akses lihat kepada user yang belum login dihalaman login (cara 1)
    // public function __construct(){
    //     $this->middleware('guest');
    // }
    //end fungsi untuk memberikan akses lihat kepada user yang belum login dihalaman login

    public function create(){
        return view('auth.login');
    }

    public function store(Request $request){
        //validasi inputan user
        $request-> validate([
            'email'=> ['required','email'],
            'password'=> ['required'],
        ]);

        if(Auth::attempt([
            'email'=>$request->email,
            'password'=>$request->password,
        ]))

        //start cek login (cara 1 untuk fungsi login)
        // //select semua user
        // $user= User::Where('email', $request->email)->first();
        // //cek password
        // if($user){
        //     if(Hash::check($request->password, $user->password)){//cek apakah pass yg iinput = passwod didatabase
        //         Auth::login($user);
        //         // dd($user);
        //     };
        //     return redirect('/dashboard')->with('success', 'Kamu telah login');
        // }
        //end cek login

        //start cek login (cara 2 untuk fungsi login)
        if(auth::attempt(['email'=>$request->email,'password'=>$request->password,])){
            // return redirect('/dashboard')->with('success', 'Kamu berhasil login');
            return redirect(RouteServiceProvider::HOME)->with('success', 'Kamu berhasil login');
        }

        //end cek login (cara 2 untuk fungsi login)

        //exception kalau fieldnnya ga sesuai
        throw ValidationException::WithMessages([
            'email' => 'email atau password anda tidak sesuai.',
        ]);
    }
}
