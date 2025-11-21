@extends('master')

@section('title')
    Sites
@endsection

@section('content')
    <div class="container mt-2">
        <livewire:site.site-create />
        <livewire:site.sites />
    </div>
@endsection
