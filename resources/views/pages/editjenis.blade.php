
<div class="modal fade" id="editModal{{ Route('jenis.show',[$jeniss->id])}}" tabindex="-1" aria-labelledby="editModalLabel{{ Route('jenis.show',[$jeniss->id])}}" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editModalLabel{{ Route('jenis.show',[$jeniss->id])}}">Edit Type</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ route('jenis.update', $jeniss->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="modal-body">
                    <div class="form-group">
                        <label>Jenis Sensor</label>
                        <input type="text" name="jenis" class="form-control" value="{{ $jeniss->jenis }}">
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
