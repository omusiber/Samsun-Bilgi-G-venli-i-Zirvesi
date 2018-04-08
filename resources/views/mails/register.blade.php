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
@endsection