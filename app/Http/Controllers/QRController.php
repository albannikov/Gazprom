<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Pass;
use App\Models\Car;
use QRCode;

class QRController extends Controller
{
    public function index(Request $request,$number){
        #QrCode::encoding('UTF-8')->size(500)->generate('Добро пожаловать на jobtools.ru');

        
        if(Pass::where('qr_code', $number)->first()){;
            $info = Pass::where('qr_code',$number)->first();
            $info = Car::join('pass','pass.state_number','=','car.state_number')->where('qr_code', $number)->get(['car.model','car.year_of_release','car.code_ts','car.type_of_transport_service','car.view_ts','type_ts','car.the_value_of_the_vehicle_type_characteristic','car.country_of_manufacture','car.type_of_fuel','car.supplier','car.subcontracting','car.the_basis_of_ownership','car.sma','pass.point_a','pass.point_b','pass.period_from','pass.period_to','pass.state_number','pass.qr_code']);
            
            return view('info',compact('info'));
        }
        else{
            return 'not';
        }
        
    }
}
