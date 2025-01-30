<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Welcome</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.googleapis.com">
    <link rel="dns-prefetch" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:ital,wght@0,100..700;1,100..700&display=swap" rel="stylesheet">

    @viteReactRefresh
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    
</head>

<body><nav class="navbar-expand -md">
    <nav class="navbar">
        <div class="container-md">
            <a class="navbar-brand" href="../">
                Devan W.
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/temperature" style="font-weight:bold;color:#424242">Temperature</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</nav><div style="background-color: #343434;">
    <div class="p-3 mb-2 bg-dark text-white">
        <div class="container-md">
            <div class="col-sm">
                <div style="height: 85vh;">
                    <div class="row">
                        <div class="col-6">
                                <h1>fahrenheit to celsius converter</h1>
                                <hr>
                                <form action="{{ route('temperature_show')}}" method="POST">
                                    @csrf
                                <div class="row">
                                    <div class="col-2">
                                        <div class="item">
                                            <label for="temp" class="form-label">Temperature Fahrenheit:</label><br>
                                            <input type="text" id="temp" name="temp" value="{{ $temp ?? "0" }}">
                                        </div>
                                    </div>
                                </div>
                                <br><br>
                                <div class="row">
                                    <div class="col-2">
                                        <div class="item">
                                            Temperature celsius: {{ $finalTemp ?? "0" }}
                                        </div>
                                    </div>
                                </div>
                                <br><br>
                                <div class="row">
                                    <div class="col">
                                        <input type="submit" class="btn btn-outline-secondary" value="Submit">
                                    </div>
                                </div>
                                </form>
                        </div>
                        <div class="col-4">

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div style="height: 3vh;">

<div class="container-fluid" style="background-color: #343434; color:white;">
    <footer>
        <script>document.write("Copyright " + "© " + new Date().getFullYear() + ". All Rights Reserved.");</script>Copyright © 2024. All Rights Reserved.
        <br>
        <a href="https://www.freepik.com/free-vector/logotype-set_16445804.htm#query=logo&amp;position=0&amp;from_view=keyword%22%3EImage by rawpixel.com" <="" a=""> Logo from Freepik
    </a></footer><a href="https://www.freepik.com/free-vector/logotype-set_16445804.htm#query=logo&amp;position=0&amp;from_view=keyword%22%3EImage by rawpixel.com" <="" a="">
</a></div><a href="https://www.freepik.com/free-vector/logotype-set_16445804.htm#query=logo&amp;position=0&amp;from_view=keyword%22%3EImage by rawpixel.com" <="" a="">
</a></div><a href="https://www.freepik.com/free-vector/logotype-set_16445804.htm#query=logo&amp;position=0&amp;from_view=keyword%22%3EImage by rawpixel.com" <="" a="">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.13.2/jquery-ui.min.js"></script></a></div><a href="https://www.freepik.com/free-vector/logotype-set_16445804.htm#query=logo&amp;position=0&amp;from_view=keyword%22%3EImage by rawpixel.com" <="" a="">

</a></body></html>