@extends('layout')
@section('content')
<style>
    .push-top {
        margin-top: 50px;
    }

</style>
@if (session()->has('success'))
    <div class="bg-red-500 rounded-xl py-2 px-4 fixed">
        <p>
            {{session('success')}}
        </p>
    </div>
@else
    
@endif
<div class="mx-auto">
    <div class="btn-group-vertical" style="margin: 25px;">
        <div class="mx-auto">
            <svg xmlns="http://www.w3.org/2000/svg" xml:space="preserve" width="300" height="300" version="1.1"
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
                    <polygon class="fil0" points="2906,2162 13748,2162 13831,1741 15829,1741 15829,7803 2906,7803 " />
                    <path class="fil1"
                        d="M6145 4683l242 -1260 579 0c0,0 600,-21 500,559 -88,526 -320,701 -800,701 -381,0 -521,0 -521,0z" />
                    <ellipse class="fil2" transform="matrix(1.53163 -0 -0.171302 1.05476 3085.76 4934.42)" rx="1991"
                        ry="2761" />
                    <ellipse class="fil1" transform="matrix(0.754937 -0 -0.0844345 0.525541 2996.44 4934.42)" rx="1991"
                        ry="2761" />
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
        <div class="mx-auto" style="margin-top: 80px">
            <h3 class="text-muted">Buon lavoro.</h3>
        </div>
        <div class="mx-auto " style="margin-top:fit-content; max-width: 50%;">
            <h4 class="position-relative" style="margin-top: 300px; ">L'azienda</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi vulputate enim in blandit sagittis.
                Sed cursus, est at pretium interdum, dolor tortor imperdiet tortor, quis volutpat elit orci ut
                neque. Praesent dictum velit libero, ac maximus mi feugiat at. Maecenas semper arcu ac lacinia
                lobortis. Sed metus orci, luctus sit amet auctor at, semper sit amet libero. Ut posuere iaculis
                euismod. Praesent congue sem ac nisi volutpat, non auctor quam tincidunt. Suspendisse potenti.
                Maecenas maximus urna quis luctus aliquet. Quisque sed aliquet ex. Suspendisse eu malesuada risus.
                Praesent tincidunt ultrices venenatis. Suspendisse scelerisque lobortis ultrices. Aliquam sapien
                lectus, iaculis congue dignissim quis, aliquam ut tortor. Maecenas nec neque lobortis, pellentesque
                lorem id, lobortis arcu.</p>

        </div>
        <div class="mx-auto text-muted" style="margin-top:60px; margin-bottom:-60px">
            <p>Open1; Via esempio esempio, 00<br> +39 0000000000; email@example.com</p>
        </div>
    </div>
</div>
@endsection