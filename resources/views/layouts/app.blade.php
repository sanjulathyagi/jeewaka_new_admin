<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="../assets/img/favicon.png">
    <title>
        Argon Dashboard 2 by Creative Tim
    </title>

    @include('libraries.styles')

</head>

<body class="g-sidenav-show   bg-gray-100">
    <div class="min-height-300 bg-primary position-absolute w-100"></div>

    @include('components.side')

    <main class="main-content position-relative border-radius-lg ">

        @include('components.nav')

        <div class="container-fluid py-4">

            @yield('content')


            @include('components.footer')
        </div>
    </main>


    @include('libraries.scripts')

</body>

</html>
