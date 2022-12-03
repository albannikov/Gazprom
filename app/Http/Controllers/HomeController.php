<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Car;
use App\Models\Contractors;
use App\Models\Applications;
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
            
            $cars = Car::all();
            return view('adminHome',compact('cars'));
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
       
            $id = Auth::id();
            $applications = Applications::where('id_user',$id)->get();
            return view('application',compact('applications'));
        
        
    }

    
    public function car(Request $request)
    {
       

        return view('car');
        
    }

    #Далее идут функции для работы администратора
    public function applicationAdmin(Request $request)
    {
        $applications = Applications::join('contractors', 'contractors.id_user', '=', 'applications.id_user')->get(['applications.point_a','applications.point_b','applications.period_from','applications.period_to','applications.state_number','applications.status','contractors.organization_name']);
        return view('applicationAdmin',compact('applications'));
    }


    

    
}
