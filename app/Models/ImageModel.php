<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ImageModel extends Model
{
    use HasFactory;
    public $table='images';
    protected $fillable = [
        'hotel_id',
        'image'
    ];
    public function hotel(){
        $this->belongsTo(Hotel::class);
    }
}
