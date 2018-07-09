@extends('_layouts.master')

@section('content')
    <div>
        <ul>
            @foreach ($posts as $post)
                <li><a href="{{ $post->getPath() }}">{{ $post->title }}</a></li>
            @endforeach
        </ul>
    </div>
@endsection