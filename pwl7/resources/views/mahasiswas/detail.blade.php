@extends('mahasiswas.layout')

@section('content')
    <div class="container mt-5">
        <div class="row justify-content-center align-items-center">
            <div class="card" style="width: 24rem;">
                <div class="card-header">
                    Detail Mahasiswa
                </div>
                <div class="card-body">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><b>Nim: </b>{{ $Mahasiswa->nim }}</li>
                        <li class="list-group-item"><b>Nama: </b>{{ $Mahasiswa->nama }}</li>
                        <li class="list-group-item">
                            <b>Foto: </b><br>
                            <img src="{{ asset('storage/' . $Mahasiswa->foto) }}" width="100px" alt="Foto">
                        </li>
                        <li class="list-group-item"><b>Tanggal Lahir: </b>{{ $Mahasiswa->tgl_lahir }}</li>
                        <li class="list-group-item"><b>Kelas: </b>{{ $Mahasiswa->kelas->nama_kelas }}</li>
                        <li class="list-group-item"><b>Jurusan: </b>{{ $Mahasiswa->jurusan }}</li>
                        <li class="list-group-item"><b>No_Handphone: </b>{{ $Mahasiswa->no_handphone }}</li>
                        <li class="list-group-item"><b>Email: </b>{{ $Mahasiswa->email }}</li>
                    </ul>
                </div>
                <a class="btn btn-success mt-3" href="{{ route('mahasiswas.index') }}">Kembali</a>
            </div>
        </div>
    </div>
@endsection
