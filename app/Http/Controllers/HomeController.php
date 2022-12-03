<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Car;
use Auth;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {
        if($request->user()->role == 'admin')
            return view('adminHome');
            
        else{
            //Получаем список машин
            $id = Auth::id();
            $cars = Car::where('user_id', $id)->get();

            return view('userHome',compact('cars'));
        }
        
    }



    

    
}
