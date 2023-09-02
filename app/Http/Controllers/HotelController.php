<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\Country;
use App\Models\Hotel;
use Illuminate\Http\Request;

class HotelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
    public function search(Request $request)
    {
        $city = City::query();

        $hotel = Hotel::query();
        if ($city->where('Name', 'like', '%' . $request['name'] . '%')->exists()) {
            foreach ($city->get(['id']) as $iteam) {
                $cityH = City::find($iteam->id);
                foreach ($cityH->hotel as $hotelN) {
                    return response($hotelN->get('name'));
                }
            }
        }
        if($hotel->where('Name','like','%'.$request['name'].'%')->exists())
        {
            return response()->json([$hotel->get('name')]);
        }
        else{
            return response()->json(['message'=>'Not Found']);
        }
    }
        public function profile_Hotel(Request $request)
        {
            $hotel_id=Hotel::query()->where('name','=',$request['name'])->get('id');

            $hotel=Hotel::query()->select('*','images.image')->join('images','hotels.id','=','images.hotel_id')->get();
            //$hotel = Hotel::query()->select('name','images.image')->leftJoin('images','hotels.id','=','images.hotel_id')->where('name','=',$request['name'])->get();
            return $hotel;
        }
}
