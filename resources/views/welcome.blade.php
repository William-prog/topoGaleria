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

    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
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
    </script> -->

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
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
        overflow-y: hidden
    }

    #gradient {
        width: 100%;
        height: 2080px;
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
                        height: 40%;

                    }

                    .widget p {
                        display: inline-block;
                        line-height: 1em;
                        font-weight: 300;
                    }

                    .fecha {
                        font-family: arial;
                        text-align: center;
                        font-size: 1em;
                        margin-bottom: 5px;
                        color: black;
                        /* background: rgba(0, 0, 0); */
                        padding: 5px;
                        width: 100%;
                        margin-top: 4%;

                    }

                    .reloj {
                        font-family: Arial, "Helvetica Neue", Helvetica, sans-serif;
                        width: 100%;
                        padding: 6px;
                        font-size: 1.4em;
                        text-align: center;
                        color: black;

                        /* background: rgba(0, 0, 0); */

                    }

                    .reloj .cajaSegundos {
                        display: inline-block;
                    }

                    .reloj .ampm {
                        display: block;
                        font-size: 0.7rem;
                    }

                    .reloj .segundos {
                        display: block;
                        font-size: 0.9rem;
                    }
                </style>


                <div class="mt-1 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">

                    <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="/imagen/imagenes/img1.jpg" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="/imagen/imagenes/img2.jpg" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="/imagen/imagenes/img3.png" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="/imagen/imagenes/img4.png" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="/imagen/imagenes/img5.jpg" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="/imagen/imagenes/img6.jpg" class="d-block w-100" alt="...">
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
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
                                        transform: translateX(calc(-250px * 6));
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
                                    animation: scroll 20s linear infinite;
                                    display: flex;
                                    width: calc(250px * 12);
                                }

                                .sliderH .slide {
                                    height: 50px;
                                    width: 250px;
                                }
                            </style>


                            <div class="sliderH">
                                <div class="slide-track">
                                    <div class="slide">
                                        <img src="/imagen/Logos/timberland.png" height="50" width="125" alt="" />
                                    </div>
                                    <div class="slide">
                                        <img src="/imagen/Logos/micon.png" style="margin-top: 10px;" height="50" width="125" alt="" />
                                    </div>
                                    <div class="slide">
                                        <img src="/imagen/Logos/topo.jpg" style="margin-top: 8px;" height="50" width="100" alt="" />
                                    </div>
                                    <div class="slide">
                                        <img src="/imagen/Logos/robins.jpg" height="50" width="125" alt="" />
                                    </div>
                                    <div class="slide" st>
                                        <div class="widget">
                                            <div class="fecha">
                                                <p style="font-weight: 900;" id="diaSemana" class="diaSemana"></p>
                                                <p style="font-weight: 900;" id="dia" class="dia"></p>
                                                <p style="font-weight: 900;">de</p>
                                                <p style="font-weight: 900;" id="mes" class="mes"></p>
                                                <p style="font-weight: 900;">del</p>
                                                <p style="font-weight: 900;" id="anio" class="anio"></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="slide">
                                        <div class="widget">
                                            <div class="reloj" style="text-align: left;">
                                                <p style="font-weight: 900;" id="horas" class="horas"></p>
                                                <p style="font-weight: 900;">:</p>
                                                <p style="font-weight: 900;" id="minutos" class="minutos"></p>
                                                <p style="font-weight: 900;">:</p>
                                                <div class="cajaSegundos">
                                                    <p style="font-weight: 600;" id="ampm" class="ampm"></p>
                                                    <p style="font-weight: 700;" id="segundos" class="segundos"></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="slide">
                                        <img src="/imagen/Logos/timberland.png" height="50" width="125" alt="" />
                                    </div>
                                    <div class="slide">
                                        <img src="/imagen/Logos/micon.png" style="margin-top: 10px;" height="50" width="125" alt="" />
                                    </div>
                                    <div class="slide">
                                        <img src="/imagen/Logos/topo.jpg" style="margin-top: 8px;" height="50" width="100" alt="" />
                                    </div>
                                    <div class="slide">
                                        <img src="/imagen/Logos/robins.jpg" height="50" width="125" alt="" />
                                    </div>
                                    <div class="slide">
                                        <div class="widget">
                                            <div class="fecha" style="margin-top: 30px;">
                                                <p id="diaSemana" class="diaSemana"></p>
                                                <p id="dia" class="dia"></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="slide">
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
            var semana = ['Domingo,', 'Lunes,', 'Martes,', 'Miercoles,', 'Jueves,', 'Viernes,', 'Sabado,'];
            var meses = ['enero', 'febrero', 'marzo', 'abril', 'mayo', 'junio', 'julio', 'agosto', 'septiembre', 'octubre', 'noviembre', 'diciembre'];

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