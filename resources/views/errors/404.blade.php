<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sound | Not Found</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
</head>
<body class="bg-dark d-flex justify-content-center align-items-center" style="height: 90vh; width: 100%">
    <div class="nf-container container d-flex justify-content-center align-items-center" style="width: 50%">
        <div class="text-center" style="width: 100%;height:fit-content">
            <h2 class="display-3" style="line-height: 10px; color:rgba(255,,255,255);">404 | Not Found!</h2>
        </div>
    </div>
    <script>
    const nf_container = document.getElementsByClassName("nf-container")

        if(window.innerWidth <= 360){
            nf_container[0].children[0].children[0].style = "height:50vh"
        }else{
            // nf_container[0].children[0].children[0].style = "height:fit-content"
        }
    </script>
</body>
</html>
