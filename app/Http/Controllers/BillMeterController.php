<?php

namespace App\Http\Controllers;

use App\Models\BillMeter;
use App\Http\Controllers\Controller;
use App\Models\Payment;
use Illuminate\Http\Request;

class BillMeterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $search = $request->input('search');
        if ($search) {
            $dataBill = BillMeter::with('rooms', 'payments')->when($search, function ($query, $search) {
                $query->where('room_id->rooms->numroom', 'like', "%{$search}%")
                    ->orWhereHas('rooms', function ($query) use ($search) {
                        $query->where('numroom', 'like', "%{$search}%");
                        $query->where('numroom', 'like', "%{$search}%");
                    })
                    ->orwhere('id->payments', 'like', "%{$search}%")
                    ->orWhereHas('payments', function ($query) use ($search) {
                        $query->where('status_payment', 'like', "%{$search}%");
                        $query->where('type_payment', 'like', "%{$search}%");
                    });
            })->paginate(10);
            return view('admin.bill', compact('dataBill','search' ));

        }else{
            $dataBill = BillMeter::all();
            return view('admin.bill', compact('dataBill','search' ));
        }
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
    public function store(Request $request, $id) {}

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
