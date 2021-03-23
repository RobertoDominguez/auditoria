<?php

namespace App\Http\Controllers;

use App\Models\Administrator;
use App\Models\Assistance;
use App\Models\User;
use Illuminate\Http\Request;
use Auth;

class AdministratorController extends Controller
{
    public function viewLogin(){
        return view('login');
    }

    public function login(){
        $credentials=$this->validate(request(),
        ['email'=>'email|required|string',
        'password'=>'required|string']);

        if (Auth::guard('web')->attempt($credentials)){ 
            return redirect()->route('dashboard');
        }
        return back()
        ->withErrors(['email'=>'Estas credenciales no concuerdan con nuestros registros.'])
        ->withInput(request(['email']));
    }



    public function logout(){
        Auth::guard('web')->logout();
        return redirect()->route('admin.login_view');
    }

    public function dashboard(){
        $users=User::all();
        $assistances=[];
        foreach ($users as $user){
            $assistance=Assistance::where('id_user',$user->id)->count();
            array_push($assistances,$assistance);
        }
        return view('dashboard',compact('users','assistances'));
    }
}
