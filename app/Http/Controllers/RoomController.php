<?php

namespace App\Http\Controllers;

use App\Models\Room;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RoomController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $rooms = Room::all();
        return view('admin.room', compact('rooms'));
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
        $request->validate(
            [
                'numroom' => 'required',
                'typeroom' => 'required',
                'statusroom' => 'required',
                'watermeter' => 'required|integer',
                'electrimeter' => 'required|integer'
            ],
            [
                'numroom.required' => 'กรุณาป้อนหมายเลขห้อง',
                'typeroom.required' => 'กรุณาเลือกประเภทห้อง',
                'statusroom.required' => 'กรุณาเลือกสถานะห้อง',
                'watermeter.required' => 'กรุณากรอกหมายเลขมิเตอร์',
                'watermeter.integer' => 'กรุณากรอกเป็นตัวเลขเท่านั้น',
                'electrimeter.required' => 'กรุณากรอกหมายเลขมิเตอร์',
                'electrimeter.integer' => 'กรุณากรอกเป็นตัวเลขเท่านั้น',
            ]
        );

        $data = [
            'numroom' => $request->numroom,
            'typeroom' => $request->typeroom,
            'statusroom' => $request->statusroom,
            'watermeter' => $request->watermeter,
            'electrimeter' => $request->electrimeter
        ];
        DB::table('rooms')->insert($data);
        return redirect('admin/room');
    }


    /**
     * Display the specified resource.
     */
    public function show(Room $room)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Room $room)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $room = Room::findOrFail($id);
        $validatedData = $request->validate(
            [
                'numroom' => 'required',
                'typeroom' => 'required',
                'statusroom' => 'required',
                'watermeter' => 'required|integer',
                'electrimeter' => 'required|integer'
            ],
            [
                'numroom.required' => 'กรุณาป้อนหมายเลขห้อง',
                'typeroom.required' => 'กรุณาเลือกประเภทห้อง',
                'statusroom.required' => 'กรุณาเลือกสถานะห้อง',
                'watermeter.required' => 'กรุณากรอกหมายเลขมิเตอร์',
                'watermeter.integer' => 'กรุณากรอกเป็นตัวเลขเท่านั้น',
                'electrimeter.required' => 'กรุณากรอกหมายเลขมิเตอร์',
                'electrimeter.integer' => 'กรุณากรอกเป็นตัวเลขเท่านั้น',
            ]
        );

        $room->update($validatedData);
        return redirect('admin/room');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Room $room,$id)
    {
        DB::table('rooms')->where('id',$id)->delete();
        return redirect('admin/room');
    }
}
