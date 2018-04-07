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
        return 0;
    }

    public function mailSendOne(){
        return view('admin.mail_one');
    }

    public function mailSendOnePOST(Request $request){
        $participant = Participant::where('email', $request->email)->first();
        return Mail::send('mails.info', ['participant' => $participant], function ($message) use ($participant, $request){
            $message->from('bilgi@bilgiguvenligizirvesi.com', 'Samsun Bilgi Güvenliği Zirvesi');
            $message->to($participant->email)->subject($request->subject);
        });
        
        //return $request;
    }

    public function mailSendAll(){
        return view('admin.mail_all');
    }

    public function mailSendAllPOST(Request $request){
        return $request;
    }
}
