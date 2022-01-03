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

    }
}
