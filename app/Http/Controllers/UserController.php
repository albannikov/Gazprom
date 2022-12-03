<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\User;
use App\Models\Car;
use Auth;

class UserController extends Controller
{
    public function index()
    {
        $id = Auth::id();
        $car = Car::where('user_id', $id)->get();
    }
}
