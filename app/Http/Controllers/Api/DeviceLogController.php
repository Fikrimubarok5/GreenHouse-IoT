<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\DeviceLog;
use App\Models\Device;
use Illuminate\Http\Request;

class DeviceLogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('pages.devicelog', [
            'title' => 'devicelog',
            'devicelog' => DeviceLog::all()
        ]);
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
        $DeviceLog = new DeviceLog();
        $DeviceLog->device_id = $request->device_id;
        $DeviceLog->value = $request->value;
        $DeviceLog->save();

        if(Device::where('id', $DeviceLog->device_id)->exists()){
            $device = Device::find($request->device_id);
            $device->value = $request->value;
            $device->save();
        }

        return response()->json([
            "message" => "data dari device telah ditambahkan.",
            "device" => $device
        ], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(DeviceLog $deviceLog, $id)
    {
        $device = Device::find($id);
        if(!$device) {
            abort(404);
        }

        $data = DeviceLog::where('device_id',$id)->orderBy('created_at', 'desc')->get();

        return view('pages.devicelog', [
            'title' => 'DeviceLog',
            'device' => $device,
            'data' => $data
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(DeviceLog $deviceLog)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, DeviceLog $deviceLog)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(DeviceLog $deviceLog)
    {
        //
    }
}
