<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Progetto</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light" style="margin-top:-30px; margin-right:-20px;">
        <div class="container-fluid">
            <div>
                <svg version="1.0" xmlns="http://www.w3.org/2000/svg" width="80.000000pt" height="80.000000pt"
                    viewBox="0 0 200.000000 200.000000" preserveAspectRatio="xMidYMid meet">
                    <g transform="translate(0.000000,200.000000) scale(0.100000,-0.100000)" fill="#000000"
                        stroke="none">
                        <path d="M1530 1398 c0 -2 -7 -41 -15 -88 -8 -47 -15 -86 -15 -87 0 -2 36 -3
                            80 -3 78 0 80 -1 75 -22 -3 -13 -23 -138 -45 -278 -22 -140 -43 -267 -46 -283
                            l-6 -27 105 0 105 0 11 68 c81 481 117 708 114 715 -4 6 -363 11 -363 5z" />
                        <path d="M363 1175 c-99 -30 -182 -101 -229 -195 -37 -72 -39 -173 -6 -236 85
                            -164 322 -184 478 -42 58 53 99 121 112 185 7 36 10 38 52 41 55 4 80 25 80
                            67 0 41 -16 55 -61 55 -39 0 -49 -11 -49 -55 0 -39 -17 -37 -23 3 -13 75 -78
                            147 -164 178 -48 17 -135 17 -190 -1z" />
                        <path d="M972 1150 c20 -17 42 -46 48 -65 l12 -35 87 0 88 0 10 60 c5 33 7 62
                            5 65 -3 3 -69 5 -146 5 l-141 0 37 -30z" />
                        <path d="M1244 1163 c9 -21 165 -273 181 -291 9 -10 17 21 37 140 14 84 24
                            156 21 161 -2 4 -58 7 -125 7 -109 0 -120 -2 -114 -17z" />
                        <path d="M996 895 c-41 -69 -99 -98 -206 -103 l-87 -4 -13 -85 c-7 -46 -10
                            -86 -8 -89 3 -2 162 -3 355 -2 l350 3 -101 163 -101 162 -81 0 -82 0 -26 -45z
                            m174 -92 c0 -71 -4 -73 -101 -73 -48 0 -90 3 -92 8 -2 4 0 26 5 50 l9 42 90 0
                            89 0 0 -27z" />
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
                    <li class="nav-item"><a class="nav-link" href="clients">Clienti</a></li>
                    <li class="nav-item"><a class="nav-link" href="projects">Progetti</a></li>
                    <li class="nav-item"><a class="nav-link" href="users">Utenti</a></li>
                    <li class="nav-item"><a class="nav-link" href="orders">Ordini</a></li>
                </ul>
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
