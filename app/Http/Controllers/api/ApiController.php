<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\admin\Api;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Laravel\Passport\Passport;

class ApiController extends Controller
{
    public $successStatus = 200;
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
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required',
            'state' => 'required',
            'city' => 'required',
            'pincode' => 'required|min:6|max:6',
        ]);
        if ($validator->fails()) {
            return response()->json(['error'=>$validator->errors()], 401);
        }

        $input = $request->all();

        $input['password'] = bcrypt($input['password']);
        if ($request->hasFile('image')){
            $img = $request->file('image');
            $img->store('public/api/image/');
            $input['image'] = $img->hashName();
        }

       $user = Api::create($input);
//       $user = User::create($input);
//       $user->User_name()->create($input);


        return response()->json(['success'=>$input]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $data = Api::all();
        return response()->json(['success' => $data]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Api::find($id);
        if ($data) {
            return response()->json(['success' => $data]);
        }
        else
        {
            echo 'Data Not Found';
        }
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

        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required',
            'state' => 'required',
            'city' => 'required',
            'pincode' => 'required|min:6|max:6',
        ]);
        if ($validator->fails()) {
            return response()->json(['error'=>$validator->errors()], 401);
        }

        $input = $request->all();
        $data = Api::find($id);
        if ($request->hasFile("image")) {
            $img = $request->file("image");
            if (Storage::exists('public/api/image/'. $data->image)) {
                Storage::delete('public/api/image/'. $data->image);
            }
            $img->store('public/api/image/');
            $input['image'] = $img->hashName();
            $data->update($input);
        }
        $input['password'] = bcrypt($input['password']);
        $data->update($input);
        if ($data)
        {
            return response()->json(['success' => $data]);
        }
        else
        {
            return response()->json(['error' => 'Data Not Update']);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Api::find($id);
        $data->delete();
        if ($data)
        {
            echo 'Data Delete Successfully';
        }
        else
        {
            echo 'Data Not Delete';
        }
    }






}
