<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contractors extends Model
{
    protected $table = "contractors";
    public $timestamps = false;
    protected $fillable = [
        'organization_name',
        'number',
        'email',
        'code_sma',
    ];
    
}
