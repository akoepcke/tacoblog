@extends('_layouts.master')

@section('content')
    <h1>{{ $page->title }}</h1>
    <p>By {{ $page->author }} • {{ date('d.m.Y', $page->date) }}</p>

    @yield('post')
@endsection