@extends('layout')
@section('title', 'Projects')

@section('content')
    <section class="row row-cols-1 mr-sm-2">
        <div class="col">
            <x-generic-panel>
                <x-slot name="title">Projects</x-slot>
                @include('components.project-list')
            </x-generic-panel>
        </div>
    </section>
@endsection