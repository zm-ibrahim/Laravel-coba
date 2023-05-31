@extends('mahasiswas.layout')

@section('style')
    <style>
        span {
            font-weight: bold;
        }
    </style>
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-12 my-3">
                <div class="mt-2 text-center">
                    <h2>Kartu Hasil Studi (KHS)</h2>
                </div>
                <div>
                    <h6><span>Nama: </span>{{ $mahasiswa->nama }}</h6>
                    <h6><span>NIM: </span>{{ $mahasiswa->nim }}</h6>
                    <h6><span>Kelas: </span>{{ $mahasiswa->kelas->nama_kelas }}</h6>
                </div>
            </div>
        </div>

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Mata Kuliah</th>
                    <th width="10%">SKS</th>
                    <th width="10%">Semester</th>
                    <th width="10%">Nilai</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($matkul as $m)
                    <tr>
                        <td>{{ $m->nama_matkul }}</td>
                        <td>{{ $m->sks }}</td>
                        <td>{{ $m->semester }}</td>
                        <td>
                            @if ($m->pivot->nilai >= 90 && $m->pivot->nilai <= 100)
                                A
                            @elseif ($m->pivot->nilai >= 80 && $m->pivot->nilai <= 89)
                                B
                            @elseif ($m->pivot->nilai >= 70 && $m->pivot->nilai <= 79)
                                C
                            @elseif ($m->pivot->nilai >= 60 && $m->pivot->nilai <= 69)
                                D
                            @else
                                E
                            @endif
                        </td>
                    </tr>
                @endforeach
            </tbody>

        </table>
    </div>
@endsection
