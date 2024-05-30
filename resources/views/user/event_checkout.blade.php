@extends('layout.master')

@section('content')
    @include('layout.user-navbar')
    @livewire('user.event-checkout',['id' => $id])
    @include('layout.footer')
@endsection
