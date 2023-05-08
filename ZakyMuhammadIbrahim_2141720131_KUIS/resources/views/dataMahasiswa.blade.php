@extends('layout.main')

@section('title', 'Data Mahasiswa')

@section('judul')
    Data Mahasiswa
@endsection

@section('isi')
    <div class="row">
        <div class="col-12">

            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Data Mahasiswa</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Nim</th>
                                <th>Nama</th>
                                <th>Kelas</th>
                                <th>Email</th>
                                <th>Experience</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($dataMahasiswa as $data)
                                <tr>
                                    <td>{{ $data->nim }}</td>
                                    <td>{{ $data->nama }}</td>
                                    <td>{{ $data->kelas }}</td>
                                    <td>{{ $data->email }}</td>
                                    <td>{{ $data->experience }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>Nim</th>
                                <th>Nama</th>
                                <th>Kelas</th>
                                <th>Email</th>
                                <th>Experience</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
        <!-- /.col -->
    </div>
@endsection
