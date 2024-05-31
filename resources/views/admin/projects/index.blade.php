@extends('layouts.admin')

@section('content')
    <h1>LISTA PROGETTI APERTI</h1>
    <table class="table table-bordered border-primary align-middle">
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
                    <td><strong>{{ $project->id }}</strong></td>
                    <td>{{ $project->name }}</td>
                    <td>{{ $project->slug }}</td>
                    <td>{{ $project->client_name }}</td>
                    <td>{{ $project->summary }}</td>
                    <td>
                        <button class="btn btn-dark">
                            <a href="{{ route('admin.projects.show', $project->id) }}">View Project</a>
                        </button>
                    </td>
                    <td>
                        <button class="btn btn-dark">
                            <a href="{{ route('admin.projects.edit', $project->id) }}">Edit Project</a>
                        </button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection