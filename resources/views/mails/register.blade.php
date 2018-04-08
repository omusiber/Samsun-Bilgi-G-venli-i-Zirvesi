@extends('layouts.mail')
@section('content')
<img src="https://bilgiguvenligizirvesi.com/assets/images/mail/logo.png" alt="">
<hr>
<div class="row header">
    Merhaba {{$participant->name}}!
</div>
<div class="row body">
    <span>
        <b style="color: #47ff0b;">Etkinlik kaydınız onaylanmıştır.</b> Sizi bu güzel etkinlikte aramızda görmekten onur duyacağımızı belirtmek isteriz! Etkinlik boyunca birbirinden güzel konferanslar ve çekilişler gerçekleşecektir.
        Aynı zamanda, etkinlik alanındaki standları gezebilirsiniz. İlgili durumlarda, bilgilendirme için bu mail adresi kullanılacaktır.
    </span>
    <span>
        UNUTMAYIN: Çekiliş hakkınızın onaylanması için etkinlik başlangıcında girişte kurulacak kayıt masaları aracılığı ile kesin kaydınızı yaptırmanız gerekmektedir.
    </span>
    <span>
        Etkinlik hakkında detaylı bilgiyi <a href="https://bilgiguvenligizirvesi.com"> web sitemizden </a> öğrenebilirsiniz.
    </span>
</div>
@endsection