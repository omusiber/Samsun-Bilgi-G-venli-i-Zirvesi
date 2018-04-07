@extends('layouts.admin')
@push('styles')
<style src="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css"></style>
@endpush
@push('scripts')
<script src="{{ asset('js/app.js')}}" type="text/javascript"></script>
@endpush
@section('content')
<mail-send-one></mail-send-one>
@endsection