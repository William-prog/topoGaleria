<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tw-elements/dist/css/index.min.css" />
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['Inter', 'sans-serif'],
                    },
                }
            }
        }
    </script>

    <!-- Styles -->
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    @livewireStyles

    <!-- Scripts -->
    <script src="{{ mix('js/app.js') }}" defer></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
</head>

<style>
    body {
        background-color: #000000;
        padding: 0px;
        margin: 0px;
        overflow-y: hidden;
    }

    #gradient {
        width: 100%;
        height: 800px;
        padding: 0px;
        margin: 0px;
    }
</style>


<body class="antialiased">
    <div id="gradient" />
    <div class="relative flex items-top justify-center min-h-screen sm:items-center py-0 sm:pt-0">

        <div class="max-w-7xl mx-auto sm:px-0 lg:px-0" style="width: 65%;">
            <div class="">
                <style>
                    .widget {
                        width: 100%;
                        /* height: 40%; */
                    }

                    .widget p {
                        display: inline-block;
                        line-height: 1em;
                        font-weight: 300;
                    }

                    .fecha {
                        font-family: arial;
                        text-align: center;
                        font-size: 1.5em;
                        margin-bottom: 5px;
                        margin-top: 5px;
                        /* color: black; */
                        width: 100%;
                    }

                    .reloj {
                        font-family: Arial, "Helvetica Neue", Helvetica, sans-serif;
                        width: 100%;
                        font-size: 1.5em;
                        text-align: center;
                        /* color: black; */

                    }

                    .reloj .cajaSegundos {
                        display: inline-block;
                    }

                    .reloj .ampm,
                    .reloj .segundos {
                        display: block;
                        font-size: 1rem;
                    }
                </style>
                <div class="relative rounded-xl overflow-auto pb-1 pt-1">
                    <div class="flex flex-row space-x-4 font-mono text-white text-sm font-bold leading-6">
                        <div class="basis-4/5 h-14 rounded-lg flex items-center justify-center bg-black shadow-lg">
                            <div class="widget">
                                <div class="fecha">
                                    <p id="diaSemana" class="diaSemana"></p>
                                    <p id="dia" class="dia"></p>
                                    <p>de</p>
                                    <p id="mes" class="mes"></p>
                                    <p>del</p>
                                    <p id="anio" class="anio"></p>
                                </div>
                            </div>
                        </div>
                        <div class="basis-1/5 h-14 rounded-lg flex items-center justify-center bg-black shadow-lg">
                            <div class="widget">
                                <div class="reloj">
                                    <p id="horas" class="horas"></p>
                                    <p>:</p>
                                    <p id="minutos" class="minutos"></p>
                                    <p>:</p>
                                    <div class="cajaSegundos">
                                        <p id="ampm" class="ampm"></p>
                                        <p id="segundos" class="segundos"></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="mt-1 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
                    <div id="carouselExampleCaptions" class="carousel slide relative" data-bs-ride="carousel">

                        <div class="carousel-indicators absolute right-0 bottom-0 left-0 flex justify-center p-0 mb-4">

                            @foreach ($imagenes as $imagen)
                            @if($imagen->id == 1)
                            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="{{$imagen->id - 1}}" class="active" aria-current="true" aria-label="Slide {{$imagen->id}}"></button>
                            @endif
                            @if($imagen->id != 1)
                            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="{{$imagen->id - 1}}" aria-label="Slide {{$imagen->id}}"></button>
                            @endif
                            @endforeach

                        </div>
                        <div class="carousel-inner relative w-full overflow-hidden">
                            @foreach ($imagenes as $imagen)
                            @if($imagen->id == 1)
                            <div class="carousel-item active relative float-left w-full">
                                <img src="/imagen/{{$imagen->imagenUrl}}" class="block w-full" alt="..." />
                                <div class="carousel-caption hidden md:block absolute text-center">
                                    <h5 class="text-xl">{{$imagen->imagenTitulo}}</h5>
                                    <p>{{$imagen->imagenDescripcion}}</p>
                                </div>
                            </div>
                            @endif
                            @if($imagen->id != 1)
                            <div class="carousel-item relative float-left w-full">
                                <img src="/imagen/{{$imagen->imagenUrl}}" class="block w-full" alt="..." />
                                <div class="carousel-caption hidden md:block absolute text-center">
                                    <h5 class="text-xl">{{$imagen->imagenTitulo}}</h5>
                                    <p>{{$imagen->imagenDescripcion}}</p>
                                </div>
                            </div>
                            @endif
                            @endforeach
                        </div>
                        <button class="carousel-control-prev absolute top-0 bottom-0 flex items-center justify-center p-0 text-center border-0 hover:outline-none hover:no-underline focus:outline-none focus:no-underline left-0" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon inline-block bg-no-repeat" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next absolute top-0 bottom-0 flex items-center justify-center p-0 text-center border-0 hover:outline-none hover:no-underline focus:outline-none focus:no-underline right-0" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                            <span class="carousel-control-next-icon inline-block bg-no-repeat" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>

                <div class="mt-1 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
                    <div class="text-center text-sm text-gray-500 sm:text-left">
                        <div class="flex items-center">

                            <style>
                                @keyframes scroll {
                                    0% {
                                        transform: translateX(0);
                                    }

                                    100% {
                                        transform: translateX(calc(-250px * 4));
                                    }
                                }

                                .sliderH {
                                    background: white;
                                    box-shadow: 0 10px 20px -5px rgba(0, 0, 0, .125);
                                    height: 50px;
                                    margin: auto;
                                    overflow: hidden;
                                    position: relative;
                                    width: 960px;
                                }

                                .sliderH::before,
                                .sliderH::after {
                                    background: linear-gradient(to right, rgba(255, 255, 255, 1) 0%, rgba(255, 255, 255, 0) 100%);
                                    content: "";
                                    height: 50px;
                                    position: absolute;
                                    width: 200px;
                                    z-index: 2;
                                }

                                .sliderH::after {
                                    right: 0;
                                    top: 0;
                                    transform: rotateZ(180deg);
                                }

                                .sliderH::before {
                                    left: 0;
                                    top: 0;
                                }

                                .sliderH .slide-track {
                                    animation: scroll 10s linear infinite;
                                    display: flex;
                                    width: calc(250px * 8);
                                }

                                .sliderH .slide {
                                    height: 50px;
                                    width: 250px;
                                }
                            </style>

                            <div class="sliderH">
                                <div class="slide-track">
                                    <div class="slide">
                                        <img src="/imagen/Logos/topo.jpg" style="margin-top: 10px;" height="30" width="100" alt="" />
                                    </div>
                                    <div class="slide">
                                        <img src="/imagen/Logos/micon.png" style="margin-top: 10px;" height="50" width="125" alt="" />
                                    </div>
                                    <div class="slide">
                                        <img src="/imagen/Logos/timberland.png" height="50" width="125" alt="" />
                                    </div>
                                    <div class="slide">
                                        <img src="/imagen/Logos/robbins.jpg" height="50" width="125" alt="" />
                                    </div>

                                    <div class="slide">
                                        <img src="/imagen/Logos/topo.jpg" style="margin-top: 10px;" height="30" width="100" alt="" />
                                    </div>
                                    <div class="slide">
                                        <img src="/imagen/Logos/micon.png" style="margin-top: 10px;" height="50" width="125" alt="" />
                                    </div>
                                    <div class="slide">
                                        <img src="/imagen/Logos/timberland.png" height="50" width="125" alt="" />
                                    </div>
                                    <div class="slide">
                                        <img src="/imagen/Logos/robbins.jpg" height="50" width="125" alt="" />
                                    </div>


                                </div>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </div>
