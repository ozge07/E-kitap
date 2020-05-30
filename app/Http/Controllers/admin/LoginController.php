<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view("admin.login");
    }
    public function login(Request $request)
    {
        if ($request->isMethod('post')) {
            if (Auth::attempt(['email' => $request->email, 'password' => $request->password, 'role' => 'admin', 'active' => 'True'])) {
                echo "login ok";
               // return redirect('/user');
            } else {
                //return redirect('/login')->with('message', 'Hatalı Email yada Şifre');
                echo "error login";
            }
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/admin/login')->with('message','Kullanıcı çıkış yaptı');
    }
}
