@extends('_layouts.master')

@section('content')
    <div class="">
        <ul class="-mb-6">
            @foreach ($projects as $project)
                <li class="group bg-white rounded-lg mb-6 hover:bg-blue-500">
                    <a href="{{ $project->getPath() }}" class="flex flex-col no-underline p-4 text-blue-900 group-hover:text-white">
                        <div class="text-lg text-blue-800 font-bold py-3">
                            {{ $project->title }}
                        </div>
                        <div class="text-right text-sm text-blue-500 group-hover:text-white">
                            Read more...
                        </div>
                    </a>
                </li>
            @endforeach
        </ul>
    </div>
@endsection