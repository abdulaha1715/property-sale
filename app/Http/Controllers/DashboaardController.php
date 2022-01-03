<?php

namespace App\Http\Controllers;

use App\Models\Property;
use Illuminate\Http\Request;

class DashboaardController extends Controller
{
    public function index(){
        return view('admin.dashboard');
    }

    public function properties(){
        $admin_properties = Property::latest()->paginate(20);

        return view('admin.properties', ['admin_properties' => $admin_properties]);
    }

    public function addProperty(){
        return view('admin.property.add');
    }

    public function createProperty(Request $request){
        $request->validate([
            'name'            => 'required',
            'name_tr'         => 'required',
            'freatured_image' => 'required|image',
            'location_id'     => 'required',
            'price'           => 'required|integer',
            'sale'            => 'integer',
            'type'            => 'required',
            'bedrooms'        => 'integer',
            'bathrooms'       => 'integer',
            'net_sqm'         => 'integer',
            'gross_sqm'       => 'integer',
            'pool'            => 'integer',
            'overview'        => 'required',
            'overview_tr'     => 'required',
            'description'     => 'required',
            'description_tr'  => 'required',
        ]);
    }
}
