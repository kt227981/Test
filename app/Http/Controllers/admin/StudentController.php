<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\admin\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return  view('admin.student.fields');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
//            'mobile_no' => 'required',
            'mobile_no' => 'required|digits:10',
            'state' => 'required',
            'city' => 'required',
            'pincode' => 'required',
          //  'enrollment_number' => 'required|min:7|max:7|regex:/^[A-Z]{1}[0-9]{6}$/',
            'address' => 'required',
            'birth_date' => 'required',
        ]);

        $input = $request->all();

//        $data1 = substr($input['mobile_no'],-3);
//        $data3 = 'A123';
//        $input['enrollment_number'] = $data3.+$data1;
        Student::create($input);

        return  redirect()->route('student/show')->with(['success'=>'Data Insert Successfully']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $student = Student::all();
        return view('admin.student.show',compact('student'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $student = Student::find($id);
        return view('admin.student.edit',compact('student'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $input = $request->all();
        $data = Student::find($id);
        $data->update($input);
        return  redirect()->route('student/show')->with(['success'=>'Data Update Successfully']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $student = Student::find($id);
        $student->delete();
        return  redirect()->route('student/show')->with(['danger'=>'Data Destroy SuccessFully']);
    }

    public function status(Request $request){
//        dd('oky');
        $user = Student::find($request->id);
        $user->status = $request->status;
        $user->save();

        return response()->json(['success'=>'Status change successfully.']);
    }
}
