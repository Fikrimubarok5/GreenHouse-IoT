<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Dashboard;
use App\Models\Device;
use App\Models\DeviceLog;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
{
    $devices = Device::where('type', 'Sensor')->get();
    $dataForCharts = [];

    foreach ($devices as $device) {
        $logs = DeviceLog::where('device_id', $device->id)->get();
        $data = [];

        foreach ($logs as $log) {
            $data[] = [
                'x' => strtotime($log->created_at) * 1000, // convert created_at to milliseconds
                'y' => $log->value,
            ];
        }
        // dd($data);
        $dataForCharts[$device->id] = $data;
    }

    return view('pages.dashboard', [
        'devices' => $devices,
        'dataForCharts' => $dataForCharts,
    ]);
}
}
