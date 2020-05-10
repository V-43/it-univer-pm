@extends('layout')
@section('title', $project->name)

@section('content')
<h1 class="font-weight-bold">{{ $project->name }}</h1>
<p>{{ $project->description }}</p>
<section class="row row-cols-1 mr-sm-2">
    @include('widgets.tasks', ['tasks' => $project->tasks()->orderBy('priority_id', 'desc')->get()])
</section>
<section class="row row-cols-2 mr-sm-2">
    @include('widgets.latest-activity')
    @include('widgets.project-members', ['members' => $project->members])
</section>
@endsection