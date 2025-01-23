<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\ManagerRenter;
use Illuminate\Http\Request;

class UserDataPersonalController extends Controller
{
    public function index()
    {
        $Datas = ManagerRenter::all()->first();

        return view('user.datapersonal', compact('Datas'));
    }
}
