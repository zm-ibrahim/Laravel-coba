@extends('adminlte::page')

@section('plugins.Datatables', true)

@section('title', 'Your Classmates')

@section('content_header')
    <h1>Your Classmate</h1>
@endsection

@section('content')
    <table id="example2" class="table table-bordered table-hover">
        <thead>
            <tr>
                <th>Student ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>College Exp</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($classmates as $c)
                <tr>
                    <td>{{ $c->student_id }}</td>
                    <td>{{ $c->name }}</td>
                    <td>{{ $c->email }}</td>
                    <td>
                        <button type="button" class="btn btn-default modal-btn" data-exp="{{ $c->college_exp }}" data-toggle="modal" data-target="#college-exp">
                            College Exp
                        </button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    {{-- Modal --}}
    <div class="modal fade" id="college-exp">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Friend's College Experience</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p></p>
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
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

        $('.modal-btn').click(function() {
            const college_exp = $(this).data('exp')
            console.log(college_exp)
            $('.modal-body p').text(college_exp)
        })
    </script>
@endsection
