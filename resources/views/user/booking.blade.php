@extends('layout.master')

@section('content')
    @include('layout.user-navbar')
    @livewire('user.booking')
    @include('layout.footer')
@endsection
