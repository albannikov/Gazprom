<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    #use HasFactory;
    protected $table = "car";
    public $timestamps = false;
    protected $fillable = [
        'id_car',
        'id_user',
        'state_number',
        'model',
        'year_of_release',
        'code_ts',
        'type_of_transport_service',
        'view_ts',
        'type_ts',
        'the_value_of_the_vehicle_type_characteristic',
        'country_of_manufacture',
        'type_of_fuel',
        'supplier',
        'subcontracting',
        'the_basis_of_ownership',
        'sma',
    ];
}
