@extends('layouts.mail')
@section('content')
<h1>
    {{ $request->header }}
</h1>
<hr>
<div class="row header">
    Merhaba {{$participant->name}}!
</div>
<div class="row body">
    {{ $request->body }}
</div>
<div class="row footer">
    Saygılarımızla <br>
    Bilgi Güvenliği Zirvesi Etkinlik Kurulu
</div>
<hr>

<div class="row info">
        Yer: Ondokuz Mayıs Üniversitesi Mühendislik Fakültesi Konferans Salonu<br>
        Tarih: 26 - 27 Nisan 2018<br>
        Saat: 09.30 - 17.00 / 09.30 - 12.30
    </div>
<div class="row">
    <img src="http://bilgiguvenligizirvesi.com/assets/images/omusiber.png" alt="">
</div>
@endsection