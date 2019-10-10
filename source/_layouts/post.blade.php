@extends('_layouts.master')

@section('content')
    <div class="bg-white rounded-lg mb-6">
        <h1>{{ $page->title }}</h1>
        <p>By {{ $page->author }} • {{ date('d.m.Y', $page->date) }}</p>

        @yield('postContent')
    </div>
@endsection