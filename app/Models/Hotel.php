<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
    use HasFactory;
    public $table = 'hotels';
    protected $fillable = [
        'city_id',
        'Name',
        'Address',
        'description',
        'image_profile',
        'link',
        'phone',
        'stars',
        'number_of_room',
        'rate'
    ];
    public function city(){
        return $this->belongsTo(City::class);
    }
    public function image(){
        $this->hasMany(ImageModel::class,'hotel_id');
    }
    public function room(){
        $this->hasMany(RoomModel::class,'hotel_id');
    }
}
