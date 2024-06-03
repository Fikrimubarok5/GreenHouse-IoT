
<div class="modal fade" id="editModal{{ Route('device.show',[$device->id])}}" tabindex="-1" aria-labelledby="editModalLabel{{ Route('device.show',[$device->id])}}" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editModalLabel{{ Route('device.show',[$device->id])}}">Edit Device</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ route('device.update', $device->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="modal-body">
                    <div class="form-group">
                        <label>Nama Sensor</label>
                        <input type="text" name="name" class="form-control" value="{{ $device->name }}">
                    </div>

                    <div class="form-group">
                        <label>MIN Value</label>
                        <input type="text" name="min_value" class="form-control" value="{{ $device->min_value }}">
                    </div>

                    <div class="form-group">
                        <label>MAX Value</label>
                        <input type="text" name="max_value" class="form-control" value="{{ $device->max_value }}">
                    </div>

                    <div class="form-group">
                        <label>Type Sensor</label>
                        <br>
                        <select class="form-control" name="type" id="type">
                            <option value="Sensor" {{ $device->type == 'Sensor' ? 'selected' : '' }}>Sensor</option>
                            <option value="Actuator" {{ $device->type == 'Actuator' ? 'selected' : '' }}>Actuator</option>
                        </select>
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
