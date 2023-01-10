@extends('layouts.admin')

@section('content')
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
                    <i class="fa fa-eye fa-sm fa-fw" aria-hidden="true"></i>
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