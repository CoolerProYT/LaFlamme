@extends('layout.admin-master')
@section('title','Edit Event')

@section('content')
    @livewire('admin.edit-event',['id' => $id])
@endsection
