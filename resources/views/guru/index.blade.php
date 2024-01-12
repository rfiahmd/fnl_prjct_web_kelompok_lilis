@extends('layout.app')

@section('conten')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Data GURU</div>

                    <div class="card-body">
                        <a href="{{ route('guru.create') }}" class="btn btn-primary mb-3">Tambah Data</a>

                        <table class="table">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>NUPTK</th>
                                    <th>Alamat</th>
                                    <th>Email</th>
                                    <th>Nomor</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($guru as $w)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $w->nama }}</td>
                                        <td>{{ $w->nuptk }}</td>
                                        <td>{{ $w->alamat }}</td>
                                        <td>{{ $w->email}}</td>
                                        <td>{{ $w->nomor_hp }}</td>
                                        <td>
                                            <a href="{{ route('guru.edit', $w->id) }}" class="btn btn-warning">Edit</a>
                                            <form action="{{ route('guru.destroy', $w->id) }}" method="post" class="d-inline">
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
