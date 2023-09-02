<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RoomModel extends Model
{
    use HasFactory;
    public $table = 'rooms';
    protected $fillable = [
        'hotel_id',
        'type',
        'image',
        'price',
        'number_of_person',
        'number_of_room',
        'is_available',
        'count'
    ];
    public function hotel(){
        $this->belongsTo(Hotel::class);
    }
}
