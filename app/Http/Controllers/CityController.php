<?php

namespace App\Http\Controllers;

use App\Models\City;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Validator;

class CityController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return City::all();
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = Validator::make($request->all(),[
            'Name'=>'required',
            'description'=>'required',
            'country_id'=>'required',
            'image'=>'required'
        ]);
        if($data->fails())
        {
            return response()->json(['error'=>$data->errors()]);
        }
        if ($request['image']) {
            if ($request->hasFile('image')) {
                //GET filename with extension
                $filenameWithExt = $request->file('image')->getClientOriginalName();
                //Get just the filename
                $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
                //Get extension
                $extension = $request->file('image')->getClientOriginalExtension();
                //Create new filename
                $filenameToStore = $filename . '_' . time() . '_' . $extension;
                //upload image
                $path = $request->file('image')->storeAs('image', $filenameToStore);
                $city = City::create([
                    'country_id' => $request['country_id'],
                    'Name' => $request['name'],
                    'description' => $request['description'],
                    'image' => URL::asset('storage' . $path)
                ]);
            }
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $city=City::query()->find($id);
        return $city;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $city=City::query()->find($id);
        $city->update($request->all());
        $city->save();
        return response()->json(['state'=>200]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $city=City::query()->find($id);
        $city->delete();
        return response()->json(['state'=>200]);
    }
}
