<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\clientModel\Products;

class AddProduct extends Controller
{
    public function add_product(Request $r){

        $validatedData = $r->validate([
            // 'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            'image' => 'image|mimes:jpg,png,jpeg,gif,svg|max:2048',

           ]);
           $img="";
           $path="";

        // $img = time().'.'.$r->file('image')->getClientOriginalName();

        // $path = $r->file('image')->store('public/clientUser/clientUser');



        $data=Products::create([
            'client_users_id'=>$r->user_id,
            'title'=>$r->title,
            'about'=>$r->about,
            'price'=>$r->product_price,
            'bookingPrice'=>$r->booking_price,
            'discount_persentage'=>$r->discount_persentage,
            'discount_money'=>$r->discount_money,
            'youtube_url'=>$r->youtube_url,
            'banner_url'=>$path,
            'img_banner'=>$img,
            'category_id'=>$r->catagory,
            'active_status'=>$r->active_status,
            'area_location'=>$r->location,
            'location_cover_ariea'=>$r->location_cover_ariea,
            'tag'=>$r->tag,
            'created_by'=>$r->user_id
        ]);
        if(!empty($data)){
            return $data;
        }
        return 0;
    }
}
