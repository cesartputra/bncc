<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GuestController extends Controller
{
    //
    function index(){
    	$nama = "Budi";
    	$panjang = 5;
    	$lebar = 3;

    	$luas = $panjang * $lebar;
    	return view("guest_view/home")
    	->with("namanya",$nama)
    	->with("luasnya",$luas);
    }

    function register(){
    	return view("guest_view/register");
    }

    function login(){
    	return view("guest_view/login");
    }

    function do_register(Request $request){
    	$rules = [
    		"txt_email" => "required|email",
    		"txt_password" => "required",
    		"txt_ulangi" => "required|same:txt_password"
    	];
    	$attributes = [
    		"txt_email" => "Email Anda",
    		"txt_password" => "Password Anda",
    		"txt_ulangi" => "Ulangi Password"
    	];
    	$messages = [
    		"required" => ":attribute harus diisi",
    		"email" => ":attribute harus diisi dengan format email yang benar",
    		"same" => ":attribute harus diisi sama dengan :other"
    	];

    	$this->validate($request,$rules,$messages,$attributes);

    	return back()->with("sukses","Registrasi anda berhasil");
    }
}
