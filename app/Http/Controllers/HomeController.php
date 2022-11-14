<?php

namespace App\Http\Controllers;

use App\Models\admin\Notification;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use function PHPUnit\Framework\returnValue;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        $user = User::all();
        $user = Auth::user();
        if ($user->role == 'admin')
        {
            return view('home');
        }
        else
        {
            return view('user_dashboard');
        }
    }

    public function notification()
    {

        $notifications = Notification::where('read_at',null)->where('id','!=',1)->get();
        $allnotifications = Notification::orderBy('id','DESC')->where('read_at','!=',null)->where('id','!=',1)->get();
        Notification::whereNull('read_at')->update(['read_at' => date('Y-m-d H:i:s')]);
        return view('admin.notification.showNotification', compact('notifications','allnotifications'));
    }

    public function quiz()
    {
        return view('admin.quiz.fields');
    }

    public function join(){

        ///   inner Join
//        $result = DB::table('city')
//                ->join('state','city.state_id','=','state.id')
//                ->get();
//        return view('admin.join.show',compact('result'));


//           left join

//        $result = DB::table('city')
//                ->leftJoin('state','city.state_id','=','city.id')
//                ->get();
//
//        return view('admin.join.show',compact('result'));

        //   Right Join

        $result = DB::table('city')
            ->rightjoin('state','city.state_id','=','state.id')
            ->get();
        return view('admin.join.show',compact('result'));

        // cross Join

//           $result = DB::table('city')
////                     ->select('city.*','city.name as kiran')         // name change of table
//                   ->crossJoin('state','city.state_id','=','state.id')
//                   ->get();
//                 return view('admin.join.show',compact('result'));

        // two table join

//        $result = DB::table('city')
//                ->join('state','city.state_id','=','city.id')
//                ->join('event','city.event_id','=','event.id')
//                ->get();
//                 return view('admin.join.show',compact('result'));

        // multiple table join

//        $result = DB::table('city')
//                ->join('state','city.state_id','=','state.id')
//                ->join('event','city.event_id','=','event.id')
//                ->join('user','city.user_id','=','user.id')
//                ->join('hobbies','city.hobbies_id','=','hobbies.id')
//                ->join('setting','city.setting_id','=','setting.in')
//                ->get();
//        return view('admin.join.show',compact('result'));


    }

    public function map(){
        return view('admin.map.show');
    }

}