</body>


<script>
    $(function() {
        var actualizarHora = function() {
            var fecha = new Date(),
                hora = fecha.getHours(),
                minutos = fecha.getMinutes(),
                segundos = fecha.getSeconds(),
                diaSemana = fecha.getDay(),
                dia = fecha.getDate(),
                mes = fecha.getMonth(),
                anio = fecha.getFullYear(),
                ampm;

            var $pHoras = $("#horas"),
                $pSegundos = $("#segundos"),
                $pMinutos = $("#minutos"),
                $pAMPM = $("#ampm"),
                $pDiaSemana = $("#diaSemana"),
                $pDia = $("#dia"),
                $pMes = $("#mes"),
                $pAnio = $("#anio");
            var semana = ['Domingo', 'Lunes', 'Martes', 'Miercoles', 'Jueves', 'Viernes', 'Sabado'];
            var meses = ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'];

            $pDiaSemana.text(semana[diaSemana]);
            $pDia.text(dia);
            $pMes.text(meses[mes]);
            $pAnio.text(anio);
            if (hora >= 12) {
                hora = hora - 12;
                ampm = "PM";
            } else {
                ampm = "AM";
            }
            if (hora == 0) {
                hora = 12;
            }
            if (hora < 10) {
                $pHoras.text("0" + hora)
            } else {
                $pHoras.text(hora)
            };
            if (minutos < 10) {
                $pMinutos.text("0" + minutos)
            } else {
                $pMinutos.text(minutos)
            };
            if (segundos < 10) {
                $pSegundos.text("0" + segundos)
            } else {
                $pSegundos.text(segundos)
            };
            $pAMPM.text(ampm);

        };


        actualizarHora();
        var intervalo = setInterval(actualizarHora, 1000);
    });
