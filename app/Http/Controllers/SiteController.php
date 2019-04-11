<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ParticipantRequest;
use App\Jobs\SendMailtoNewParticipant;
use App\Participant;
use Mail;


class SiteController extends Controller
{
    public function index(){
        return view('index');
    }

    public function store(ParticipantRequest $request){
        $participant = Participant::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'from' => $request->from
        ]);

        $this->dispatch((new SendMailtoNewParticipant($participant)));

        return "Kaydınız başarıyla oluşturuldu!";
    }


    public function sendEmailReminder()
    {
        $request = new Request;
        $request->email = 'muhammet.ozturk@bil.omu.edu.tr';
        $request->subject = 'Konu burası';
        $request->header = 'Burası başlık';
        $request->body = 'Lorem Ipsum, dizgi ve baskı endüstrisinde kullanılan mıgır metinlerdir. Lorem Ipsum, adı bilinmeyen bir matbaacının bir hurufat numune kitabı oluşturmak üzere bir yazı galerisini alarak karıştırdığı 1500\'lerden beri endüstri standardı sahte metinler olarak kullanılmıştır. Beşyüz yıl boyunca varlığını sürdürmekle kalmamış, aynı zamanda pek değişmeden elektronik dizgiye de sıçramıştır. 1960\'larda Lorem Ipsum pasajları da içeren Letraset yapraklarının yayınlanması ile ve yakın zamanda Aldus PageMaker gibi Lorem Ipsum sürümleri içeren masaüstü yayıncılık yazılımları ile popüler olmuştur.';
        $participant = Participant::find(49);
        /*return Mail::send('mails.info', ['participant' => $participant], function ($message) use ($participant, $request){
            $message->from('bilgi@bilgiguvenligizirvesi.com', 'Samsun Bilgi Güvenliği Zirvesi');
            $message->to($participant->email)->subject($request->subject);
        });*/
        return view('mails.register', compact('participant', 'request'));
    }


}
