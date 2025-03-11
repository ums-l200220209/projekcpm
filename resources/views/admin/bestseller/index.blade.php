<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <a href="/admin/posts/bestseller/create" class="btn btn-primary mb-3"><i class="fas fa-plus"></i> Tambah</a>
                <table class="table">
                    <tr>
                        <td>No</td>
                        <td>Gambar</td>
                        <td>Title</td>
                        <td>Action</td>
                    </tr>
                    @foreach ($bestseller as $item)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td><img src="/{{ $item->cover }}" width="100px"></td>
                            <td>{{ $item->title }}</td>
                            <td>
                                <div class="d-flex">

                                    <a href="/admin/posts/bestseller/{{ $item->id }}/edit" class="btn btn-primary mx-2"><i
                                            class="fas fa-edit"></i>Edit</a>
                                    <form action="/admin/posts/bestseller/{{ $item->id }}" method='POST'>
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
