@extends('layout.admin-master')
@section('title','Edit Menu')

@section('content')
    @livewire('admin.edit-menu',['id' => $id])
@endsection
