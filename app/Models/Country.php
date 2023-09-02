<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    use HasFactory;
    public $table = 'countries';
    protected $fillable = [
        'Name',
        'Name_area',
        'capital',
        'language'
    ];
    public function city(){
        return $this->hasMany(City::class,'country_id');
    }
}
