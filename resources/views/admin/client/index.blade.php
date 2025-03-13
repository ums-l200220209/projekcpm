<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <a href="/admin/client/create" class="btn btn-primary mb-3"><i class="fas fa-plus"></i> Tambah</a>
                <table class="table">
                    <tr>
                        <td>No</td>
                        <td>Name</td>
                        <td></td>
                        <td>Action</td>
                    </tr>
                    @foreach ($client as $item)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $item->name }}</td>
                            <td>
                                <i class="fa {{ $item->icon }}"></i>

                            </td>
                            <td>
                                <div class="d-flex">

                                    <a href="/admin/client/{{ $item->id }}/edit" class="btn btn-primary mx-2"><i
                                            class="fas fa-edit"></i>Edit</a>
                                    <form action="/admin/client/{{ $item->id }}" method='POST'>
                                        @method('delete')
                                        @csrf
                                        <button type="submit" class="btn btn-danger"> <i class="fas fa-trash"></i>
                                            Hapus </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
</div>
