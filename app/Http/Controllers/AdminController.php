<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Participant;
use Mail;

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
        return Mail::send('mails.info', ['participant' => $participant, 'request' => $request], function ($message) use ($participant, $request){
            $message->from('bilgi@bilgiguvenligizirvesi.com', 'Samsun Bilgi Güvenliği Zirvesi');
            $message->to($participant->email)->subject($request->subject);
        });
    }

    public function mailSendAll(){
        return view('admin.mail_all');
    }

    public function mailSendAllPOST(Request $request){
        $participant_mails = Participant::select('email')->get();
        $mails = array();
        foreach($participant_mails as $participant){
            array_push($mails, $participant['email']);
        }
        return Mail::send('mails.broadcast', ['participant' => $participant, 'request' => $request], function ($message) use ($mails, $request){
            $message->from('bilgi@bilgiguvenligizirvesi.com', 'Samsun Bilgi Güvenliği Zirvesi');
            $message->subject($request->subject);
            $message->bcc($mails);
        });
    }
}
