@extends('_layouts.master')

@section('content')
    <div class="bg-white rounded-lg mb-6">
        <h1>{{ $page->title }}</h1>
        <a href="{{ $page->link }}">{{ $page->title }}</a>

        <div>
            Using {{ $page->stack }}
        </div>

        <div>
            Source at <a href="{{ $page->repository }}">{{ $page->repositoryType }}</a>
        </div>

        <div>
            @yield('projectContent')
        </div>
    </div class="bg-white rounded-lg mb-6">
@endsection