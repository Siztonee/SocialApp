@extends('layouts.app')

@section('content')
    @livewire('chat-component', ['user_uuid' => $uuid])
@endsection

