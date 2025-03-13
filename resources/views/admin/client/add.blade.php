<div class="row">
    <div class="col-md-6">
        <div class="card">
            <div class="card-body">
                @if (isset($client))
                    <form action="{{ url('admin/client/' . $client->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                    @else
                        <form action="/admin/client" method="POST">
                @endif



                @csrf
                <div class="form-group">
                    <label for="">Nama Klien</label>
                    <input type="text" name="name" class="form-control @error('name') is-invalid @enderror"
                        placeholder="name" value="{{ isset($client) ? $client->name : old('name') }}">
                    @error('name')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
               
                <button type="submit" class="btn btn-primary">Simpan</button>
                </form>

            </div>
        </div>
    </div>
</div>
