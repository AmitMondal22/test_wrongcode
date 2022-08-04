<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Super_admins extends Model
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $fillable = [
        'name',
        'email',
        'password',
        'super_admin_role',
        'active_status'
    ];
    protected $hidden = [
        'password',
    ];
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';
}
