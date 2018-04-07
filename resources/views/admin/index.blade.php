@extends('layouts.admin')
@section('content')
<h1>Toplam katılımcı: <span>{{ $participants_count }}</span></h1>
<div class="row">
    <a href="{{ route('mailSendOne') }}">
        <button>Bir kişiye mail at</button>
    </a>
    <a href="{{ route('mailSendAll') }}">
            <button>Herkese Mail at</button>
    </a>
</div>
<div class="row">
    <table id="participants" class="display hover">
            <thead>
                <tr>
                    <td>ID</td>
                    <td>İsim</td>
                    <td>Email</td>
                    <td>Telefon</td>
                    <td>Kurum/Üniversite</td>
                    <td>Kayıt</td>
                </tr>
            </thead>
            @foreach($participants as $participant)
                <tr>
                    <td>{{ $participant->id }}</td>
                    <td>{{ $participant->name }}</td>
                    <td>{{ $participant->email }}</td>
                    <td>{{ $participant->phone }}</td>
                    <td>{{ $participant->from }}</td>
                    <td>{{ $participant->created_at }}</td>
                </tr>
            @endforeach
        </table>
</div>
@endsection