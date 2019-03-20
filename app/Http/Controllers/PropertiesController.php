<?php

namespace App\Http\Controllers;

use App\Property;
use App\Category;
use App\Agent;
use Image;
use Session;
use File;
use Illuminate\Http\Request;

class PropertiesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $properties = Property::all();
        return view('admin.properties.index')->with('properties', $properties);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $count = Category::count();
        if($count == 0){
            return redirect()->route('categories.create')->with('error', 'Sorry, there are no categories. Please add a category first.');
        }
        $categories = Category::all();
        $agents = Agent::all();
        return view('admin.properties.create')->with('categories', $categories)->with('agents', $agents);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        if(!$request->hasFile('image') && $request->has('image')){
            return redirect()->back()->with('error','Image not supported, try another format');
        }
        $this->validate($request, [
            'title' => 'required',
            'location' => 'required',
            'image' => 'required',
            'image.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048|required',
            'price' => 'required',
            'category_id' => 'required',
            'description' => 'required',
        ]);

        foreach($request->file('image') as $image){
            // $image = $request->image;
            $image_name =  time() . $image->getClientOriginalName();
            $image_new_name = 'uploads/properties/' . $image_name;
            $new_image = Image::make($image->getRealPath())->resize(750, 500);
            $new_image->save($image_new_name);
    
            $image_data[] = $image_new_name; //Storing the public path for the image for record in the database
        }
        $slug = str_slug($request->title);
        $property = Property::create([
            'title' =>$request->title,
            'price' =>$request->price,
            'location' =>$request->location,
            'description' =>$request->description,
            'status' =>$request-> status,
            'category_id' =>$request-> category_id,
            'image' => json_encode($image_data),
        ]);

        if($request->has('agent_id')){
            $property->agent_id = $request->agent_id;
        }

        if(Property::where('slug', $slug)->count() != 0){
            $slug = str_slug($request->title . $property->id);
        }

        $property->slug = $slug;

        $property->save();
        Session::flash('success', 'You successifuly added the property.');
        return redirect()->route('properties.show', ['slug' => $slug]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Property  $property
     * @return \Illuminate\Http\Response
     */
    public function show(Property $property)
    {
        $images = json_decode($property->image);
        return view('admin.properties.show', ['property' => $property, 'images' => $images]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Property  $property
     * @return \Illuminate\Http\Response
     */
    public function edit(Property $property)
    {
        $categories = Category::all();
        return view('admin.properties.edit', ['property' => $property, 'categories'=> $categories]);
    }

    public function cover_photo(Property $property, $cover_image)
    {
        $images = json_decode($property->image);
        $temp = $images[0];
        $images[0] = $images[$cover_image];
        $images[$cover_image] = $temp;
        $property->image = json_encode($images);
        $property->save();
        Session::flash('success', 'You successifully changed the cover photo');
        return redirect()->back();
    }

    public function delete_photo(Property $property, $image)
    {
        $images = json_decode($property->image);
        File::delete($images[$image]);
        foreach($images as $img){
            if($images[$image] == $img){
                continue;
            }
            $data[] = $img;
        }
        $property->image = json_encode($data);
        $property->save();
        Session::flash('success', 'You successifuly removed the image.');
        return redirect()->back();
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Property  $property
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Property $property)
    {
        //
        if(!$request->hasFile('image') && $request->has('image')){
            return redirect()->back()->with('error','Image(s) not supported, try another format');
        }
        $this->validate($request, [
            'title' => 'required',
            'location' => 'required',
            'image' => 'required',
            'image.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'price' => 'required',
            'category_id' => 'required',
            'description' => 'required',
        ]);
        $image_data = json_decode($property->image);
        foreach($request->file('image') as $image){
            // $image = $request->image;
            $image_name =  time() . $image->getClientOriginalName();
            $image_new_name = 'uploads/properties/' . $image_name;
            $new_image = Image::make($image->getRealPath())->resize(750, 500);
            $new_image->save($image_new_name);
    
            $image_data[] = $image_new_name; //Storing the public path for the image for record in the database
        }
        $slug = str_slug($request->title);
        $property = Property::create([
            'title' =>$request->title,
            'price' =>$request->price,
            'location' =>$request->location,
            'description' =>$request->description,
            'status' =>$request-> status,
            'category_id' =>$request-> category_id,
            'image' => json_encode($image_data),
        ]);

        if($request->has('agent_id')){
            $property->agent_id = $request->agent_id;
        }

        if(Property::where('slug', $slug)->count() != 0){
            $slug = str_slug($request->title . $property->id);
        }

        $property->slug = $slug;

        $property->save();
        Session::flash('success', 'You successifuly edited the property.');
        return redirect()->route('properties.show', ['slug' => $slug]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Property  $property
     * @return \Illuminate\Http\Response
     */
    public function destroy(Property $property)
    {
        //
        $images = json_decode($property->image);
        foreach($images as $image){
            File::delete($image);
        }
        $property->delete();
        Session::flash('success', 'Property removed successifully');
        return redirect()->route('properties.index');
    }
}
