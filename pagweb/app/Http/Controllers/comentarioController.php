<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Mail;
use Session;
use Redirect;

class ComentarioController extends Controller
{
    public function enviaremail(){
        $datos = \request()->all();
        Mail::send('email',$datos, function ($message) {
            $message->subject('DT MOWED WEB');
            $message->to('liwa.meraki@gmail.com');
        });
        return Redirect::to('/');
    }
}
