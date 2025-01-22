<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Room;
use Illuminate\Http\Request;

class UserRoomController extends Controller
{
    public function index()
    {
        $rooms = Room::all();
        $totalRoom = Room::all('statusroom')->count();
        $blankRoom = Room::where('statusroom','ห้องว่าง')->count();
        $unblankRoom = Room::where('statusroom','ห้องไม่ว่าง')->count();
        $bookRoom = Room::where('statusroom','ติดจอง')->count();

        return view('user.room', compact('rooms','totalRoom','blankRoom','unblankRoom','bookRoom'));
    }
}
