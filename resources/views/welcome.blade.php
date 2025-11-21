@extends('master')

@section('title')
    Home
@endsection

@section('content')
    <div class="container">
        <h1>Welcome Page</h1>
        {{ __('trans.Home.title') }}

        <livewire:counter />
    </div>
@endsection
