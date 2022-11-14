@extends('layouts.app')
@section('content')

kiran Thakor
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
                                <form method="post" action="{{route('student/store')}}">
                                    @csrf
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1"> Name: </label>
                                                <input type="text" name="name" class="form-control"
                                                       id="exampleInputName" placeholder="Enter Name" value="{{old('name')}}">
                                                <span style="color: red">@error('name'){{$message}}@enderror</span>
                                            </div>
                                            </div>
                                            <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1"> Email: </label>
                                                <input type="email" name="email" class="form-control"
                                                       id="exampleInputName" placeholder="Enter Email" value="{{old('email')}}">
                                                <span style="color: red">@error('email'){{$message}}@enderror</span>
                                            </div>
                                            </div>
                                            <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1"> Birth Date: </label>
                                                <input type="date" name="birth_date" class="form-control"
                                                       id="exampleInputName" placeholder="Enter Email" value="{{old('birth_date')}}">
                                                <span style="color: red">@error('birth_date'){{$message}}@enderror</span>
                                            </div>
                                            </div> </div>

                                            <div class="form-group">
                                                <label for="exampleInputEmail1"> Address: </label>
                                                <input type="text" name="address" class="form-control"
                                                       id="exampleInputName" placeholder="Enter Address" value="{{old('address')}}">
                                                <span style="color: red">@error('address'){{$message}}@enderror</span>
                                            </div>
                                        <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1"> State: </label>
                                                <input type="text" name="state" class="form-control"
                                                       id="exampleInputName" placeholder="Enter State" value="{{old('state')}}">
                                                <span style="color: red">@error('state'){{$message}}@enderror</span>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1"> City: </label>
                                                <input type="text" name="city" class="form-control"
                                                       id="exampleInputName" placeholder="Enter City" value="{{old('city')}}">
                                                <span style="color: red">@error('city'){{$message}}@enderror</span>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1"> Pincode: </label>
                                                <input type="text" name="pincode" class="form-control"
                                                       id="exampleInputName" placeholder="Enter Pincode" value="{{old('pincode')}}">
                                                <span style="color: red">@error('pincode'){{$message}}@enderror</span>
                                            </div>
                                        </div>
                                        </div>

                                            <div class="form-group">
                                                <label for="exampleInputEmail1"> Mobile No: </label>
                                                <input type="text"  name="mobile_no" class="form-control"
                                                       id="mobile_no" placeholder="Enter Mobile No" value="{{old('mobile_no')}}" onInput="edValueKeyPress()">
                                                <span style="color: red">@error('mobile_no'){{$message}}@enderror</span>
                                            </div>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1"> Course Name: </label>
                                                    <select name="course_name" class="form-control" value="{{old('course_name')}}">
                                                        <option>B.COM</option>
                                                        <option>BCA</option>
                                                        <option>MCA</option>
                                                        <option>BSC</option>
                                                        <option>BBA</option>
                                                        <option>M.COM</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1"> Enrollment Number: </label>
                                                <input type="text" name="enrollment_number" class="form-control"
                                                      id="lblValue" placeholder="Enter Enrollment Number" value="{{old('enrollment_number')}}">
                                                <span style="color: red">@error('enrollment_number'){{$message}}@enderror</span>
                                            </div>
                                            </div>

                                            <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1"> Select Status: </label>
                                                <select name="status" class="form-control" value="{{old('status')}}">
                                                    <option>Active</option>
                                                    <option>InActive</option>
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
<script>
    function edValueKeyPress() {

    var edValue = document.getElementById("mobile_no");
    var s = edValue.value;
        var data1 = s.slice(s.length -3);
        var data3 = 'A123';
        // alert(data1);

    var lblValue = document.getElementById("lblValue");
        // alert(lblValue)
    var newVal  = lblValue.innerText =data3 + data1;
    var newVal2 = newVal + $(this).text();
    $('#lblValue').val(newVal2);
    }
</script>

@endsection


