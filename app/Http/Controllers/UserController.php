<?php

namespace App\Http\Controllers;

use App\Models\Assistance;
use App\Models\User;
use App\Models\Log;
use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function assistance_view(){
        return view('assistance');
    }

    public function assistance(Request $request){
        $user=User::where('ci',$request->ci)->first();
        
        if (is_null($user)){
            return redirect()->route('asistencia_view')->withErrors(['Error'=>'Credenciales incorrectas']);
        }

        if (Hash::check($request->password,$user->password)){
            Assistance::create(['id_user'=>$user->id]);
            return redirect()->route('asistencia_view')->with('message', 'Ha registrado su asistencia');;
        }
        return redirect()->route('asistencia_view')->withErrors(['Error'=>'Credenciales incorrectas']);
    }
}
