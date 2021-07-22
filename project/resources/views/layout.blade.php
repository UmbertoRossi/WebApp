<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>webApp</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{url('/js/dropzone-5.7.0/dist/dropzone.css')}}">
    <script src={{url('/js/dropzone-5.7.0/dist/dropzone.js')}}></script>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light" style="margin-top:-30px; margin-right:-20px;">
        <div class="container-fluid">
            <div>
                <svg xmlns="http://www.w3.org/2000/svg" xml:space="preserve" width="100" height="100"
                    version="1.1"
                    style="shape-rendering:geometricPrecision; text-rendering:geometricPrecision; image-rendering:optimizeQuality; fill-rule:evenodd; clip-rule:evenodd"
                    viewBox="0 0 17770 7846" xmlns:xlink="http://www.w3.org/1999/xlink">
                    <defs>
                        <style type="text/css">
                            <![CDATA[
                            .fil2 {
                                fill: #2B2A29
                            }

                            .fil1 {
                                fill: #E31E24
                            }

                            .fil0 {
                                fill: #FEFEFE
                            }

                            ]]>
                        </style>
                    </defs>
                    <g id="Layer_x0020_1">
                        <metadata id="CorelCorpID_0Corel-Layer" />
                        <polygon class="fil0"
                            points="2906,2162 13748,2162 13831,1741 15829,1741 15829,7803 2906,7803 " />
                        <path class="fil1"
                            d="M6145 4683l242 -1260 579 0c0,0 600,-21 500,559 -88,526 -320,701 -800,701 -381,0 -521,0 -521,0z" />
                        <ellipse class="fil2" transform="matrix(1.53163 -0 -0.171302 1.05476 3085.76 4934.42)" rx="1991"
                            ry="2761" />
                        <ellipse class="fil1" transform="matrix(0.754937 -0 -0.0844345 0.525541 2996.44 4934.42)"
                            rx="1991" ry="2761" />
                        <polygon class="fil2" points="14111,0 17770,0 16489,7803 14408,7803 15384,1743 13811,1741 " />
                        <path class="fil1"
                            d="M5645 7823l300 -1842c0,0 858,0 960,0 102,0 302,-18 302,-18l-302 1860 -1260 0z" />
                        <path class="fil2"
                            d="M10246 7823l-3341 0 302 -1860c0,0 1418,-58 1799,-1420l1761 0 -147 1080 -1832 0 -160 940 1827 0 -209 1260z" />
                        <path class="fil2" d="M11148 2162l-200 1261 -1802 0c0,0 38,-984 -1159,-1261l3161 0z" />
                        <polygon class="fil1" points="11146,2162 13745,2162 13206,5465 " />
                        <polygon class="fil1" points="10246,7823 10767,4543 12787,7823 " />
                    </g>
                </svg>

            </div>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="/">Home</a>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="/clients">Clienti</a></li>
                    <li class="nav-item"><a class="nav-link" href="/projects">Progetti</a></li>
                    <li class="nav-item"><a class="nav-link" href="/users">Utenti</a></li>
                    <li class="nav-item"><a class="nav-link" href="/orders">Ordini</a></li>
                </ul>
                @guest
                    <a class="nav-link ml-auto" href="/login">Login</a>
                @endguest
                @auth
                    <span class="ml-auto">Buon lavoro, {{auth()->user()->nome}}!</span>
                    <a class="nav-link ml-auto" href="/logout">Logout</a>
                @endauth
                
            </div>
        </div>
    </nav>

    <div class="container">
        @yield('content')
    </div>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" type="text/js"></script>
</body>

</html>
