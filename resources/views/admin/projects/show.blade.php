@extends('layouts.admin')

@section('content')
    <h2>{{ $project->name }}</h2>

    <div class="project-wrapper">
        <div class="my-2"><strong>Slug</strong>: {{ $project->slug }}</div>
        <div class="my-2"><strong>Client name</strong>: {{ $project->client_name }}</div>
        @if ($project->summary)
            <div class="my-2"><strong>Summary</strong>: {{ $project->summary }}</div>
        @endif
        <button class="btn btn-dark mt-4">
            <a class="nav-link text-white" href="{{ route('admin.projects.index') }}">
                <i class="fa-solid fa-tachometer-alt fa-lg fa-fw"></i> Projects
            </a>
        </button>
    </div>
@endsection