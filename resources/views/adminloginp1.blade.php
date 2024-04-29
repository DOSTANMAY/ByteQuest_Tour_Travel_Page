<!DOCTYPE HTML>

<html>
    <head>
        <title>Welcome ADMIN</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
        <link rel="stylesheet" href="assets/css/main.css" />
        <noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
    </head>
    <body class="is-preload">
        <div id="wrapper">
            <div id="bg"></div>
            <div id="overlay"></div>
            <div id="main">

                
                    <header id="header">
                        <h1>Welcome.. ADMIN</h1>
                        <p>Please Click On The table You want To See</p>
                        <nav>
                            <ul>
                                <li>
                                    <div class="block">
                                        <a href="{{url('/displayall')}}" class="icon solid fa-table"></a>
                                        <span class="label">Registration Data</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="block">
                                        <a href="{{url('/qdisplay')}}" class="icon solid fa-table"></a>
                                        <span class="label">Query Data</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="block">
                                        <a href="{{url('/bdisplay')}}" class="icon solid fa-table"></a>
                                        <span class="label">Booking Details Data</span>
                                    </div>
                                </li>
                            </ul>
                        </nav>
                    </header>

                

            </div>
        </div>
        <script>
            window.onload = function() { document.body.classList.remove('is-preload'); }
            window.ontouchmove = function() { return false; }
            window.onorientationchange = function() { document.body.scrollTop = 0; }
        </script>
    </body>
</html>
