<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Super_admins;


use Illuminate\Support\Facades\Session;

use Illuminate\Support\Facades\Hash;
class AuthSuperAdmin extends Controller
{
    public function register(Request $r){
        if($r->isMethod('post')){
            $password=Hash::make($r->password);
            $data=Super_admins::create([
                "name" => $r->name,
                "email" => $r->email,
                "password" => $password,
                "active_status"=>1,
                "super_admin_role"=>"S"
            ]);
            return redirect('s-admin/login');
        }else{
            return view('superAdmin.login.register');
        }

    }

    public function login(Request $r){
        if($r->isMethod('post')){
            $email= $r->email;
            $userData=Super_admins::where('email',$email)->first();

            if (Hash::check($r->password, $userData->password)){
                Session::put('SuperAdminData', $userData);
                    return redirect('s-admin');
            }
        }else{
        return view('superAdmin.login.login');
        }
    }

    public function forgotPassword(){
        return view('superAdmin.login.forgotPassword');
    }

    public function logout(){
        Session::flush();
        return redirect('s-admin/login');
        // Session::forget('userData');
    }
}
