<?php

namespace App\Http\Controllers;

use App\Models\Media;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DashboaardController extends Controller
{
    public function index(){
        return view('admin.dashboard');
    }

    public function deleteMedia($media_id) {
        $media = Media::findOrFail($media_id);
        // delete the file
        Storage::delete('public/uploads/' . $media->name);

        // remove row
        $media -> delete();

        return back();
    }

}
