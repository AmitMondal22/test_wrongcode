<?php

namespace App\Http\Controllers\superAdmin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;

use App\Models\superAdmin\Catagory;
class Assets extends Controller
{
    public function AddCatagory(Request $r){
        if($r->isMethod('post')){
            // $data=new Progres;
            $data=Catagory::create([
                "catagory_name"=>$r->catacory_Namme,
                "create_by"=>Session::get('SuperAdminData')['super_admin_id'],
            ]);
            // $saveData=$data->save();
            return redirect()->route('catagory-list');
        }else{
            return view('superAdmin.catagory.addcatagory');

        }
    }


    public function ListCatagory(){

        $data= Catagory::Join('super_admins', 'super_admins.super_admin_id', '=', 'asstest_catagorys.create_by')->paginate(10, array('asstest_catagorys.*', 'super_admins.super_admin_id','super_admins.name'));

            return view('superAdmin.catagory.list-catagory')->with('data',$data);


    }
}
