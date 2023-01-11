@extends('layouts.admin')

@section('content')
<h1>Projects</h1>
<a class="btn btn-primary my-3" href="{{route('admin.projects.create')}}">New Project</a>
<div class="table-responsive mt-4">
    <table class="table table-dark">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">TITLE</th>
                <th scope="col">SLUG</th>
                <th scope="col">DESCRIPTION</th>
                <th scope="col">ACTIONS</th>

            </tr>
        </thead>
        <tbody>
            @forelse($projects as $project)
            <tr class="">
                <td scope="row">{{$project->id}}</td>
                <td>{{$project->title}}</td>
                <td>{{$project->slug}}</td>
                <td>{{$project->description}}</td>
                <td>
                    <a class="btn btn-primary btn-sm" href="{{route('admin.projects.show', $project->slug)}}" role="button"><i class="fa fa-eye fa-sm fa-fw" aria-hidden="true"></i>
                    </a>
                    <i class="fa fa-pencil fa-sm fa-fw" aria-hidden="true"></i>
                    <i class="fa fa-trash fa-sm fa-fw" aria-hidden="true"></i>
                </td>
            </tr>
            @empty
            <tr>
                <td>No Projects Available</td>
            </tr>
            @endforelse
        </tbody>
    </table>
</div>

@endsection