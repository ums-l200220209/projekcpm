<div class="row">
    <div class="col-md-6">
        <div class="card">
            <div class="card-body">
                @if (isset($service))
                    <form action="{{ url('admin/service/' . $service->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                    @else
                        <form action="/admin/service" method="POST">
                @endif



                @csrf
                <div class="form-group">
                    <label for="">Title</label>
                    <input type="text" name="title" class="form-control @error('title') is-invalid @enderror"
                        placeholder="Title" value="{{ isset($service) ? $service->title : old('title') }}">
                    @error('title')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="">Icon</label>
                    <input type="text" name="icon" class="form-control @error('icon') is-invalid @enderror"
                        placeholder="Icon" value="{{ isset($service) ? $service->icon : old('icon') }}">
                    <a href="https://fontawesome.com/search" target="blank">klik untuk mencari icon</a>
                    @error('icon')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="">Deskripsi</label>
                    <textarea name="desc" class="form-control" id="" cols="30" rows="10">{{ isset($service) ? $service->desc : '' }}</textarea>
                    @error('desc')
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
