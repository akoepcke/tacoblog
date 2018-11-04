@extends('_layouts.master')

@section('content')
    <div class="p-4 bg-white flex flex-col rounded-lg">
        <a href="/blog">Blog</a>
        <a href="/projects">Projects</a>
    </div>

    <div class="flex my-2 justify-center">
        <div class="bg-white rounded-lg p-4 mx-2">
            <a href="https://github.com/akoepcke">Github</a>
        </div>
        <div class="bg-white rounded-lg p-4 mx-2">
            <a href="https://bitbucket.org/akoepcke/">Bitbucket</a>
        </div>
    </div>
@endsection
