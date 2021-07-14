<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function login(Request $req){
       $user = User::Where(['email' => $req->email])->first();

        if(!$user || !Hash::check($req->password,$user->password)){

            return 'username password doesnot matched';
        }
        else{
            $req->session()->put('user',$user);
            return redirect('/');
        }
    }
    public function register(Request $req){
        $user = new User();

        $user->name = $req->name;
        $user->email = $req->email;
        $user->password = Hash::make($req->password);

        $user->save();

        return redirect('logview');

    }
}
