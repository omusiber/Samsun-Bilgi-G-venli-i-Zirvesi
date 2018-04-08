@extends('layouts.mail')
@section('content')
<h1>
    {{ $request->header }}
</h1>
<hr>
<div class="row header">
    Merhaba!
</div>
<div class="row body">
    {{ $request->body }}
</div>
@endsection