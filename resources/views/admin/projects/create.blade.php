@extends('layouts.admin')

@section('content')
<h1>Create New Project</h1>

<form action="{{route('admin.projects.store')}}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="mb-3">
        <label for="title" class="form-label">Title</label>
        <input type="text" name="title" id="title" class="form-control" placeholder="" aria-describedby="titleHelper">
        <small id="titleHelper" class="text-muted">Add title with max 100 characters</small>
    </div>
    <div class="mb-3">
        <label for="image" class="form-label">Image</label>
        <input type="file" name="image" id="image" class="form-control" placeholder="" aria-describedby="imageHelper">
        <small id="imageHelper" class="text-muted">Add an image</small>
    </div>
    <div class="mb-3">
        <label for="description" class="form-label">Description</label>
        <textarea type="text" name="description" id="description" class="form-control" placeholder="" aria-describedby="descriptionHelper"></textarea>
        <small id="descriptionHelper" class="text-muted">Add a description with max 300 characters</small>
    </div>
    <button type="submit" class="btn btn-primary">Add</button>
</form>
@endsection