@extends('layouts.admin')

@section('content')
<h1>{{$project->title}}</h1>
<hr>
<h5>Slug: {{$project->slug}}</h5>
<img src="{{asset('storage/' . $project->cover_image)}}" alt="">
<p>Description: {{$project->description}}</p>
@endsection