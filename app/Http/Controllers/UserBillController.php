<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\BillMeter;
use App\Models\Payment;
use Carbon\Carbon;
use Illuminate\Http\Request;

class UserBillController extends Controller
{
    public function index()
    {
        $bills = BillMeter::whereMonth('created_at', Carbon::now()->month)->get();
        return view('user.bill', compact('bills'));
    }


    public function update(Request $request, $id)
    {
        $checkID  = Payment::findOrFail($id);
        if($request->input('request') == "แบบชำระด้วยเงินสด"){
            $data = [
                'type_payment' => $request->typePayment,
            ];
        } else {
            $file = $request->file('Image');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('uploads'), $filename);
            $data = [
                'type_payment' => $request->typePayment,
                'proof_payment' => $filename,
            ];
        }
        $checkID->update($data);
        return redirect('user/bill');
    }
}
