<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../../assets/bootsrap/css/bootstrap.css" />
    <link rel="stylesheet" href="../../assets/icofont/icofont.css" />
    <link rel="stylesheet" href="../../assets/css/sounds.master.css" />
    <link rel="stylesheet" href="../../assets/css/sounds.navbar.css" />
    <link rel="stylesheet" href="../../assets/css/sounds.footer.css">
    @if ($type == "Home")
        <link rel="stylesheet" href="../../assets/css/sounds.welcome.css" />
    @elseif($type == "Program")
        <link rel="stylesheet" href="../../assets/css/sounds.program.css">
    @elseif($type == "Search")
        <link rel="stylesheet" href="../../assets/css/sounds.search.css">
    @elseif($type == "Schedule")
        <link rel="stylesheet" href="../../assets/css/sounds.schedule.css">
    @elseif($type == "Categories")
        <link rel="stylesheet" href="../../assets/css/sounds.categories.css">
    @elseif($type == "Detail")
        <link rel="stylesheet" href="../../assets/css/sounds.detail.css" />
    @elseif($type == "Programs")
        <link rel="stylesheet" href="../../assets/css/sounds.programs.css" />
    @elseif($type == "Schedules")
        <link rel="stylesheet" href="../../assets/css/sounds.schedules.css" />
    @endif
    
    <title>Sounds
        @if ($id == "top-shows")
            | Top Shows

        @elseif($id == "programs")
            | Programs
        @else
            | {{$type}}
        @endif
    </title>
</head>
<body>
    {{-- navbar --}}
    @include("sub.partials.navbar")
    {{-- end navbar --}}

    {{-- konten  --}}
    @yield("konten")
    {{-- end konten --}}

    {{-- footer --}}
    @include("sub.partials.footer")
    {{-- end footer --}}

<script src="../../assets/js/jquery-3.6.0.js"></script>
<script src="../../assets/bootsrap/js/bootstrap.bundle.js"></script>
<script src="../../assets/js/sounds.navbar.js"></script>
<script src="../../assets/js/script.js"></script>






    @if ($type == "Home")
        <script src="../../assets/js/sounds.welcome.js"></script>
    @elseif($type == "Program")
        <script src="../../assets/js/sounds.program.js"></script>   
    @elseif($type == "Search")
        <script src="../../assets/js/sounds.search.js"></script>
    @elseif($type == "Schedule")
        <script src="../../assets/js/sounds.schedule.js"></script>
    @elseif($type == "Categories")
        <script src="../../assets/js/sounds.categories.js"></script>
    @elseif($type == "Detail")
        <script src="../../assets/js/sounds.audio.js"></script>
    @endif
</body>
</html>
