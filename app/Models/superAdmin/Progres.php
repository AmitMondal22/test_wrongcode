<?php

namespace App\Models\superAdmin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Progres extends Model
{
    use HasApiTokens, HasFactory, Notifiable;
    protected $fillable = [
        'title',
        'url',
        'about',
        'super_admin_id',
    ];
    // protected $hidden = [
    //     'password',
    // ];
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';
}
