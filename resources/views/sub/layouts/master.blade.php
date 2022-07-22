<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../../assets/bootsrap/css/bootstrap.css" />
    <link rel="stylesheet" href="../../assets/icofont/icofont.css" />
    <link rel="stylesheet" href="../../assets/css/helper.css" />
    <link rel="stylesheet" href="../../assets/css/navbar.css" />
    <link rel="stylesheet" href="../../assets/css/audio.css" />
    <link rel="stylesheet" href="../../assets/css/sounds.welcome.css" />
    <title>Sounds
        @if ($id == "top-shows")
            | Top Shows

        @elseif($id == "programs")
            | Programs

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

<script src="../../assets/js/jquery-3.6.0.js"></script>
<script src="../../assets/bootsrap/js/bootstrap.bundle.js"></script>
<script src="../../assets/js/navbar.js"></script>
<script src="../../assets/js/audio.js"></script>
<script src="../../assets/js/script.js"></script>
</body>
</html>