</script>
<script>
    var colors = new Array(
        [255, 215, 146],
        [255, 174, 106],
        [255, 130, 67],
        [226, 106, 44],
        [198, 83, 20],
        [255, 128, 0]);

    // var colors = new Array(
    // [231, 92, 27],
    // [223, 89, 26],
    // [181, 74, 18],
    // [134, 55, 8],
    // [82, 32, 3],
    // [11, 4, 0]);

    var step = 0;
    //color table indices for: 
    // current color left
    // next color left
    // current color right
    // next color right
    var colorIndices = [0, 1, 2, 3];

    //transition speed
    var gradientSpeed = 0.007;

    function updateGradient() {

        if ($ === undefined) return;

        var c0_0 = colors[colorIndices[0]];
        var c0_1 = colors[colorIndices[1]];
        var c1_0 = colors[colorIndices[2]];
        var c1_1 = colors[colorIndices[3]];

        var istep = 1 - step;
        var r1 = Math.round(istep * c0_0[0] + step * c0_1[0]);
        var g1 = Math.round(istep * c0_0[1] + step * c0_1[1]);
        var b1 = Math.round(istep * c0_0[2] + step * c0_1[2]);
        var color1 = "rgb(" + r1 + "," + g1 + "," + b1 + ")";

        var r2 = Math.round(istep * c1_0[0] + step * c1_1[0]);
        var g2 = Math.round(istep * c1_0[1] + step * c1_1[1]);
        var b2 = Math.round(istep * c1_0[2] + step * c1_1[2]);
        var color2 = "rgb(" + r2 + "," + g2 + "," + b2 + ")";

        $('#gradient').css({
            background: "-webkit-gradient(linear, left top, right top, from(" + color1 + "), to(" + color2 + "))"
        }).css({
            background: "-moz-linear-gradient(left, " + color1 + " 0%, " + color2 + " 100%)"
        });

        step += gradientSpeed;
        if (step >= 1) {
            step %= 1;
            colorIndices[0] = colorIndices[1];
            colorIndices[2] = colorIndices[3];

            //pick two new target color indices
            //do not pick the same as the current one

            colorIndices[1] = (colorIndices[1] + Math.floor(1 + Math.random() * (colors.length - 1))) % colors.length;
            colorIndices[3] = (colorIndices[3] + Math.floor(1 + Math.random() * (colors.length - 1))) % colors.length;
        }
    }

    setInterval(updateGradient, 10);
</script>

</html>