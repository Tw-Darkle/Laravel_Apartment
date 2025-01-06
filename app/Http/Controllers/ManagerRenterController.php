<?php

namespace App\Http\Controllers;

use App\Models\ManagerRenter;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ManagerRenterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.managerenters');
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
        //
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
