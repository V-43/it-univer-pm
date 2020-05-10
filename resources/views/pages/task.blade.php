@extends('layout', ['project' => $task->project])
@section('title', $task->name . ' - ' . $task->project->name)

@section('content')
@if (session('message'))
    <div class="notification is-success">
        <button class="delete"></button>
        {{ session('message') }}
    </div>
@endif

@if ($errors->any())
    <div class="notification is-danger">
        <button class="delete"></button>
        @foreach ($errors->all() as $error)
            {{ $error }}<br>
        @endforeach
    </div>
@endif

<div class="tags">
    <a href="{{ $task->project->path() }}" class="bordered text-light bg-primary">#{{ $task->project->name }}</a>
    @foreach($task->tags as $tag)
        <a href="{{ $tag->path() }}" class="text-light tag--{{ $tag->slug }}">#{{ $tag->name }}</a>
    @endforeach
</div>
<h1 class="font-weight-bold">{{ $task->name }}</h1>
<b>Assignee:</b> {{ $task->assignee->name }}
<b class="pl-4">Priority:</b> {{ $task->priority->name }}
<hr>
<p>{{ $task->description }}</p>
<div class="js-comments-list app__task-comments">
    <comments-list 
        load-url="{{ route('comments.index', ['project' => $task->project, 'task' => $task]) }}"
        post-url="{{ route('comments.create', ['project' => $task->project, 'task' => $task]) }}">
    </comments-list>
</div>
@endsection
