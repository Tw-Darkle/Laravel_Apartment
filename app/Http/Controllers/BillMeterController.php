<?php

namespace App\Http\Controllers;

use App\Models\BillMeter;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BillMeterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.showMeter');
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
    public function show(BillMeter $billMeter)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(BillMeter $billMeter)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, BillMeter $billMeter)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(BillMeter $billMeter)
    {
        //
    }
}
