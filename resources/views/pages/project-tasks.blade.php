@extends('layout')
@section('title', $project->name . ' - tasks')

@section('content')
<h1 class="font-weight-bold">
    {{ $project->name }} - tasks
</h1>
@include('widgets.tasks', ['tasks' => $project->tasks()->orderBy('priority_id', 'desc')->get()])
@endsection
