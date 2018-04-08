@extends('layouts.admin')
@push('styles')
<style src="{{ secure_asset('css/app.css') }}" rel="stylesheet" type="text/css"></style>
@endpush
@push('scripts')
<script src="{{ secure_asset('js/app.js')}}" type="text/javascript"></script>
@endpush
@section('content')
<mail-send-all></mail-send-all>
@endsection