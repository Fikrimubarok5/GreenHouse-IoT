<x-app-layout>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class="row">
                        <h1>{{ $device["name"] }}</h1>
                        @php
                        $i = 1;
                        @endphp
                        <table class="table table-hover">
                            <thead>
                              <tr>
                                <th scope="col">No</th>
                                <th scope="col">Waktu</th>
                                <th scope="col">Data</th>
                              </tr>
                            </thead>
                            <tbody class="table-group-divider">
                            @foreach($data as $datas)
                              <tr>
                                <th scope="row">{{ $i }}</th>
                                <td>{{ $datas["created_at"] }}</td>
                                <td>{{ $datas["value"] }}</td>
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
</x-app-layout>
