<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Car;
use App\Models\Contractors;
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
        
        if($request->user()->role == 'admin'){
            
            return view('adminHome');
        }
        else{
            //Получаем список машин
            $id = Auth::id();
            $contractors = Contractors::where('id_user', $id)->get();
            $cars = Car::where('id_user', $id)->get();

            return view('userHome',compact('cars','contractors'));
        }
        
    }

    public function application(Request $request)
    {
       
        

            return view('application');
        
        
    }

    
    public function car(Request $request)
    {
       
        return view('car');
        
    }


    

    
}
