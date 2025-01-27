<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Report;
use Illuminate\Http\Request;

class UserReportController extends Controller
{
    public function index()
    {

        $reports = Report::all();
        return view('user.report', compact('reports'));
    }


    public function store(Request $request)
    {
        $file = $request->file('ImageReport');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('uploads'), $filename);

        $data = Report::create([
            'Numroom' => '101',
            'TitleReport' => $request->TitleReport,
            'StatusReport' => 'รอรับเรื่องเเจ้งซ่อม',
            'DetailReport' => $request->DetailReport,
            'ImageReport' => $filename,
        ]);

        return redirect('user/report');
    }

}

