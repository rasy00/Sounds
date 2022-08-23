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
    <link rel="stylesheet" href="../../assets/css/sounds.program.css">
    {{-- <link rel="stylesheet" href="../../assets/css/sounds.welcome.css" /> --}}
    {{-- <link rel="stylesheet" href="../../assets/css/sounds.detail.css" /> --}}
    
    <title>Sounds
        @if ($id == "top-shows")
            | Top Shows

        @elseif($id == "programs")
            | Programs
        @else
            | {{$id}}
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
{{-- <script src="../../assets/js/sounds.audio.js"></script> --}}
<script src="../../assets/js/script.js"></script>
<script src="../../assets/js/souds.program.js"></script>
{{-- <script src="../../assets/js/sounds.welcome.js"></script> --}}
</body>
</html>
