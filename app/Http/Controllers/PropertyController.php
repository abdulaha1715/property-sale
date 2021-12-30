<?php

namespace App\Http\Controllers;

use App\Models\Location;
use App\Models\Property;
use Illuminate\Http\Request;

class PropertyController extends Controller
{
    public function single($id) {
        $poperty = Property::findOrFail($id);

        return view( 'property.single', ['property' => $poperty]);
    }

    public function index(Request $request) {

        $locations = Location::select('id', 'name')->get();

        $latest_properties = Property::latest();

        // For sale search option
        if(!empty($request->sale)){
            $latest_properties = $latest_properties->where('sale', $request->sale);
        }

        // For sale search option
        if(!empty($request->type)){
            $latest_properties = $latest_properties->where('type', $request->type);
        }

        // For location search option
        if(!empty($request->location)){
            $latest_properties = $latest_properties->where('location_id', $request->location);
        }

        // For Property Price
        if (!empty($request->price)) {
            // Request Price
            $price = $request->price;

            // if more than 500000
            if ($price == 500001) {
                $priceMin = 500000;
                $latest_properties = $latest_properties->where('price', '>', $priceMin);
            }else{
                if ($price == 100000) {
                    $priceMin = 0;
                    $priceMax = 100000;
                } elseif ($price == 200000) {
                    $priceMin = 100000;
                    $priceMax = 200000;
                } elseif ($price == 300000) {
                    $priceMin = 200000;
                    $priceMax = 300000;
                } elseif ($price == 400000) {
                    $priceMin = 300000;
                    $priceMax = 400000;
                }elseif ($price == 500000) {
                    $priceMin = 400000;
                    $priceMax = 500000;
                }
                $latest_properties = $latest_properties->where('price', '>', $priceMin)->where('price', '<=', $priceMax);
                // dd($request->all());
            }
        }

        // For bedrooms search option
        if(!empty($request->bedrooms)){
            $latest_properties = $latest_properties->where('bedrooms', $request->bedrooms);
        }

        // For query search option
        if(!empty($request->property_name)){
            $latest_properties = $latest_properties->where('name', 'LIKE', '%' . $request->property_name . '%');
        }

        $latest_properties = $latest_properties->paginate(12);


        return view('property.index', ['latest_properties' => $latest_properties, 'locations' => $locations ]);
    }
}
