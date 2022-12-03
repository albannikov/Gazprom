<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Car;
use App\Models\Contractors;
use App\Models\Applications;
use App\Models\Pass;
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
            
            $id = Auth::id();
            $contractors = Contractors::where('id_user', $id)->get();
            $cars = Car::where('id_user', $id)->get();

            return view('userHome',compact('cars','contractors'));
        }
        
    }

    public function application(Request $request)
    {
       
            $id = Auth::id();
            $contractors = Contractors::where('id_user', $id)->get();
            $applications = Applications::where('id_user',$id)->get();
            return view('application',compact('applications','contractors'));
        
    }

    
    public function car(Request $request)
    {
        $id = Auth::id();
        $contractors = Contractors::where('id_user', $id)->get();
        $cars = Car::where('id_user', $id)->get();
        return view('car',compact('contractors'));
        
    }

    
    public function applicationAdmin(Request $request)
    {
        $applications = Applications::join('contractors', 'contractors.id_user', '=', 'applications.id_user')->where('applications.status','отправлено')->orWhere('applications.status','Принято в обработку')->get(['applications.point_a','applications.point_b','applications.period_from','applications.period_to','applications.state_number','applications.status','applications.id_applications','contractors.organization_name']);
        return view('applicationAdmin',compact('applications'));
    }

    public function pass()
    {
        $id = Auth::id();
        $allPass = Pass::where('id_user',$id)->get();
        return view('pass', compact('allPass'));
    }

    

    
}
