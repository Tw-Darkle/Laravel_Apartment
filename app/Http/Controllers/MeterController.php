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
        $meterID = meter::whereMonth('created_at', Carbon::now()->month)->get()->pluck("numroom");
        $statusrooms = room::where('statusroom', 'ห้องไม่ว่าง')->whereNotIn("numroom",$meterID)->get();

        return view('/admin/meter' , compact('meterID','statusrooms'));
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
        $NumberRoom = Room::findOrFail($id);
        $data = Meter::create([
            'numroom' => $NumberRoom->numroom,
            'beforeWM' => $request->BFwatermeter,
            'beforeEVM' => $request->BFelectrimeter,
            'afterWM' => $request->AFwatermeter,
            'afterEVM' => $request->AFelectrimeter,
            'totalWM' => $request->TTwatermeter,
            'totalEV' => $request->TTelectrimeter,
        ]);
         return redirect('admin/meter');

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
