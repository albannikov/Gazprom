<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Contractors;
use App\Models\User;
use App\Models\Car;
use App\Models\Applications;
use App\Models\Pass;
use Auth;

class AdminController extends Controller
{
    public function applicationAccpet(Request $request)
    {

    }

    public function underСonsideration(Request $request)
    {  
        
        if($request->input('status') == 'На рассмотрении'){
            Applications::where('id_applications',$request->input('id_applications'))->update(['status' => 'На рассмотрении']);
            return redirect('application-admin');
        }

        $id_applications =  $request->input('id_applications');
        $application = Applications::where('id_applications',$id_applications)->first();
        


    }
}
