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
        $totalRoom = Room::all('statusroom')->count();
        $blankRoom = Room::where('statusroom','ห้องว่าง')->count();
        $unblankRoom = Room::where('statusroom','ห้องไม่ว่าง')->count();
        $bookRoom = Room::where('statusroom','ติดจอง')->count();

        return view('admin.room', compact('rooms','totalRoom','blankRoom','unblankRoom','bookRoom'));
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

        $data = Room::create([
            'numroom' => $request->numroom,
            'typeroom' => $request->typeroom,
            'statusroom' => $request->statusroom,
            'watermeter' => $request->watermeter,
            'electrimeter' => $request->electrimeter,
        ]);
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
        $data = [
            'numroom' => $request->numroom,
            'typeroom' => $request->typeroom,
            'statusroom' => $request->statusroom,
            'watermeter' => $request->watermeter,
            'electrimeter' => $request->electrimeter
        ];

        $room->update($data);
        return redirect('admin/room');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Room  $room, $id)
    {
        $delData = Room::findOrFail($id)->delete();
        return redirect('admin/room');
    }
}
