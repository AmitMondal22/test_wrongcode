<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\clientModel\Client;
use Illuminate\Support\Facades\Hash;

class ClientAuth extends Controller
{
    public function register(Request $r){
        // $r->validate([
        //     'email'=>'required|email',
        //     'password'=>'required|confirmed',
        // ]);
        $password=Hash::make($r->password);
        $data=Client::create([
            "fast_name"=>$r->fastName,
            "second_name"=>$r->secondName,
            "mobile"=>$r->mobileNo,
            "email"=>$r->clientEmail,
            "account_type"=>$r->accountType,
            "use_by"=>'C',
            "password"=>$password,
             "token"=>rand(000001,999999),
             "token_status"=>"0",
             "account_status"=>"A",
            //  "ip"=> get_ip(),
        ]);
        if(!empty($data)){
            return $data;
        }
        return 0;


    }
}
