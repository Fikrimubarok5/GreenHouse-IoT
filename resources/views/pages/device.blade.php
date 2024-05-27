<x-app-layout>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class="row">
                        <div class="row justify-content-end">
                            <div class="col">
                                <h1>Devices</h1>
                            </div>
                            <div class="col-auto">
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                    Tambah Data
                                </button>
                            </div>
                        </div>
                        @php
                        $i = 1;
                        @endphp
                        <table class="table table-hover">
                            <thead>
                              <tr>
                                <th scope="col">No</th>
                                <th scope="col">id</th>
                                <th scope="col">Nama Sensor</th>
                                <th scope="col">Jenis</th>
                                <th scope="col">Data</th>
                                <th scope="col">Aksi</th>
                              </tr>
                            </thead>
                            <tbody class="table-group-divider">
                            @foreach($devices as $device)
                              <tr>
                                <th scope="row">{{ $i }}</th>
                                <th scope="row">{{ $device->id }}</th>
                                <td>
                                    <a href="{{ Route('devicelog.show',[$device->id])}}">{{ $device->name }}</a>
                                </td>
                                <td>{{ $device->type }}</td>
                                <td>{{ $device["value"] }}</td>
                                <td class="d-flex align-items-center ">
                                    <a class="flex-shrink-0 btn btn-warning me-2" href="#" data-bs-toggle="modal" data-bs-target="#editModal{{ Route('device.show',[$device->id])}}">Edit</a>
                                    <form action="{{ route('device.destroy',[$device->id]) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger w-100">Delete</button>
                                    </form>
                                </td>
                              </tr>
                              @php
                              $i++;
                              @endphp
                            @endforeach
                            </tbody>
                          </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Tambah Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Sensor</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('device.store') }}" method="POST">
                        {{ csrf_field() }}
                        <div class="modal-body">
                            <div class="form-group">
                              <label>Nama Sensor</label>
                              <input type="text" name="name" class="form-control" placeholder="Masukkan Nama Sensor">
                            </div>

                            <div class="form-group">
                                <label>Type Sensor</label>
                                <br>
                                <select class="form-control" name="type" id="type">
                                    <option value="Sensor">Sensor</option>
                                    <option value="Actuator">Actuator</option>
                                </select>
                            </div>

                            {{-- <div class="form-group">
                                <label>Value</label>
                                <input type="text" name="value" class="form-control" placeholder="Masukkan nilai Value">
                            </div> --}}
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Edit Modal -->
    <div class="modal fade" id="editModal{{ Route('device.show',[$device->id])}}" tabindex="-1" aria-labelledby="editModalLabel{{ Route('device.show',[$device->id])}}" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editModalLabel">Edit Device</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="/api/devices/{{ $device->id }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="modal-body">

                        <div class="form-group">
                            <label>Nama Sensor</label>
                            <input type="text" name="name" class="form-control" value="{{ $device->name }}">
                        </div>
                        <div class="form-group">
                            <label>Type Sensor</label>
                            <ul class="mb-3 list-group">
                                @foreach ($devices as $device)
                                    <li class="list-group-item">
                                        <input type="radio" name="type" value="{{ $device->type }}" id="{{ $device->type }}">
                                        <label for="{{ $device->type }}">{{ $device->type }}</label>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
