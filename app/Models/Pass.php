<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pass extends Model
{
    protected $table = "pass";
    public $timestamps = false;
    protected $fillable = [
        'id_car',
        'id_user',
        'point_a',
        'point_b',
        'period_from',
        'period_to',
        'state_number',
        'qr_code',
    ];
}
