@extends('_layouts.master')

@section('content')
    <h1>{{ $page->title }}</h1>
    <a href="{{ $page->link }}">{{ $page->title }}</a>

    <div>
        Using {{ $page->stack }}
    </div>

    <div>
        @yield('projectContent')
    </div>
@endsection