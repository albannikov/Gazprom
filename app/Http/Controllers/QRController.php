<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Pass;
use QRCode;

class QRController extends Controller
{
    public function index(Request $request,$number){
        #QrCode::encoding('UTF-8')->size(500)->generate('Добро пожаловать на jobtools.ru');
        if(Pass::where('qr_code', $number)->first()){;
            $info = Pass::where('qr_code',$number)->first();
            return view('info',compact('info'));
        }
        else{
            return 'not';
        }
        
    }
}
