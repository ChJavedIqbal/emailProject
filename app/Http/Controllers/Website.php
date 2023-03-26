<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
class Website extends Controller
{
    //
    public function index(){
        $data=['name'=>'Javed','data'=>'helloo javed'];
        $user['to']='javed.iqbal@ladybirdweb.com';
        Mail::send('mail',$data,function($messages) use ($user){
            $messages->to($user['to']);
            $messages->subject('Hello dev');
        });

    }
}
