@extends('layout.app')

@section('conten')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Data sma</div>

                    <div class="card-body">
                        <a href="{{ route('sma.create') }}" class="btn btn-primary mb-3">Tambah Data</a>

                        <table class="table">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>Kelas</th>
                                    <th>NIS</th>
                                    <th>Tanggal Lahir</th>
                                    <th>Alamat</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($sma as $w)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $w->nama }}</td>
                                        <td>{{ $w->kelas }}</td>
                                        <td>{{ $w->nis }}</td>
                                        <td>{{ $w->tanggal_lahir }}</td>
                                        <td>{{ $w->alamat }}</td>
                                        <td>
                                            <a href="{{ route('sma.edit', $w->id) }}" class="btn btn-warning">Edit</a>
                                            <form action="{{ route('sma.destroy', $w->id) }}" method="post" class="d-inline">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger" onclick="return confirm('Yakin ingin menghapus data ini?')">Hapus</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
