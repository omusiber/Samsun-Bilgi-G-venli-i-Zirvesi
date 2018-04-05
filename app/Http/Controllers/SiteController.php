<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Participant;

class SiteController extends Controller
{
    public function index(){
        return view('index');
    }

    public function store(Request $request){
        if(sizeOf(Participant::where('email', $request->email)->get())){
            return "Kaydınız zaten bulunmaktadır!";
        }
        Participant::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'from' => $request->from
        ]);
        return "Kaydınız başarıyla oluşturuldu!";
    }

}
