@extends('layouts.app')
@section('content')


    <style>
        body {
            /*overflow-y: hidden; !* Hide vertical scrollbar *!*/
            overflow-x: hidden; /* Hide horizontal scrollbar */
        }
    </style>

    <div style="margin-left: -250px">
        <div class="content-wrapper" STYLE="height: 150%; width: 164%;">

            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">

                        </div>

                    </div>
                </div><!-- /.container-fluid -->
            </section>

            <!-- Main content -->
            <section class="content">

                <div class="container-fluid">
                    <div class="row">
                        <!-- left column -->
                        <div class="col-md-6">
                            <!-- general form elements -->
                            <div class="card card" style="background-color: #f4f6f9">
                                <div class="card-header">
                                    <h3 class="card-title"><b>SEMESTER</b></h3>
                                </div>
                                <!-- /.card-header -->
                                <!-- form start -->
                                <form method="post" action="{{route('semesters.update',$semester->id)}}">
                                    @csrf
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1"> student : </label>
                                                    <select name="student_id" class="form-control">
                                                        @foreach($semester_name as $data)
                                                            <option value="{{$data->id}}" {{$semester->student_id == $data->id ? 'selected="selected"' : ''}}>{{$data->name}}</option>
                                                        @endforeach
                                                        <span style="color: red">@error('student_id'){{$message}}@enderror</span>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1"> Semester: </label>
                                                    <input type="text" name="semester" class="form-control"
                                                           id="exampleInputName" placeholder="Enter Email" value="{{$semester['semester']}}">
                                                    <span style="color: red">@error('semester'){{$message}}@enderror</span>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleInputEmail1"> Marks: </label>
                                            <input type="date" name="marks" class="form-control"
                                                   id="exampleInputName" placeholder="Enter Email" value="{{$semester['marks']}}">
                                            <span style="color: red">@error('marks'){{$message}}@enderror</span>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1"> Subject Name: </label>
                                                    <input type="text" name="subject_name" class="form-control"
                                                           id="exampleInputName" placeholder="Enter Address" value="{{$semester['subject_name']}}">
                                                    <span style="color: red">@error('subject_name'){{$message}}@enderror</span>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1"> Select Status: </label>
                                                    <select name="status" class="form-control" >
                                                        <option value="Active" @if($semester['status'] == 'Active')  selected="selected"  @endif>Active</option>
                                                        <option value="InActive"@if($semester['status'] == 'InActive') selected="selected" @endif>InActive</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="card-footer">
                                        <button type="submit" class="btn btn" style="background-color: #fd7e14">Submit
                                        </button>
                                        <a href="{{route('semesters.show')}}">
                                            <button type="button" class="btn btn" style="background-color: #fd7e14">
                                                Back
                                            </button>
                                        </a>

                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
@endsection


