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

   public function generateReport()
   {
        return 123;
   }


   public function Postsearch(Request $request){
       $state_number = $request->input('search');
       if(Pass::where('state_number', $state_number)->first()){
            $result = Pass::where('state_number', $state_number)->first();
            
            return view('search',compact('result'));
       }
       else{
            $resultFalse = 'Ничего не найдено';
            return view('search', compact('resultFalse'));
       }
   }

    public function changeStatus(Request $request)
    {  
        
        if($request->input('status') == 'Принято в обработку'){
            Applications::where('id_applications',$request->input('id_applications'))->update(['status' => 'Принято в обработку']);
            return redirect('application-admin');
        }
        elseif($request->input('status') == 'Выдано разрешение'){
            $rand = mt_rand(1000, 999999);
            
            $id_applications =  $request->input('id_applications');
            $application = Applications::where('id_applications',$id_applications)->first();
            Pass::create([
                'id_car' => $application->id_car,
                'id_user' => $application->id_user,
                'point_a' => $application->point_a,
                'point_b' => $application->point_b,
                'period_from' => $application->period_from,
                'period_to' => $application->period_to,
                'state_number' => $application->state_number,
                'qr_code' => $rand,
            ]);

            Applications::where('id_applications',$id_applications)->update(['status' => 'Выдано разрешение']);
            return redirect('application-admin');
        }
        elseif($request->input('status') == 'Отклонено')
        {
            Applications::where('id_applications',$request->input('id_applications'))->update(['status' => 'Отклонено']);
            return redirect('application-admin');
        }
        
        

    }
}
