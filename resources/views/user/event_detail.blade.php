@extends('layout.master')

@section('content')
    @include('layout.user-navbar')
    @livewire('user.event-detail',['id' => $id])
    @include('layout.footer')
@endsection
