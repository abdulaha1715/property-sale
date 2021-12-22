<?php

namespace App\Http\Controllers;

use App\Models\Property;
use Illuminate\Http\Request;

class PropertyController extends Controller
{
    public function single($id) {
        $poperty = Property::findOrFail($id);

        return view( 'property.single', ['property' => $poperty]);
    }

    public function index(Request $request) {

        $latest_properties = Property::latest();

        // For sale search option
        if(!empty($request->sale)){
            $latest_properties = $latest_properties->where('sale', $request->sale);
        }
        // For sale search option
        if(!empty($request->type)){
            $latest_properties = $latest_properties->where('type', $request->type);
        }

        // Check Property Type
        // if (!empty($request->type)) {
        //     if ($request->type == 'land') {
        //         $type = 1;
        //     } elseif ($request->type == 'apartment') {
        //         $type = 2;
        //     } elseif ($request->type == 'villa') {
        //         $type = 3;
        //     }
        //     $latest_properties = $latest_properties->where('type', $type);
        // }


        // For bedrooms search option
        if(!empty($request->bedrooms)){
            $latest_properties = $latest_properties->where('bedrooms', $request->bedrooms);
        }

        $latest_properties = $latest_properties->paginate(12);


        return view('property.index', ['latest_properties' => $latest_properties]);
    }
}
