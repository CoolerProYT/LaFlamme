@extends('layout.master')

@section('content')
    @include('layout.user-navbar')
    @livewire('user.menu')
    @include('layout.footer')
@endsection
