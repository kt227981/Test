@extends('layouts.app')
@section('content')




    <link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Semesters</h1>
                </div>
                <div class="col-sm-6">
                    <a class="btn btn-primary float-right"
                       href="{{ route('semesters.create') }}">
                        Add New
                    </a>
                </div>
            </div>
        </div>
    </section>

    <div class="content px-3">


        @include('flesh_massage')


    </div>



    {{--@extends('layouts.app')--}}
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
                                <th>Student</th>
                                <th>Semester</th>
                                <th>Subject_name</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($semester as $data)

                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$data->student_name->name}}</td>
                                    <td>{{$data->semester}}</td>
                                    <td>{{$data->subject_name}}</td>


                                    <td>


                                        <input data-id="{{$data->id}}"  class="toggle-class statuss" type="checkbox"onclick="on();"
                                               data-onstyle="success"  data-offstyle="danger" data-toggle="toggle"
                                               data-on="Active" data-off="InActive" {{ $data->status=='Active' ? 'checked' : '' }}>
                                    </td>

                                    <td>

                                        <div class='btn-group'>
                                            <a href="{{ route('semesters.edit', [$data->id]) }}" >
                                                <i class="far fa-edit btn btn-info btn-xs"></i>
                                            </a>
                                            <a href="{{ route('semesters.destroy', [$data->id]) }}" onclick="return confirm('Are you sure?')">
                                                <i class="far fa-trash-alt btn btn-danger btn-xs"></i>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>

                        </table>
                        {{ $semester->links() }}
                    </div>
                </div>

            </div>
        </div>
    </div>

@endsection







<script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>






@push('page_scripts')

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
                var id = $(this).data('id');
                $.ajax({

                    type: "GET",
                    dataType: "json",
                    url: 'semesters.status',
                    data: {'status': status, 'id': id},
                    success: function(data){
                        console.log(data.success)
                    }
                });
            })
        });
    </script>
@endpush
