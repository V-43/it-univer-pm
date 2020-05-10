<table class="table table-borderless">
    <tbody>
        <tr>
            <td>Info</td>
            <td>Assignee</td>
            <td>Priority</td>
            <td>Update</td>
        </tr>
        @foreach($tasks as $task)
        <tr>
            <td>
                <div class="tags">
                    <a href="{{ $task->project->path() }}" class="bordered text-light bg-primary">#{{ $task->project->name }}</a>
                    @foreach($task->tags as $tag)
                        <a href="{{ $tag->path() }}" class="text-light tag--{{ $tag->slug }}">#{{ $tag->name }}</a>
                    @endforeach
                </div>
                <a href="{{ $task->path() }}">{{ $task->name }}</a>
            </td>
            <td><b>{{ $task->assignee->name }}</b></td>
            <td>{{ $task->priority->name }}</td>
            <td>
                <span class="row flex-xl-nowrap comments" title="{{ $task->comments()->count() }} comments">
                    <span>
                        <svg class="bi bi-chat" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M2.678 11.894a1 1 0 01.287.801 10.97 10.97 0 01-.398 2c1.395-.323 2.247-.697 2.634-.893a1 1 0 01.71-.074A8.06 8.06 0 008 14c3.996 0 7-2.807 7-6 0-3.192-3.004-6-7-6S1 4.808 1 8c0 1.468.617 2.83 1.678 3.894zm-.493 3.905a21.682 21.682 0 01-.713.129c-.2.032-.352-.176-.273-.362a9.68 9.68 0 00.244-.637l.003-.01c.248-.72.45-1.548.524-2.319C.743 11.37 0 9.76 0 8c0-3.866 3.582-7 8-7s8 3.134 8 7-3.582 7-8 7a9.06 9.06 0 01-2.347-.306c-.52.263-1.639.742-3.468 1.105z"
                                clip-rule="evenodd" />
                        </svg>
                    </span>
                    <span class="mr-sm-2">{{ $task->comments()->count() }}</span>
                </span>
                {{ $task->updated_at->format('H:i') }}
            </td>
        </tr>
        @endforeach
    </tbody>
</table>