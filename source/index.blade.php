@extends('_layouts.master')

@section('content')
    <div>
        <a href="/blog">Blog</a>
        @foreach ($projects as $project)
            <div>
                <a href="{{ $project->getPath() }}">{{ $project->title }}</a>
            </div>
        @endforeach
        <div>
            <a href="https://github.com/akoepcke">Github</a>
            <a href="https://bitbucket.org/akoepcke/">Bitbucket</a>
        </div>
    </div>
@endsection
