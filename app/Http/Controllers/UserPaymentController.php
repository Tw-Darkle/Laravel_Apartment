<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\BillMeter;
use Illuminate\Http\Request;

class UserPaymentController extends Controller
{
    public function index()
    {
        $Datas = BillMeter::all()->where('room_id' , '1');
        return view('user.payment', compact('Datas'));
    }
}
