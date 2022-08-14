<?php

namespace App\Http\Controllers\public;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\superAdmin\Catagory;
class Assete extends Controller
{
    public function ListCatagory(){

        $data= Catagory::Join('super_admins', 'super_admins.super_admin_id', '=', 'asstest_catagorys.create_by')->paginate(10, array('asstest_catagorys.*', 'super_admins.super_admin_id','super_admins.name'));

            return $data;


    }
}
