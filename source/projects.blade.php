@extends('_layouts.master')

@section('content')
    <div class="flex flex-col">
    @foreach ($projects as $project)
        <div>
            <a href="{{ $project->getPath() }}">{{ $project->title }}</a>
        </div>
    @endforeach
    </div>
@endsection