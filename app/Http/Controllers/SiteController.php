<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Participant;
use Mail;


class SiteController extends Controller
{
    public function index(){
        return view('index');
    }

    public function store(Request $request){
        if(sizeOf(Participant::where('email', $request->email)->get())){
            return "Kaydınız zaten bulunmaktadır!";
        }

        $participant = Participant::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'from' => $request->from
        ]);

        Mail::send('mails.register', ['participant' => $participant], function ($message) use ($participant){
            $message->from('bilgi@bilgiguvenligizirvesi.com', 'Samsun Bilgi Güvenliği Zirvesi');
            $message->to($participant->email)->subject('Kaydınız alınmıştır!');
        });

        return "Kaydınız başarıyla oluşturuldu!";
    }


    public function sendEmailReminder()
    {
        $participant = Participant::find(47);
        /*
        Mail::send('mails.register', ['participant' => $participant], function ($message) use ($participant){
            $message->from('bilgi@bilgiguvenligizirvesi.com', 'Samsun Bilgi Güvenliği Zirvesi');
            $message->to($participant->email)->subject('Kaydınız alınmıştır!');
        });*/
        return view('mails.register', compact('participant'));
    }


}
