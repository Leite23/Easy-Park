<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ParkingLot extends Model
{
    use HasFactory;

    protected $fillable = ['address', 'date', 'interval', 'value',  'place', 'coordenates', 'user_id', 'time'];
}
