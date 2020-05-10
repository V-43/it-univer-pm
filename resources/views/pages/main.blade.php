@extends('layout')
@section('title', 'Project manager')

@section('content')
<section class="row row-cols-2 mr-sm-2">
    @include('widgets.favorite-projects')
    @include('widgets.important-tasks')
    @include('widgets.latest-activity')
</section>
@endsection