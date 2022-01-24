<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Property;
use App\Models\Location;
use App\Models\Media;

use Illuminate\Support\Facades\Storage;
use Flasher\Laravel\Facade\Flasher;


class PropertyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $properties = Property::latest()->paginate(20);

        return view('admin.property.index', ['properties' => $properties]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $locations = Location::all();
        return view('admin.property.create', ['locations' => $locations]);
    }

    /**
     * validateProperty function.
     */
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

    /**
     * saveOrUpdateProperty function.
     */
    public function saveOrUpdateProperty($property, $request){
        $property->name            = $request->name;
        $property->name_tr         = $request->name_tr;

        if(!empty($request->featured_image)) {
            $featured_image_name = time() . '-' . $request->freatured_image->getClientOriginalName();

            // Store the file
            $request->freatured_image->storeAs('public/uploads', $featured_image_name);

            $property->freatured_image = $featured_image_name;

        }


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

        if (!empty($request->file('gallery_images'))) {
            foreach ($request->gallery_images as $image) {
                $gallery_image_name = $image->getClientOriginalName() . '-' . time() ;
                $image->storeAs('public/uploads', $gallery_image_name);
                $media = new Media();
                $media->name = $gallery_image_name;

                $media->property_id = $property->id;
                $media->save();
            }
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $updated_validation = $this->validateProperty()[] = [
            'freatured_image' => 'required|image',
            'gallery_images'  => 'required'
        ];

        $request->validate( $updated_validation);

        $property = new Property();

        $this->saveOrUpdateProperty($property, $request);

        Flasher::addSuccess('Property is added.');
        return redirect(route('dashboard-property.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $property  = Property::findOrFail($id);
        $locations = Location::all();

        return view('admin.property.edit', [
            'property'  => $property,
            'locations' => $locations
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $property = Property::findOrFail($id);
        $request->validate( $this->validateProperty() );

        $this->saveOrUpdateProperty($property, $request);

        Flasher::addSuccess('Property Updated.');
        return redirect(route('dashboard-property.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $property = Property::findOrFail($id);

        // delete featured image
        Storage::delete('public/uploads/' . $property->freatured_image);

        // delete gallery items
        foreach ($property->gallery as $media) {
            $media = Media::findOrFail($media->id);
            Storage::delete('public/uploads/' . $media->name);
            $media->delete();
        }

        // delete the Property
        $property->delete();


        Flasher::addSuccess('Property Updated.');
        return redirect(route('dashboard-properties'));
    }
}
