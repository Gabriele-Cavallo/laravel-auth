@extends('layouts.admin')

@section('content')
    <h2>{{ $project->name }}</h2>

    <div class="project-wrapper">
        <div>Slug: {{ $project->slug }}</div>
        <div>Client name: {{ $project->client_name }}</div>
        @if ($project->summary)
            <div>Summary: {{ $project->summary }}</div>
        @endif
    </div>
@endsection