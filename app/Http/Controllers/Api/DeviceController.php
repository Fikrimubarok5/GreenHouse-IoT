<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Device;
use App\Models\Jenis;
use PhpMqtt\Client\Facades\MQTT;
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
            'jeniss' => Jenis::all(),
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
            'min_value' => 'required_if:type,sensor|nullable|integer',
            'max_value' => 'required_if:type,sensor|nullable|integer',
            'type' => 'required|in:Sensor,Actuator',
            'jenis' => 'required',
        ]);

        // $topic = 'GreenHouse/'.$request->jenis;

        // $data = [
        //     'name' => $request->input('name'),
        //     'min_value' => $request->type === 'sensor' ? $request->input('min_value') : null,
        //     'max_value' => $request->type === 'sensor' ? $request->input('max_value') : null,
        //     'type' => $request->input('type'),
        //     'jenis' => $request->input('jenis'),
        // ];

        // $mqtt = MQTT::connection();
        // $mqtt->publish($topic, json_encode($data) );

        $device = Device::create($request->all());

        if(Jenis::where('id', $device->jenis_id)->exists()){
            $jenis = Jenis::find($request->jenis_id);
            $jenis->jenis = $request->jenis;
            $jenis->save();
        }


        if ($device) {
            return redirect('/api/device')->with('success', 'Data saved');
            // return response()->json([
            //     "message" => "device telah ditambahkan.",
            //     "device" => $device
            // ], 201);
        } else {
            return redirect('/api/device')->with('error', 'Failed to save data');
            // return response()->json(['message' => 'Device tidak ditemukan.'], 404);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $device = Device::findOrFail($id);
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
            'min_value' => 'required_if:type,sensor|nullable|integer',
            'max_value' => 'required_if:type,sensor|nullable|integer',
            'type' => 'required',
            'jenis' => 'required',
        ]);


        $device->update($request->all());

<<<<<<< Updated upstream
<<<<<<< Updated upstream
<<<<<<< Updated upstream
<<<<<<< Updated upstream
        // return response()->json([
        //     'status' => 'success',
        //     'message' => 'Device telah di update.',
        //     'device' => $device
        // ]);
        if ($request->wantsJson()) {
            return response()->json([
                'status' => 'success',
                'message' => 'Device telah di update.',
                'device' => $device
            ]);
        } else {
            if ($device) {
                return redirect('/api/device')->with('success', 'Data berhasil diubah');
            } else {
                return redirect('/api/device')->with('error', 'Data gagal diubah');
            }
        }
=======
=======
>>>>>>> Stashed changes
=======
>>>>>>> Stashed changes
=======
>>>>>>> Stashed changes
        return response()->json([
            'status' => 'success',
            'message' => 'Device telah di update.',
            'device' => $device
        ]);
        // if ($device) {
        //     return redirect('/api/device')->with('success', 'Data berhasil diubah');
        //     // return response()->json([
        //     //     "message" => "device telah ditambahkan.",
        //     //     "device" => $device
        //     // ], 201);
        // } else {
        //     return redirect('/api/device')->with('error', 'Data gagal diubah');
        //     // return response()->json(['message' => 'Device tidak ditemukan.'], 404);
        // }
<<<<<<< Updated upstream
<<<<<<< Updated upstream
<<<<<<< Updated upstream
>>>>>>> Stashed changes
=======
>>>>>>> Stashed changes
=======
>>>>>>> Stashed changes
=======
>>>>>>> Stashed changes
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( $id)
    {
        $devices = Device::findOrFail($id);

        if ($devices) {
            $devices->delete();
            // return response()->json(['message' => 'Device telah dihapus.'], 200);
            return redirect('/api/device')->with('success', 'Data berhasil dihapus');
        } else {
            // return response()->json(['message' => 'Device tidak ditemukan.'], 404);
            return redirect('/api/device')->with('error', 'Data gagal dihapus');
        }
    }
}
