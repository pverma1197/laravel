<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facade\DB;

use App\Login;
use App\Sign;
use Session;
use Crypt;
class LoginController extends Controller
{
    //
    function userlist(){
        $data= Login::all();
        return view('userlist',["data"=>$data]);
    }
    function register(Request $req){
        //return $req->input();
        $log= new Login;
        $log->name=$req->input('Name');
        $log->email=$req->input('Email');
        $log->mobile=$req->input('Mobile');
        $log->address=$req->input('Address');
        $log->save();
        $req->session()->flash('status','Form Submitted successfully');
        return redirect ('userlist');
    }
    function signin (Request $req){
        $user = new Sign;
        $user->name=$req->input('name');
        $user->email=$req->input('email');
        $user->password=Crypt::encrypt($req->input('password'));
        $user->save();
        $req->session()->put('user',$user->name=$req->input('name'));
        return redirect ('/login');
    }

    function login(Request $req){
        $user= Sign::where('email',$req->input('email'))->get();
        if(Crypt::decrypt($user[0]->password)==$req->input('password')){

            $req->session()->put('user',$user[0]->name);
            return redirect ('/registration');
        }
    }
}
