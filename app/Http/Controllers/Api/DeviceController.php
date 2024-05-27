<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Device;
use App\Models\DeviceLog;
use Illuminate\Http\Request;

class DeviceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('pages.device', [
            'devices' => Device::all(),

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
        $request->validate( [
            'name' => 'required',
            'type' => 'required|in:Sensor,Actuator',
        ]);

        $device = Device::create([
            'name' => $request->input('name'),
            'type' => $request->input('type'),
        ]);

        if ($device) {
            // return redirect('/api/device')->with('success', 'Data saved');
            return response()->json([
                "message" => "device telah ditambahkan.",
                "device" => $device
            ], 201);
        } else {
            // return redirect('/api/device')->with('error', 'Failed to save data');
            return response()->json(['message' => 'Device tidak ditemukan.'], 404);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $device = Device::find($id);
        return view('pages.device', compact('device'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
{
        $device = Device::findOrFail($id);


        $request->validate( [
            'name' => 'required',
            'type' => 'required',
        ]);


        $device->update($request->all());

        return response()->json([
            'status' => 'success',
            'message' => 'Device telah di update.',
            'device' => $device
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( $id)
    {
        $devices = Device::findOrFail($id);

        if ($devices) {
            $devices->delete();
            return response()->json(['message' => 'Device telah dihapus.'], 200);
        } else {
            return response()->json(['message' => 'Device tidak ditemukan.'], 404);
        }
    }
}
