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
        $latest_properties = Property::latest()->where('type', $request->type)->paginate(12);

        return view('property.index', ['latest_properties' => $latest_properties]);
    }
}
