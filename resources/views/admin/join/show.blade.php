@extends('layouts.app')
@section('content')
<table border="1p" width="500px">

    <tr>
        <th>Id</th>
        <th>Name</th>
        <th>State_id</th>
        <th>Status</th>
    </tr>

   @foreach($result as $data)
    <tr>
       <td>{{$loop->iteration}}</td>
        <td>{{$data->name}}</td>
        <td>{{$data->state_id}}</td>
        <td>{{$data->status}}</td>
    </tr>
       @endforeach
</table>
@endsection
