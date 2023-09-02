<?php

namespace App\Http\Controllers;

use App\Models\Country;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CountryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Country::all('Name','Region','capital','Official_language','Area','Currency');
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
            'Region'=>'required',
            'Capital'=>'required',
            'Official_language'=>'required',
            'Area'=>'required',
            'Currency'=>'required',
        ]);
        if($data->fails())
        {
            return response()->json(['error'=>$data->errors()]);
        }
        $country=Country::create([
            'Name'=>$request['Name'],
            'Region'=>$request['Region'],
            'Capital'=>$request['Capital'],
            'Official_language'=>$request['Official_language'],
            'Area'=>$request['Area'],
            'Currency'=>$request['Currency'],
        ]);
        return response()->json(['state'=>200]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $country=Country::query()->find($id);
        return response()->json(['country'=>$country]);
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
        $country=Country::query()->find($id);
        $country->update();
        $country->save();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $country=Country::query()->find($id);
        $country->delete();
    }
    public function Country (Request $request)
    {
        $country = Country::query()->where('Name','like','%'.$request['Name'].'%')->get(['Name','Region','capital','Official_language','Area','Currency']);
        return $country;
    }
}
