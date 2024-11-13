<?php

namespace App\Http\Controllers;

use App\Models\SettingRoom;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SettingRoomController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $showSetting = SettingRoom::All();
        $exits = SettingRoom::exists();
            return view('admin.settingRoom', compact('showSetting'));

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
        $exist = SettingRoom::exists();
        //@dd($exist);
        if ($exist === false) {
            $data = SettingRoom::create([
                'priceWater' => $request->priceWater,
                'priceEV' => $request->priceEV,
                'priceAirRoom' => $request->priceAirRoom,
                'priceFanRoom' => $request->priceFanRoom,
                'CAMfee' => $request->CAMfee,
            ]);
            return redirect()->back();
        } else {
            return redirect()->back();
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(SettingRoom $settingRoom)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(SettingRoom $settingRoom)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$id)
    {
        $setRoom = SettingRoom::findOrFail($id);
        $data = [
            'priceWater' => $request->priceWater,
            'priceEV' => $request->priceEV,
            'priceAirRoom' => $request->priceAirRoom,
            'priceFanRoom' => $request->priceFanRoom,
            'CAMfee' => $request->CAMfee,
        ];
        $setRoom->update($data);
        return redirect(('admin/settingRoom'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(SettingRoom $settingRoom)
    {
        //
    }
}
