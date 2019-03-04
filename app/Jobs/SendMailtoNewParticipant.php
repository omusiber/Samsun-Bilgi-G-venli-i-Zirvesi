<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use App\Mail\NewParticipant;
use App\Participant;
use Mail;

class SendMailtoNewParticipant implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public $tries = 3;
    public $timeout = 60;
    public $participant;
    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($participant)
    {
        $this->participant = $participant;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $email = new NewParticipant($this->participant);
        Mail::to($this->participant->email)->send($email);
        /*if(!count(Mail::failures())){
            //
        }*/
    }
}
