<x-app-layout>
    {{-- <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Dashboard') }}
        </h2>
    </x-slot> --}}

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class="row">
                        <div class="col">
                            <h1>Devices</h1>
                        </div>
                        <div class="row">
                            <div class="col-xl-6 col-sm-12">
                                <div class="mb-4 shadow card-sm" style="height: 144px;">
                                    <div class="py-3 card-header">
                                        <h6 class="m-0 font-weight-bold text-primary">Sensor Hujan</h6>
                                    </div>
                                    <div class="card-body">
                                        <div class="row align-items-center">
                                            <div class="col-xl-2 col-sm-1">
                                                <div id="rainIndicator">
                                                    <b>0</b>
                                                </div>
                                            </div>
                                            <div class="rain col-xl-8 col-sm-10">
                                                <div class="text-center">
                                                    <b>Hujan</b>
                                                </div>
                                                <div class="mb-2 progress">
                                                    <div id="rainBar" class="progress-bar bg-success" role="progressbar" style="width: 5%"
                                                        aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                            <div class="col-xl-2 col-sm-1">
                                                <i class="fas fa-cloud-showers-heavy"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6 col-sm-12">
                                <div class="mb-4 shadow card-sm" style="height: 144px;">
                                    <div class="py-3 card-header">
                                        <h6 class="m-0 font-weight-bold text-primary">Sensor Cahaya</h6>
                                    </div>
                                    <div class="card-body ">
                                        <div class="row align-items-center">
                                            <div id="lightIndicator" class="col-xl-2 col-sm-1">
                                                <b>0</b>
                                            </div>
                                            <div class="light col-xl-8 col-sm-10">
                                                <div class="mb-2 progress">
                                                    <div id="lightBar" class="progress-bar bg-success" role="progressbar" style="width: 0%"
                                                        aria-valuenow="22" aria-valuemin="0" aria-valuemax="100">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-2 col-sm-1">
                                                <i class="far fa-sun"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
