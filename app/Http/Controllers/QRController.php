<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Pass;

class QRController extends Controller
{
    public function index(Request $request,$number){
        $info = Pass::where('qr_code',$number)->first();
        return view('info',compact('info'));
    }
}
