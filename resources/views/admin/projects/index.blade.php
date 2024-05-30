@extends('layouts.admin')

@section('content')
    <h1>LISTA PROGETTI APERTI</h1>
    <table class="table table-bordered border-primary">
        <thead>
            <th>ID</th>
            <th>Project Name</th>
            <th>Slug</th>
            <th>Client Name</th>
            <th>Summary</th>
            <th>Actions</th>
        </thead>
        <tbody>
            @foreach ($projects as $project)
                <tr>
                    <td>{{ $project->id }}</td>
                    <td>{{ $project->name }}</td>
                    <td>{{ $project->slug }}</td>
                    <td>{{ $project->client_name }}</td>
                    <td>{{ $project->summary }}</td>
                    <td>
                        <a href="{{ route('admin.projects.show', $project->id) }}">View Project</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection