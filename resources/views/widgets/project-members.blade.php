<div class="col">
    <div class="mb-sm-5  shadow rounded">

        <h2>Project members
            <span class="float-right text-primary">
                <svg class="bi bi-person-fill" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor"
                    xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H2zm5-6a3 3 0 100-6 3 3 0 000 6z"
                        clip-rule="evenodd" />
                </svg>
            </span>
        </h2>
        <table class="table table-borderless">
            <tbody>
                @foreach($members as $member)
                <tr>
                    <td>
                        <a href="/users/{{ $member->id }}" class="text-dark font-weight-bold">
                            <svg class="bi bi-person-fill" width="1em" height="1em" viewBox="0 0 16 16"
                                fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H2zm5-6a3 3 0 100-6 3 3 0 000 6z"
                                    clip-rule="evenodd" />
                            </svg>
                            {{ $member->name }}
                        </a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>