@extends('_layouts.master')

@section('content')
    @foreach ($projects as $project)
        <div>
            <a href="{{ $project->getPath() }}">{{ $project->title }}</a>
        </div>
    @endforeach
@endsection