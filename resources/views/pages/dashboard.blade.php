@extends('layouts.app')
@section('content')
    <div class="body-wrapper-inner">
        <div class="container-fluid">
            <!-- Mulai Row -->
            @foreach ($devices->chunk(2) as $deviceChunk)
                <div class="row">
                    @foreach ($deviceChunk as $device)
                        <div class="col-md-6 d-flex align-items-stretch">
                            <div class="card w-100">
                                <div class="card-body">
                                    <div class="d-sm-flex d-block align-items-center justify-content-between mb-9">
                                        <div class="mb-3 mb-sm-0">
                                            <h5 class="card-title fw-semibold">{{ $device->name }}</h5>
                                        </div>
                                    </div>
                                    <div id="chart_{{ $device->id }}" style="height: 300px;"></div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            @endforeach
            <!-- Akhir Row -->
        </div>
    </div>


    {{-- <script src="https://code.highcharts.com/highcharts.js"></script> --}}
    <script src="{{ asset("assets/js/highcharts.js") }}"></script>
    {{-- <script src="https://code.highcharts.com/10/highcharts.js"></script> --}}
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            @foreach ($devices as $device)
                var data_{{ $device->id }} = @json($dataForCharts[$device->id] ?? []);

                if (!data_{{ $device->id }}.length) {
                    console.log("Data untuk perangkat {{ $device->id }} kosong atau tidak tersedia.");
                }

                data_{{ $device->id }} = data_{{ $device->id }}.map(log => {
                    console.log(log);
                    return [
                         new Date(log.x).getTime(),
                         log.y
                    ];
                });

                Highcharts.chart('chart_{{ $device->id }}', {
                    title: {
                        text: 'Grafik {{ $device->name }}'
                    },
                    xAxis: {
                        type: 'datetime',
                        title: {
                            text: 'Waktu'
                        }
                    },
                    yAxis: {
                        min: {{ $device->min_value }},
                        max: {{ $device->max_value }},
                        tickInterval: 10,
                        title: {
                            text: '{{ $device->name }}'
                        },
                        accessibility: {
                            rangeDescription: 'Dari: 0 Sampai 100000.'
                        }
                    },
                    tooltip: {
                        headerFormat: '<b>{series.name}</b><br />',
                        pointFormat: 'Waktu = {point.x:%e %b %Y, %H:%M:%S}, Nilai = {point.y}'
                    },
                    series: [{
                        name: '{{ $device->name }}',
                        data: data_{{ $device->id }}
                    }]
                });
            @endforeach
        });
    </script>

    <div class="px-6 py-6 text-center">
        <p class="mb-0 fs-4">Developed by <a href="https://www.instagram.com/fikrimubarok05/" target="_blank"
                class="pe-1 text-primary text-decoration-underline">@fikrimubarok05</a> 2024</p>
    </div>
@endsection
