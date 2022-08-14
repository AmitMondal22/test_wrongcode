<?php

namespace App\Http\Controllers\superAdmin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use App\Models\superAdmin\Progres;
class Progress extends Controller
{
    public function index(Request $r){
        if($r->isMethod('post')){
            // $data=new Progres;
            $data=Progres::create([
                "title"=>$r->title,
                "url"=>$r->api,
                "about"=>$r->about,
                "super_admin_id"=>Session::get('SuperAdminData')['super_admin_id'],
            ]);
            // $saveData=$data->save();
            return redirect()->route('progress');
        }else{
            return view('superAdmin.progress.progress');

        }
    }
    public function progress(){
       $data= Progres::Join('super_admins', 'super_admins.super_admin_id', '=', 'progres.super_admin_id')->orderBy('progres.Progress_id', 'DESC')->paginate(10, array('progres.*', 'super_admins.super_admin_id','super_admins.name'));


        // return $data;
        return view('superAdmin.progress.progressList')->with('data',$data);

    }
}


// Product::where('categories.id', $categoryId)->where('products.hidden', 0)
//             ->leftJoin('products_in_categories', 'products_in_categories.prod_id', '=', 'products.id')
//             ->leftJoin('categories', 'products_in_categories.cat_id', '=', 'categories.id')
//             ->leftJoin('furnitures', 'products.furniture', '=', 'furnitures.id')
//             ->paginate(10, array('products.*', 'categories.slug as cat_slug', 'furnitures.slug as furn_slug')
