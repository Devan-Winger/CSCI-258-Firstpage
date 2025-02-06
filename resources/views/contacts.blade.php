<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Contacts</title>

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
                        <a class="nav-link" href="/temperature">Temperature</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/temperature" style="font-weight:bold;color:#424242" href="/contacts">Contacts</a>
                    </li>
                </ul>
        </div>
    </nav>
</nav><div style="background-color: #343434;">
    <div class="p-3 mb-2 bg-dark text-white">
        <div class="container-md">
            <div class="col-sm">
                <div style="">
                    <div class="row">
                        <div class="col-6">
                                <h1>Contacts</h1>
                                <hr>
                                @foreach ($dbContent as $item)
                                <div class="row">
                                    <div class="col">
                                        <h3>{{ $item->first_name }} {{ $item->last_name }}</h3>
                                        <h4>{{ $item->email }} {{ $item->phone_number }}</h4>
                                        <h4>{{ $item->birthday }}</h4>
                                    </div>
                                    <hr>
                                </div>
                                @endforeach
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