<?php

namespace App\Http\Controllers\superAdmin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Dashboard extends Controller
{
    public function Index(){
        return view('superAdmin.index');
    }
}
