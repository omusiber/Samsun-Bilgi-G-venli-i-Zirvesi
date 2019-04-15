@extends('layouts.mail')
@section('content')
<img src="https://bilgiguvenligizirvesi.com/assets/images/mail/logo.png" alt="">
<hr>
<div class="row header">
    Merhaba {{$participant->name}}!
</div>
<div class="row body">
    <span>
        <b style="color: #47ff0b;">Etkinlik ön başvurunuz alınmıştır.</b> Sizi bu güzel etkinlikte aramızda görmekten onur duyacağımızı belirtmek isteriz!
        Aynı zamanda, etkinlik alanındaki standları gezebilirsiniz. İlgili durumlarda, bilgilendirme için bu mail adresi kullanılacaktır.
    </span>
    <span>
        Etkinlik hakkındaki güncel bilgiler için <a href="https://bilgiguvenligizirvesi.com"> web sitemizi </a> takip edebilirsiniz.
    </span>
</div>
@endsection