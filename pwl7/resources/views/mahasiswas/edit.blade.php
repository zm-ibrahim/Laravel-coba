@extends('mahasiswas.layout')

@section('content')

    <div class="container mt-5">

        <div class="row justify-content-center align-items-center">
            <div class="card" style="width: 24rem;">
                <div class="card-header">
                    Edit Mahasiswa
                </div>
                <div class="card-body">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <strong>Whoops!</strong> There were some problems with your input.<br><br>
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <form method="post" action="{{ route('mahasiswas.update', $Mahasiswa->nim) }}" id="myForm"
                        enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="Nim">Nim</label>
                            <input type="text" name="Nim" class="form-control" id="Nim"
                                value="{{ $Mahasiswa->nim }}" aria-describedby="Nim">
                        </div>
                        <div class="form-group">
                            <label for="Nama">Nama</label>
                            <input type="text" name="Nama" class="form-control" id="Nama"
                                value="{{ $Mahasiswa->nama }}" aria-describedby="Nama">
                        </div>
                        <div class="form-group">
                            <label for="tgl_lahir">Tanggal Lahir</label>
                            <input type="date" name="tgl_lahir" class="form-control" id="tgl_lahir"
                                value="{{ $Mahasiswa->tgl_lahir }}" aria-describedby="tgl_lahir">
                        </div>
                        <div class="form-group">
                            <label for="Kelas">Kelas</label>
                            <select name="kelas_id" class="form-control" id="">
                                @foreach ($kelas as $kls)
                                    <option value="{{ $kls->id }}"
                                        {{ $Mahasiswa->kelas_id == $kls->id ? 'selected' : '' }}>{{ $kls->nama_kelas }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="Jurusan">Jurusan</label>
                            <input type="Jurusan" name="Jurusan" class="form-control" id="Jurusan"
                                value="{{ $Mahasiswa->jurusan }}" aria-describedby="Jurusan">
                        </div>
                        <div class="form-group">
                            <label for="No_Handphone">No_Handphone</label>
                            <input type="No_Handphone" name="No_Handphone" class="form-control" id="No_Handphone"
                                value="{{ $Mahasiswa->no_handphone }}" aria-describedby="No_Handphone">
                        </div>
                        <div class="form-group">
                            <label for="Email">Email</label>
                            <input type="Email" name="Email" class="form-control" id="Email"
                                value="{{ $Mahasiswa->email }}" aria-describedby="Email">
                        </div>
                        <div class="mb-3">
                            <label for="Foto">Foto</label>
                            <input type="file" name="foto" class="form-control" id="foto"
                                value="{{ $Mahasiswa->foto }}" ariadescribedby="foto" accept="image/*">
                            <div class="mt-3">
                                <img width="100px" src="{{ asset('storage/' . $Mahasiswa->foto) }}">
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
