@extends('layouts.mail')
@section('content')
<h1>
    Kaydınız Onaylandı!
</h1>
<hr>
<div class="row header">
    Merhaba {{$participant->name}}!
</div>
<div class="row body">
    <span>
        Sizi bu güzel etkinlikte aramızda görmekten onur duyacağımızı belirtmek isteriz! Etkinlik boyunca birbirinden güzel konferanslar ve çekilişler gerçekleşecektir.
        Aynı zamanda, etkinlik alanındaki standları gezebilirsiniz. İlgili durumlarda, bilgilendirme için bu mail adresi kullanılacaktır.
    </span>
    <span>
        Etkinlik hakkında detaylı bilgiyi <a href="https://bilgiguvenligizirvesi.com"> web sitemizden </a> öğrenebilirsiniz.
    </span>
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