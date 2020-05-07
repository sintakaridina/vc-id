<?php

namespace App\Http\Controllers;

use App\ModelUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class User extends Controller
{
    //
    public function index(){
        if(!Session::get('login')){
            return redirect('login-deprecated')->with('alert','Kamu harus login dulu');
        }
        else{
            return view('pages.dashboard');
        }
    }
    public function write(){
        if(!Session::get('login')){
            return redirect('login-deprecated')->with('alert','Kamu harus login dulu');
        }
        else{
            return view('pages.write');
        }
    }
  
    public function login(){
        return view('login');
    }

    public function loginPost(Request $request){

        $email = $request->email;
        $password = $request->password;

        $data = ModelUser::where('email',$email)->first();
        if($data){ //apakah email tersebut ada atau tidak
            if(Hash::check($password,$data->password)){
                Session::put('id',$data->id);
                Session::put('name',$data->name);
                Session::put('email',$data->email);
                Session::put('login',TRUE);
                return redirect('dashboard');
            }
            else{
                return redirect('login-deprecated')->with('alert','Password atau Email, Salah !');
            }
        }
        else{
            return redirect('login-deprecated')->with('alert','Password atau Email, Salah!');
        }
    }

    public function logout(){
        Session::flush();
        return redirect('/')->with('alert','Kamu sudah logout');
    }

    public function register(Request $request){
        return view('register');
    }

    public function registerPost(Request $request){
        $this->validate($request, [
            'name' => 'required|min:4',
            'email' => 'required|min:4|email|unique:users',
            'password' => 'required',
            'confirmation' => 'required|same:password',
        ]);

        $data =  new ModelUser();
        $data->name = $request->name;
        $data->email = $request->email;
        $data->password = bcrypt($request->password);
        $data->save();
        return redirect('login-deprecated')->with('alert-success','Kamu berhasil Register');
    }
}