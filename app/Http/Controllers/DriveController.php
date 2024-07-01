<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreDriveRequest;
use App\Http\Requests\UpdateDriveRequest;
use App\Models\Drive;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;


class DriveController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View
     */
    public function index()
    {
        return view('drive.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Application|Factory|View
     */
    public function create()
    {
        return view('drive.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StoreDriveRequest $request
     * @return void
     */
    public function store(StoreDriveRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param Drive $drive
     * @return void
     */
    public function show(Drive $drive)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Drive $drive
     * @return void
     */
    public function edit(Drive $drive)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdateDriveRequest $request
     * @param Drive $drive
     * @return void
     */
    public function update(UpdateDriveRequest $request, Drive $drive)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Drive $drive
     * @return void
     */
    public function destroy(Drive $drive)
    {
        //
    }
}
