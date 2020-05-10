<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="/css/app.css">
    <title>@yield('title')</title>

</head>

<body>
    @include('components.top-menu')

    <div class="container-fluid">
        <div class="row flex-xl-nowrap">
            @isset($project)
                @include('components.project-menu')
            @else
                @include('components.left-menu')
            @endisset

            <main class="col py-md-3 pl-md-5 pt-md-5 bd-content">
                @section('content')
                @show
            </main>
        </div>
    </div>
    <script type="text/javascript" src="{{ asset('/js/app.js') }}"></script>
</body>

</html>