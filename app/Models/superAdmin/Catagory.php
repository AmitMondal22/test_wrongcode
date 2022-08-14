<?php

namespace App\Models\superAdmin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Catagory extends Model
{
    use HasFactory;


    protected $table = 'asstest_catagorys';

    protected $fillable = ['catagory_name', 'create_by'];
    // protected $hidden = [
    //     'password',
    // ];
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';
}
