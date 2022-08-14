<?php

namespace App\Models\clientModel;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Products extends Model
{
    use HasApiTokens, HasFactory, Notifiable;
    protected $table = 'products';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'client_users_id', 'title', 'about', 'price', 'bookingPrice', 'discount_persentage', 'discount_money', 'youtube_url', 'banner_url', 'img_banner', 'active_status', 'category_id', 'area_location', 'location_cover_ariea', 'tag', 'created_by'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [

    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [

    ];

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';
}
