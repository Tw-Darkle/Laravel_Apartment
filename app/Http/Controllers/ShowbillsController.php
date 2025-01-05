<?php

namespace App\Http\Controllers;

use App\Models\showbills;
use App\Http\Controllers\Controller;
use App\Models\BillMeter;
use App\Models\Meter;
use App\Models\Payment;
use App\Models\Room;
use App\Models\SettingRoom;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ShowbillsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($id)
    {
        $meters = Meter::findOrFail($id);
        $checkMeter = meter::whereMonth('created_at', Carbon::now()->month)->where('id', $id)->get()->pluck("room_id");
        $typeRooms = Room::whereIn("id", $checkMeter)->get()->pluck("typeroom");
        if ($typeRooms->contains('ห้องพัดลม')) {
            $priceRoom = SettingRoom::value('priceFanRoom');
        } else {
            $priceRoom = SettingRoom::value('priceAirRoom');
        }
        $dataPriceRoom = SettingRoom::find('1');

        $totalPriceWM = $meters->totalWM * $dataPriceRoom->priceWater;
        $totalPriceEV = $meters->totalEV * $dataPriceRoom->priceEV;
        $totalAllPrice = $totalPriceWM + $totalPriceEV + $priceRoom + $dataPriceRoom->CAMfee ;
        return view('admin.showMeter', compact('meters', 'dataPriceRoom', 'priceRoom','totalPriceWM', 'totalPriceEV', 'totalAllPrice'));
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
    public function store(Request $request, $id)
    {
        $meters = Meter::findOrFail($id);
        $dataPriceRoom = SettingRoom::find('1');
        $data = BillMeter::create([
            'room_id' => $meters->room_id,
            'beforeWM' => $meters->beforeWM,
            'beforeEVM' => $meters->beforeEVM,
            'afterWM' => $meters->afterWM,
            'afterEVM' =>  $meters->afterEVM,
            'totalWM' => $meters->totalWM,
            'totalEV' => $meters->totalEV,
            'priceWM' => $dataPriceRoom->priceWater,
            'priceEV' => $dataPriceRoom->priceEV,
            'totalPriceWM' => $request->totalPriceWM,
            'totalPriceEV' => $request->totalPriceEV,
            'CAMfee' => $dataPriceRoom->CAMfee,
            'priceRoom' => $request->priceRoom,
            'totalAllPrice' => $request->totalAllPrice,
        ]);

        $dataPay = Payment::create([
            'bill_id'=>$data->id,
            'status_payment'=>'ยังไม่ชำระเงิน',
            'type_payment'=>'ยังไม่ชำระเงิน',
            'proof_payment'=>'ยังไม่ชำระเงิน',
        ]);

        return redirect('admin/meter');
    }

    /**
     * Display the specified resource.
     */
    public function show(showbills $showbills)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(showbills $showbills)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, showbills $showbills)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(showbills $showbills)
    {
        //
    }
}
