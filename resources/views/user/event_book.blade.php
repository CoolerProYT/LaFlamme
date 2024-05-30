@extends('layout.master')

@section('content')
    @include('layout.user-navbar')
    @livewire('user.event-book',['id' => $id])
    @include('layout.footer')
@endsection
