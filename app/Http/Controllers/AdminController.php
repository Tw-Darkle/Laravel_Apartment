<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    function outsert() {
        $room=DB::table('rooms')->get();
        return view('room',compact('rooms')); 

    }

    function insert( Request $request){ 
        $request->validate([
            'numroom'=>'required',
            'typeroom'=>'required|integer|max:2',
            'statusroom'=>'required|integer|max:3',
            'watermeter'=>'required',
            'electrimeter'=>'required'
        ]);       
        $data = [
            'numroom'=>$request->numroom,
            'typeroom'=>$request->typeroom,
            'statusroom'=>$request->statusroom,
            'watermeter'=>$request->watermeter,
            'electrimeter'=>$request->electrimeter
        ];
        DB::table('rooms')->insert($data);
        return redirect('/room');
    }
}
