@extends('adminlte::page')

@section('plugins.Datatables', true)

@section('title', 'Your Classmates')

@section('content_header')
    <h1>List of Subjects you will Learn this Semester</h1>
@endsection

@section('content')
    <table id="example2" class="table table-bordered table-hover">
        <thead>
            <tr>
                <th>Subject</th>
                <th>Lecturer</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($subjects as $s)
                <tr>
                    <td>{{ $s->name }}</td>
                    <td>{{ $s->lecturer[0]->name }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection

@section('footer')
    <p class="text-center">
        {{ $user->student_id }} | <a class="text-body" href="https://github.com/argyaWicaksana">{{ $user->name }}</a>
    </p>
@endsection

@section('js')
    <script>
        $(function() {
            $('#example2').DataTable({
                "paging": true,
                "lengthChange": false,
                "searching": false,
                "ordering": true,
                "info": true,
                "autoWidth": false,
                "responsive": true,
            })
        })
    </script>
@endsection
