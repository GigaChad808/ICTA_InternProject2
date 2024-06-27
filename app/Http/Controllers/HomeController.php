<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;

use Notification;

use App\Notifications\SendEmailNotification;

class HomeController extends Controller
{

    public function sendnotification(Request $request)
    {
        $user=User::all();

        $details=[
            'greeting'=>$request->greeting,

            'body'=>$request->body,

            'actiontext'=>$request->actiontext,

            'actionurl'=>$request->url,

            'lastline'=>$request->lastline,
        ];

        Notification::send($user, new SendEmailNotification($details));

        dd('done');

    }
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
        return view('adminpage');
    }
}
