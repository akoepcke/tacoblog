@extends('_layouts.master')

@section('content')
    <div class="group bg-white rounded-lg mb-6 text-center hover:bg-blue-500">
        <a href="/blog" class="flex flex-col no-underline p-4">
            <i class="fas fa-newspaper fa-4x pb-4 text-blue-900 group-hover:text-white"></i>
            <span class="text-blue-900 text-xl group-hover:text-white">
                Blog
            </span>
        </a>
    </div>
    <div class="group bg-white rounded-lg text-center hover:bg-blue-500">
        <a href="/projects" class="flex flex-col no-underline p-4">
            <i class="fas fa-wrench fa-4x pb-4 text-blue-900 group-hover:text-white"></i>
            <span class="text-blue-900 text-xl group-hover:text-white">
            Projects
            </span>
        </a>
    </div>
@endsection
