<div class="navbar-dark col-md-3 col-xl-2 py-md-5 bg-dark bd-sidebar">
    <p class="text-uppercase text-secondary">{{ $project->name }}</p>
    <ul class="navbar-nav flex-column">
        <li class="nav-item">
            <a class="nav-link rounded" href="{{ $project->path() }}">Info</a>
        </li>
        <li class="nav-item">
            <a class="nav-link rounded" href="{{ route('tasks', $project) }}">Tasks</a>
        </li>
        <li class="nav-item">
            <a class="nav-link rounded" href="{{ $project->path() }}/wiki">Wiki</a>
        </li>
        <li class="nav-item">
            <a class="nav-link rounded" href="{{ $project->path() }}/customer">Customer</a>
        </li>
        <li class="nav-item">
            <a class="nav-link rounded" href="{{ $project->path() }}/members">Members</a>
        </li>
        <li class="nav-item">
            <a class="nav-link rounded" href="{{ $project->path() }}/activity">Activity</a>
        </li>
    </ul>
</div>