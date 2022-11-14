

@extends('layouts.app')

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6">
                    <h1>Notification</h1>
                </div>
            </div>
        </div>
    </section>



    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="card  card-outline">
                    @if (count($notifications) > 0)
                        <div class="card-header">
                            <h3 class="card-title"><b> New Notification </b></h3>
                            <div class="card-tools">
                                <div class="float-right">
                                    {{--                                {!! $notifications->links() !!}--}}

                                </div>
                            </div>
                        </div>
                    @endif

                    <div class="card-body p-0">
                        <div class="mailbox-controls">


                        </div>
                        @if (count($notifications))
                            <div class="table-responsive mailbox-messages">
                                <table class="table table-hover table-striped">
                                    <tbody>

                                    @foreach ($notifications as $notification)
                                        <tr>

                                            <td class="mailbox-subject"><i class="fa fa-bell-o"></i>

                                                {{--                                                notification  -- &nbsp;&nbsp;&nbsp;&nbsp;New <b class="text-danger"> {{$notification->name}} </b>  Register--}}

                                                <b class="text-danger"> Notification &nbsp;&nbsp;&nbsp;&nbsp; </b>-- &nbsp;&nbsp;&nbsp;&nbsp; New &nbsp;&nbsp; <b class="text-success"> {{ $notification->name }} </b>  &nbsp;&nbsp;just &nbsp;&nbsp; Register....


                                            </td>
                                            <td class="mailbox-attachment"></td>
                                            <td class="mailbox-date">{{$notification->created_at->diffForHumans()}}</td>
                                        </tr>
                                    @endforeach


                                    </tbody>
                                </table>

                            </div>
                            {{--                        @else--}}
                            <div class="row">
                                <div class="col-sm-12">
                                    <div style="font-size: 40px; opacity: 0.5;">
                                        <center>
                                            <i class="fa fa-bell-o fa-5x"></i>
                                            <br>
                                            <br>
                                        </center>
                                    </div>


                                </div>            </div>
                    </div>
                    @endif


                    <div class="card-header">
                        <h3 class="card-title"><b>All Notification</b></h3>
                        <div class="card-tools">
                            <div class="float-right">
                                {{--                                {!! $notifications->links() !!}--}}

                            </div>
                        </div>

                    </div>


                    <div class="card-body p-0">
                        <div class="mailbox-controls">


                        </div>
                        @if (count($allnotifications))
                            <div class="table-responsive mailbox-messages">
                                <table class="table table-hover table-striped">
                                    <tbody>

                                    @foreach ($allnotifications as $notification)
                                        <tr>

                                            <td class="mailbox-subject"><i class="fa fa-bell-o"></i>

                                                {{--                                                notification  -- &nbsp;&nbsp;&nbsp;&nbsp;New <b class="text-danger"> {{$notification->name}} </b>  Register--}}
                                                {{--                                                @dd($notification->data)--}}
                                                <b class="text-danger"> Notification &nbsp;&nbsp;&nbsp;&nbsp; </b>-- &nbsp;&nbsp;&nbsp;&nbsp; New &nbsp;&nbsp; <b class="text-success"> {{ $notification->name}} </b>  &nbsp;&nbsp;just &nbsp;&nbsp; Register....


                                            </td>
                                            <td class="mailbox-attachment"></td>
                                            <td class="mailbox-date">{{$notification->created_at->diffForHumans()}}</td>
                                        </tr>
                                    @endforeach


                                    </tbody>
                                </table>

                            </div>
                            {{--                        @else--}}
                            <div class="row">
                                <div class="col-sm-12">
                                    <div style="font-size: 40px; opacity: 0.5;">
                                        <center>
                                            <i class="fa fa-bell-o fa-5x"></i>
                                            <br>
                                            <br>
                                        </center>
                                    </div>
                                </div>
                            </div>
                        @endif

                    </div>

                </div>

            </div>

        </div>

    </section>

@endsection
