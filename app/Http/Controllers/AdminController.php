<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Participant;

class AdminController extends Controller
{
    public function index(){
        $participants_count = Participant::count();
        $participants = Participant::all();
        return view('admin.index', compact('participants', 'participants_count'));
    }

    public function checkMail(Request $request){
        $participant = Participant::where('email', $request->email);
        if($participant->count()){
            return $participant->first()->name;
        }
        
        //return $request;
    }

    public function mailSendOne(){
        return view('admin.mail_one');
    }

    public function mailSendOnePOST(Request $request){
        return $request;
    }

    public function mailSendAll(){
        return view('admin.mail_all');
    }
}
