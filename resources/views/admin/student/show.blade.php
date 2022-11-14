@extends('layouts.app')
@section('content')


    <style>
        body {
            overflow-x: hidden;
        }
    </style>


    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Students</h1>
                </div>
                <div class="col-sm-6">
                    <a class="btn btn-primary float-right"
                       href="{{route('student/create')}}">
                        Add New
                    </a>
                </div>
            </div>
        </div>
    </section>

    <div class="content px-3">


        @include('flesh_massage')


    </div>


<div class="row">
    <style>
        .toggle-off.btn {
            padding-left: 0.5rem;
        }
    </style>

    <div class="col-md-12">
        <!-- /.card -->
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th>Id</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>State</th>
                            <th>City</th>
                            <th>Pincode</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($student as $data)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$data->name}}</td>
                                <td>{{$data->email}}</td>
                                <td>{{$data->state}}</td>
                                <td>{{$data->city}}</td>
                                <td>{{$data->pincode}}</td>
{{--                                <td>{{$data->status}}</td>--}}

                                <td>
                                    <input data-id="{{$data->id}}" class="toggle-class statuss" type="checkbox"onclick="on();"
                                           data-onstyle="success" data-offstyle="danger" data-toggle="toggle"
                                           data-on="Active" data-off="InActive" {{ $data->status=='Active' ? 'checked' : '' }}>
                                </td>

                                <td>

                                    <div class='btn-group'>
                                        <a href="{{ route('student/edit', [$data->id]) }}" >
                                            <i class="far fa-edit btn btn-info btn-xs"></i>
                                        </a>
                                        <a href="{{ route('student/destroy', [$data->id]) }}" onclick="return confirm('Are you sure?')">
                                            <i class="far fa-trash-alt btn btn-danger btn-xs"></i>
                                        </a>
                                    </div>
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


    <script>

        $(function () {
            $("#example1").DataTable({
                "responsive": true, "lengthChange": true, "autoWidth": true,
                "responsive": true,
                "scrollX": false,
                // "buttons": ["copy", "csv", "excel", "pdf",]
            }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
        });


    </script>


    <script>
        $(function() {
            $('.toggle-class').change(function() {
                var status = $(this).prop('checked') == true ? 'Active' : 'InActive';
                // alert(status)
                var id = $(this).data('id');
                $.ajax({
                    type: "GET",
                    dataType: "json",
                    url: '{{route('student/status')}}',
                    data: {'status': status, 'id': id},
                    success: function(data){
                        console.log(data.success)
                    }
                });
            })
        });
    </script>

@endsection











