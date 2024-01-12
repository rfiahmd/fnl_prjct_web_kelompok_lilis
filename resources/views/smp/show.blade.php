



@extends('layout.app')

@section('conten')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">{{ $sd->nama }}</div>

                    <div class="card-body">
                        <table class="table">
                            <tbody>
                                <tr>
                                    <td>Kelas</td>
                                    <td>{{ $sd->kelas }}</td>
                                </tr>
                                <tr>
                                    <td>NIS</td>
                                    <td>{{ $sd->nis }}</td>
                                </tr>
                                <tr>
                                    <td>Tanggal Lahir</td>
                                    <td>{{ $sd->tanggal_lahir }}</td>
                                </tr>
                                <tr>
                                    <td>Alamat</td>
                                    <td>{{ $sd->alamat }}</td>
                                </tr>
                            </tbody>
                        </table>

                        <a href="{{ route('sd.index') }}" class="btn btn-secondary">Kembali</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
