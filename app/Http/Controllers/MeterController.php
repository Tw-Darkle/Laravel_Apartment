<?php

namespace App\Http\Controllers;

use App\Models\Meter;
use App\Http\Controllers\Controller;
use App\Models\Room;
use Carbon\Carbon;
use Illuminate\Http\Request;

class MeterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $meterDate = meter::whereMonth('created_at', Carbon::now()->month)->get()->pluck("room_id");
        $statusrooms = room::where('statusroom', 'ห้องไม่ว่าง')->whereNotIn("id",$meterDate)->get();

            return view('admin.meter' , compact('meterDate','statusrooms'));
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
    public function store(Request $request ,$id)
    {
        $rooms = Room::findOrFail($id);

        $data = Meter::create([
            'room_id' => $rooms->id,
            'beforeWM' => $request->BFwatermeter,
            'beforeEVM' => $request->BFelectrimeter,
            'afterWM' => $request->AFwatermeter,
            'afterEVM' => $request->AFelectrimeter,
            'totalWM' => $request->TTwatermeter,
            'totalEV' => $request->TTelectrimeter,
        ]);

        $datameter = [
            'watermeter' => $request->AFwatermeter,
            'electrimeter' => $request->AFelectrimeter,
        ];

        $rooms->update( $datameter);

         return redirect('admin/showMeter');

    }

    /**
     * Display the specified resource.
     */
    public function show(Meter $meter)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Meter $meter)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Meter $meter)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Meter $meter)
    {
        //
    }
}
