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
                                    <h3 class="card-title"><b>STUDENTS</b></h3>
                                </div>
                                <!-- /.card-header -->
                                <!-- form start -->
                                <form method="post" action="{{route('student/update',$student->id)}}">
                                    @csrf
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1"> Name: </label>
                                                    <input type="text" name="name" class="form-control"
                                                           id="exampleInputName" placeholder="Enter Name" value="{{$student['name']}}">
                                                    <span style="color: red">@error('name'){{$message}}@enderror</span>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1"> Email: </label>
                                                    <input type="email" name="email" class="form-control"
                                                           id="exampleInputName" placeholder="Enter Email" value="{{$student['email']}}">
                                                    <span style="color: red">@error('email'){{$message}}@enderror</span>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1"> Birth Date: </label>
                                                    <input type="date" name="birth_date" class="form-control"
                                                           id="exampleInputName" placeholder="Enter Email" value="{{$student['birth_date']}}">
                                                    <span style="color: red">@error('birth_date'){{$message}}@enderror</span>
                                                </div>
                                            </div> </div>

                                        <div class="form-group">
                                            <label for="exampleInputEmail1"> Address: </label>
                                            <input type="text" name="address" class="form-control"
                                                   id="exampleInputName" placeholder="Enter Address" value="{{$student['address']}}">
                                            <span style="color: red">@error('address'){{$message}}@enderror</span>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1"> State: </label>
                                                    <input type="text" name="state" class="form-control"
                                                           id="exampleInputName" placeholder="Enter State" value="{{$student['state']}}">
                                                    <span style="color: red">@error('state'){{$message}}@enderror</span>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1"> City: </label>
                                                    <input type="text" name="city" class="form-control"
                                                           id="exampleInputName" placeholder="Enter City" value="{{$student['city']}}">
                                                    <span style="color: red">@error('city'){{$message}}@enderror</span>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1"> Pincode: </label>
                                                    <input type="text" name="pincode" class="form-control"
                                                           id="exampleInputName" placeholder="Enter Pincode" value="{{$student['pincode']}}">
                                                    <span style="color: red">@error('pincode'){{$message}}@enderror</span>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleInputEmail1"> Mobile No: </label>
                                            <input type="text" name="mobile_no" class="form-control"
                                                   id="mobile_no" placeholder="Enter Mobile No" value="{{$student['mobile_no']}}">
                                            <span style="color: red">@error('mobile_no'){{$message}}@enderror</span>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1"> Course Name: </label>
                                                    <select name="course_name" class="form-control" value="{{old('course_name')}}">
                                                        <option value="B.COM" @if($student->course_name == 'B.COM') selected @endif>B.COM</option>
                                                        <option value="BCA" @if($student->course_name == 'BCA') selected @endif>BCA</option>
                                                        <option value="MCA" @if($student->course_name == 'MCA') selected @endif>MCA</option>
                                                        <option value="BSC" @if($student->course_name == 'BSC') selected @endif>BSC</option>
                                                        <option value="BBA" @if($student->course_name == 'BBA') selected @endif>BBA</option>
                                                        <option value="M.COM" @if($student->course_name == 'M.COM') selected @endif>M.COM</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1"> Enrollment Number: </label>
                                                    <input type="text" name="enrollment_number" class="form-control"
                                                           id="exampleInputName" placeholder="Enter Enrollment Number" value="{{$student['enrollment_number']}}">
                                                    <span style="color: red">@error('enrollment_number'){{$message}}@enderror</span>
                                                </div>
                                            </div>

                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1"> Status</label>
                                                    <select name="status" class="form-control" value="{{$student['status']}}">
                                                        <option value="Active" @if($student['status'] == 'Active')  selected="selected"  @endif>Active</option>
                                                        <option value="InActive"@if($student['status'] == 'InActive') selected="selected" @endif>InActive</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card-footer">
                                        <button type="submit" class="btn btn" style="background-color: #fd7e14">Submit
                                        </button>
                                        <a href="{{route('student/show')}}">
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

    <script>
        $("#mobile_no").keydown(function (event) {
            k = event.which;
            if ((k >= 96 && k <= 105) || k == 8) {
                if ($(this).val().length == 10) {
                    if (k == 8) {
                        return true;
                    } else {
                        event.preventDefault();
                        return false;
                    }
                }
            } else {
                event.preventDefault();
                return false;
            }
        });
    </script>


@endsection


