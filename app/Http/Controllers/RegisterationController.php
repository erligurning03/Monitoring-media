<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterationController extends Controller
{
    public function create(){
        return view('auth.register'); //kalau kita pake name, ga perlu lagi pake /
    }

    public function store(Request $request){
        // dd('succes');
        $request->validate([
            'name' => ['required', 'string', 'min:3'],
            'email' => ['required',' unique:users','email', 'min:6'],
            'foto' => ['required','image','mimes:jpeg,png,jpg,gif,svg','max:1000'],
            'password' => ['required', 'min:8'],
        ]);

        // //mengatur validasi user jika sudah tersedia dengan email yang ada maka tolak pendaftaran akun
        // $user = User::where('email', $request->email)
        //     // ->orWhere('username', $request->username)
        //     ->first();

        // if($user){
        //     // return back();
        //     dd('user sudah ada');
        // }

        User::create([
            'name' => $request->name,
            'email'=> $request->email,
            'foto'=> $request ->foto,
            'password'=>Hash::make( $request->password),
        ]);

        session()->flash('succes', 'Terimakasih, sekarang kamu terdaftar');//untuk sesi jika berhasil terdaftar diwebsite
        return redirect('/dashboard');
    }
}
