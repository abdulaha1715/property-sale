<?php

namespace App\Http\Controllers;

use App\Models\Location;
use App\Models\Media;
use App\Models\Property;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

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
        $locations = Location::all();
        return view('admin.property.add', ['locations' => $locations]);
    }

    public function validateProperty() {
        return [
            'name'            => 'required',
            'name_tr'         => 'required',
            'location_id'     => 'required',
            'price'           => 'required|integer',
            'sale'            => 'integer',
            'type'            => 'required',
            'bedrooms'        => 'integer',
            'drawing_rooms'   => 'integer',
            'bathrooms'       => 'integer',
            'net_sqm'         => 'integer',
            'gross_sqm'       => 'integer',
            'pool'            => 'integer',
            'overview'        => 'required',
            'overview_tr'     => 'required',
            'description'     => 'required',
            'description_tr'  => 'required',
        ];
    }

    public function saveOrUpdateProperty($property, $request){
        $property->name            = $request->name;
        $property->name_tr         = $request->name_tr;

        $featured_image_name = time() . '-' . $request->freatured_image->getClientOriginalName();

        // Store the file
        $request->freatured_image->storeAs('public/uploads', $featured_image_name);

        $property->freatured_image = $featured_image_name;

        $property->location_id     = $request->location_id;
        $property->price           = $request->price;
        $property->sale            = $request->sale;
        $property->type            = $request->type;
        $property->bedrooms        = $request->bedrooms;
        $property->drawing_rooms   = $request->drawing_rooms;
        $property->bathrooms       = $request->bathrooms;
        $property->net_sqm         = $request->net_sqm;
        $property->gross_sqm       = $request->gross_sqm;
        $property->pool            = $request->pool;
        $property->overview        = $request->overview;
        $property->overview_tr     = $request->overview_tr;
        $property->why_buy         = $request->why_buy;
        $property->why_buy_tr      = $request->why_buy_tr;
        $property->description     = $request->description;
        $property->description_tr  = $request->description_tr;

        $property->save();

        foreach ($request->gallery_images as $image) {
            $gallery_image_name = time() . '-' . $image->getClientOriginalName();
            $image->storeAs('public/uploads', $gallery_image_name);
            $media = new Media();
            $media->name = $gallery_image_name;

            $media->property_id = $property->id;
            $media->save();
        }
    }


    public function createProperty(Request $request){
        $updated_validation = $this->validateProperty()[] = [
            'freatured_image' => 'required|image',
            'gallery_images'  => 'required',
        ];

        $request->validate( $updated_validation);

        $property = new Property();

        $this->saveOrUpdateProperty($property, $request);

        return redirect(route('dashboard-properties'))->with(['message' => 'Property is added.']);
    }

    public function editProperty($property_id) {
        $property = Property::findOrFail($property_id);
        $locations = Location::all();
        return view('admin.property.edit', [
            'property'  => $property,
            'locations' => $locations
        ]);
    }

    public function deleteMedia($media_id) {
        $media = Media::findOrFail($media_id);
        // delete the file
        Storage::delete('public/uploads/' . $media->name);

        // remove row
        $media -> delete();

        return back();
    }

    public function updateProperty($property_id, Request $request) {
        $property = Property::findOrFail($property_id);

        $request->validate( $this->validateProperty() );

        $this->saveOrUpdateProperty($property, $request);

        return redirect(route('dashboard-properties'))->with(['message' => 'Property Updated.']);
    }

    public function deleteProperty($property_id) {
        $property = Property::findOrFail($property_id);
        // delete featured image
        Storage::delete('public/uploads/' . $property->freatured_image);

        // delete gallery items
        foreach ($property->gallery as $media) {
            $media = Media::findOrFail($media->id);
            Storage::delete('public/uploads/' . $media->name);
            $media->delete();
        }

        // delete the property
        $property->delete();

        return redirect(route('dashboard-properties'))->with(['message' => 'Property Deleted.']);
    }

}
