<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    use HasFactory;
    public $table = 'cities' ;
    protected $fillable = [
        'country_id',
        'Name',
        'description',
        'image'
    ];
    public function country(){
        return $this->belongsTo(Country::class);
    }
    public function hotel(){
        return $this->hasMany(Hotel::class,'city_id');
    }
}
