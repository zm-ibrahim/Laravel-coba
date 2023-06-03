@extends('mahasiswas.layout')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left mt-2">
                <h2>JURUSAN TEKNOLOGI INFORMASI-POLITEKNIK NEGERI MALANG</h2>
            </div>
            <div class="float-right my-2">
                <a class="btn btn-success" href="{{ route('mahasiswas.create') }}"> Input Mahasiswa</a>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <div class="table-responsive">
        <table class="table table-bordered">
            <tr>
                <th>Nim</th>
                <th>Nama</th>
                <th>Foto</th>
                <th>Tanggal Lahir</th>
                <th>Kelas</th>
                <th>Jurusan</th>
                <th>No_Handphone</th>
                <th>Email</th>
                <th width="280px">Action</th>
            </tr>
            @foreach ($mahasiswas as $Mahasiswa)
                <tr>

                    <td>{{ $Mahasiswa->nim }}</td>
                    <td>{{ $Mahasiswa->nama }}</td>
                    <td>
                        <img src="{{ asset('storage/' . $Mahasiswa->foto) }}" width="100px" alt="Foto">
                    </td>
                    <td>{{ $Mahasiswa->tgl_lahir }}</td>
                    <td>{{ $Mahasiswa->kelas->nama_kelas }}</td>
                    <td>{{ $Mahasiswa->jurusan }}</td>
                    <td>{{ $Mahasiswa->no_handphone }}</td>
                    <td>{{ $Mahasiswa->email }}</td>
                    <td>
                        <form action="{{ route('mahasiswas.destroy', $Mahasiswa->nim) }}" method="POST">

                            <a class="btn btn-info" href="{{ route('mahasiswas.show', $Mahasiswa->nim) }}">Show</a>
                            <a class="btn btn-primary" href="{{ route('mahasiswas.edit', $Mahasiswa->nim) }}">Edit</a>
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                            <a class="btn btn-warning" href="{{ route('mahasiswas.score', $Mahasiswa->nim) }}">Nilai</a>
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
@endsection
