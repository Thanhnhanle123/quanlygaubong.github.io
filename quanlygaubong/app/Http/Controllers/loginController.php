<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Rediredct;
use App\User;
class loginController extends Controller
{
    public function index(Request $request){
        if($request->isMethod('post')){
            $credentials = [
            'userName' => $request->userName,
            'password' => $request->Password
            ];
            if (Auth::attempt($credentials)) {
                return redirect()->to('admin/');
            }else {
                return redirect()->back();
            }
        }
        return view('login.index');
    }
    public function logout(){
        if(Auth::logout()){
            return redirect('/login');
        }
        return redirect('/admin');
    }
}
