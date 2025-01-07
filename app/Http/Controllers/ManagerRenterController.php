<?php

namespace App\Http\Controllers;

use App\Models\ManagerRenter;
use App\Http\Controllers\Controller;
use App\Models\Room;
use Illuminate\Http\Request;

class ManagerRenterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $Datas = ManagerRenter::all();
        $DataRenters = ManagerRenter::all()->pluck('room_id');
        $numrooms = Room::where('statusroom', 'ห้องไม่ว่าง')->whereNotIn("id", $DataRenters)->get();

        return view('admin.managerenters', compact('Datas', 'numrooms', 'DataRenters'));
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
    public function store(Request $request )
    {
        $chackNumRoom = $request->numroom;
        $chackID = Room::where('numroom', $chackNumRoom)->get()->first();

            $fileID = $request->file('ImageID');
            $filenameID = time() . '_' . $fileID->getClientOriginalName();
            $fileID->move(public_path('uploads'), $filenameID);

            $fileAddress = $request->file('ImageAddress');
            $filenameAddress = time() . '_' . $fileAddress->getClientOriginalName();
            $fileAddress->move(public_path('uploads'), $filenameAddress);


        $data = ManagerRenter::create([
            'room_id' => $chackID->id,
            'FullName' => $request->fullname,
            'LastName' => $request->lastname,
            'NickName' => $request->nickname,
            'Age' => $request->age,
            'BirthDay' => $request->birthday,
            'Tel' => $request->tel,
            'NumberRoom' => $request->numroom,
            'TypeRoom' => $request->typeroom,
            'HomeNumber' => $request->homenumber,
            'Moo' => $request->moo,
            'Soi' => $request->soi,
            'Tumbon' => $request->tambon,
            'Ampher' => $request->ampher,
            'Province' => $request->province,
            'Post' => $request->post,
            'BeforeWater' => $request->BFWater,
            'BeforeEV' => $request->BFEV,
            'ImageID' => $filenameID,
            'ImageAddress' => $filenameAddress,
        ]);
        return redirect('admin/managerenters');
    }

    /**
     * Display the specified resource.
     */
    public function show(ManagerRenter $managerRenter)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ManagerRenter $managerRenter)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ManagerRenter $managerRenter)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ManagerRenter $managerRenter)
    {
        //
    }
}
