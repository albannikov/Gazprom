<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contractors;
use App\Models\User;
use App\Models\Car;
use Auth;

class UserController extends Controller
{
    public function addCar(Request $request)
    {
        $id = Auth::id();
        $supplier = Contractors::where('id_user',$id)->first('organization_name');
        
        Car::create([
            'id_user' => $id,
            'state_number' => $request->input('state_number'),
            'model' => $request->input('model'),
            'year_of_release' => $request->input('year_of_release'),
            'code_ts' => $request->input('code_ts'),
            'type_of_transport_service' => $request->input('type_of_transport_service'),
            'view_ts' => $request->input('view_ts'),
            'type_ts' => $request->input('type_ts'),
            'the_value_of_the_vehicle_type_characteristic' => $request->input('the_value_of_the_vehicle_type_characteristic'),
            'country_of_manufacture' => $request->input('country_of_manufacture'),
            'type_of_fuel' => $request->input('type_of_fuel'),
            'supplier' => $supplier->organization_name,
            'subcontracting' => $request->input('subcontracting'),
            'the_basis_of_ownership' => $request->input('the_basis_of_ownership'),
            
        ]);
        
        return redirect('/home');
    }
    
}
