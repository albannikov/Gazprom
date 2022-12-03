<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Applications extends Model
{
    protected $table = "applications";
    public $timestamps = false;
    protected $fillable = [
        'id_car',
        'id_user',
        'point_a',
        'point_b',
        'period_from',
        'period_to',
        'state_number',
        'status'
    ];
}
