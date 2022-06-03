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

<style>
    /*fonts*/
    @import url('https://fonts.googleapis.com/css?family=Montserrat');
    /**/

    body {
        font-family: 'Montserrat', sans-serif;
    }

    h1 {
        margin: 30px auto 30px auto;
        text-align: center;
        font-size: 40px;
        line-height: 45px;
    }

    .slider-rotate__arrow i {
        font-size: 46px;
    }

    .position {
        position: absolute;
        top: 50%;
        left: 50%;
        color: #ffffff;
        font-size: 30px;
        display: none;
    }

    .slider-rotate {
        margin: 0 auto;
        background-color: none;
    }

    .slider-rotate__container {
        margin: 0 auto;
    }

    #slider-2 {
        margin: 50px 0;
    }


    /* ------------------------------------------------------- */


    /* ------------------------------------------------------- */


    /* ------------------------------------------------------- */


    /* ------------------------------------------------------- */


    /* ------------------------------------------------------- */


    /* --                       PLUGIN                      -- */


    /* ------------------------------------------------------- */

    .slider-rotate__container {
        position: relative;
        width: 960px;
        height: 500px;
        visibility: hidden;
    }


    /*  --------------------------------------------------  */


    /*  --              ITEMS DISPLAY                     --*/


    /*  --------------------------------------------------  */

    .slider-rotate__item {
        position: absolute;
        left: 50%;
        top: 50%;
        opacity: 0;
        -webkit-transform: translateY(-50%) translateX(-50%) scale(0.8);
        -moz-transform: translateY(-50%) translateX(-50%) scale(0.8);
        -ms-transform: translateY(-50%) translateX(-50%) scale(0.8);
        -o-transform: translateY(-50%) translateX(-50%) scale(0.8);
        transform: translateY(-50%) translateX(-50%) scale(0.8);
        -webkit-transition: all 0.3s ease;
        -moz-transition: all 0.3s ease;
        -o-transition: all 0.3s ease;
        transition: all 0.3s ease;
    }

    .slider-rotate__item.slider-rotate__item--next {
        left: 74%;
    }

    .slider-rotate__item.slider-rotate__item--prev {
        left: 26%;
    }

    .slider-rotate__item.slider-rotate__item--prev,
    .slider-rotate__item.slider-rotate__item--next {
        opacity: 0.7;
        z-index: 2;
        -webkit-filter: blur(3px);
        -moz-filter: blur(3px);
        -ms-filter: blur(3px);
        -o-filter: blur(3px);
        filter: blur(3px);
    }

    .slider-rotate__item.slider-rotate__item--next-2 {
        left: 90%;
    }

    .slider-rotate__item.slider-rotate__item--prev-2 {
        left: 10%;
    }

    .slider-rotate__item.slider-rotate__item--next-2,
    .slider-rotate__item.slider-rotate__item--prev-2 {
        opacity: 0.4;
        z-index: 2;
        -webkit-transform: translateY(-50%) translateX(-50%) scale(0.3);
        -moz-transform: translateY(-50%) translateX(-50%) scale(0.3);
        -ms-transform: translateY(-50%) translateX(-50%) scale(0.3);
        -o-transform: translateY(-50%) translateX(-50%) scale(0.3);
        transform: translateY(-50%) translateX(-50%) scale(0.3);
        -webkit-filter: blur(3px);
        -moz-filter: blur(3px);
        -ms-filter: blur(3px);
        -o-filter: blur(3px);
        filter: blur(3px);
    }

    .slider-rotate__item.slider-rotate__item--active {
        z-index: 2;
        opacity: 1;
        z-index: 5;
        top: 50%;
        left: 50%;
        -webkit-transform: translateY(-50%) translateX(-50%) scale(1);
        -moz-transform: translateY(-50%) translateX(-50%) scale(1);
        -ms-transform: translateY(-50%) translateX(-50%) scale(1);
        -o-transform: translateY(-50%) translateX(-50%) scale(1);
        transform: translateY(-50%) translateX(-50%) scale(1);
        -webkit-filter: blur(0);
        -moz-filter: blur(0);
        -ms-filter: blur(0);
        -o-filter: blur(0);
        filter: blur(0);
    }


    /*  --------------------------------------------------  */


    /*  --                    ARROWS                      --*/


    /*  --------------------------------------------------  */

    .slider-rotate__container .slider-rotate__arrow {
        display: inline-block;
        width: 50px;
        height: 50px;
        background-color: #000000;
        position: absolute;
        top: 50%;
        margin-top: -25px;
        cursor: pointer;
        color: #fff;
        text-align: center;
    }

    .slider-rotate__container .slider-rotate__arrow:hover {
        background: #ffffff;
    }

    .slider-rotate__container .slider-rotate__arrow:hover i {
        color: #000000;
    }

    .slider-rotate__container .slider-rotate__arrow.slider-rotate__arrow--left {
        left: 0;
    }

    .slider-rotate__container .slider-rotate__arrow.slider-rotate__arrow--right {
        right: 0;
    }
</style>


<body class="antialiased">
    <div id="gradient" />
    <div class="relative flex items-top justify-center min-h-screen sm:items-center py-0 sm:pt-0">
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


        <div class="dark:bg-gray-800 overflow-hidden">
            <!--        DISPLAY 3 ITENS        -->
            <div class="slider-rotate" id="slider-2">

                <div class="slider-rotate__container">

                    <!-- ITENS -->
                    <div class="slider-rotate__item "><span class="position">1</span><img src="/imagen/pdf/pdf1.jpg"></div>
                    <div class="slider-rotate__item"><span class="position">2</span><img src="/imagen/pdf/pdf2.jpg"></div>
                    <div class="slider-rotate__item"><span class="position">3</span><img src="/imagen/pdf/pdf3.jpg"></div>
                    <div class="slider-rotate__item"><span class="position">4</span><img src="/imagen/pdf/pdf4.jpg"></div>
                    <div class="slider-rotate__item"><span class="position">5</span><img src="/imagen/pdf/pdf5.jpg"></div>
                    <div class="slider-rotate__item"><span class="position">6</span><img src="/imagen/pdf/pdf6.jpg"></div>
                    <div class="slider-rotate__item"><span class="position">7</span><img src="/imagen/pdf/pdf7.jpg"></div>
                    <div class="slider-rotate__item"><span class="position">8</span><img src="/imagen/pdf/pdf8.jpg"></div>

                    <!-- NAVIGATION -->
                    <!-- <span class="slider-rotate__arrow slider-rotate__arrow--right js-slider-rotate-arrow" data-action="next"><i class="fa fa-angle-right fa-3x"></i></span>
                                    <span class="slider-rotate__arrow slider-rotate__arrow--left js-slider-rotate-arrow" data-action="prev"><i class="fa fa-angle-left fa-3x"></i></span> -->

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


<script>
    $(function() {

        var s1 = $('#slider').sliderRotate({
            displayItems: 5
        });
        var s2 = $('#slider-2').sliderRotate({
            autoSlide: true
        });

    });

    //-------------------------------------------
    //based on : https://www.jqueryscript.net/demo/Basic-3D-Image-Rotator-with-jQuery-CSS3-rotateSlider/
    // plugin template by https://jqueryboilerplate.com/
    ;
    (function($, window, document, undefined) {

        "use strict";

        var pluginName = "sliderRotate",
            dataKey = "plugin_" + pluginName;

        var SliderRotate = function(element, options) {

            this.plugin_element = $(element);
            this.itemClass;
            this.arrowClass;
            this.$item;
            this.$arrow;
            this.$sliderContainer;
            this.numItens;
            this.indexActive;
            this.displayItens;
            this.autoSlide;
            this.slider_timer;
            this.time;

            this.PREV_CLASS = "slider-rotate__item--prev";
            this.PREV2_CLASS = "slider-rotate__item--prev-2";
            this.NEXT_CLASS = "slider-rotate__item--next";
            this.NEXT2_CLASS = "slider-rotate__item--next-2";
            this.ACTIVE_CLASS = "slider-rotate__item--active";

            this.CLASS_DISPLAY_3 = "slider-rotate--3";
            this.CLASS_DISPLAY_5 = "slider-rotate--5";

            this.DISPLAY_3 = 3;
            this.DISPLAY_5 = 5;

            this.SLIDER_CONTAINER = "slider-rotate__container";

            this.options = {
                time: 4,
                autoSlide: false,
                displayItems: 3,
                activate: function() {}
            };

            this.init(options);

        };

        SliderRotate.prototype = {
            init: function(options) {

                _init(options, this);

            },
            destroy: function() {
                this.plugin_element.unbind().removeData();
                $('*', this.plugin_element).unbind().removeData();
                this.$sliderContainer.unbind('mouseenter.slider');
                this.$sliderContainer.unbind('mouseleave.slider');
                _pauseSlide(this); //remove timer
            }
        };

        function _init(__options__, __this__) {

            //---------------------------------
            //---------------------------------
            var opts = __this__.options;
            $.extend(opts, __options__);
            opts.activate.call(__this__);
            //---------------------------------
            //---------------------------------
            __this__.displayItens = (opts.displayItems == 3 || opts.displayItems == 5) ? opts.displayItems : __this__.DISPLAY_3;
            __this__.itemClass = opts.itemClass || 'slider-rotate__item';
            __this__.arrowClass = opts.arrowClass || 'js-slider-rotate-arrow';
            __this__.$item = __this__.plugin_element.find('.' + __this__.itemClass);
            __this__.$arrow = __this__.plugin_element.find('.' + __this__.arrowClass);
            __this__.numItens = __this__.$item.length;
            __this__.indexActive = 0;
            __this__.$sliderContainer = $("." + __this__.SLIDER_CONTAINER);
            __this__.autoSlide = opts.autoSlide;
            __this__.time = opts.time;

            //add class to change layout by 3 or 5 itens
            __this__.plugin_element.addClass((__this__.displayItens == __this__.DISPLAY_3) ? __this__.CLASS_DISPLAY_3 : __this__.CLASS_DISPLAY_5);

            //start items positions
            _moveSlide(__this__.indexActive, __this__);

            //show container to prevent layout issues
            setTimeout(function() {
                __this__.$sliderContainer.css("visibility", "visible");
            }, 400);

            //item mouse event
            __this__.$item.on('click.rotate', function() {

                //prevent click on active item
                if ($(this).hasClass(__this__.ACTIVE_CLASS)) return false;

                //move slide to the desired index
                _moveSlide($(this).index(), __this__);

                return false;
            });

            //arrow mouse event
            __this__.$arrow.on('click.rotate', function() {

                //action (prev or next)
                var _action = $(this).data('action');

                if (_action == 'next') {

                    //move slide
                    _moveNext(__this__);

                } else if (_action == 'prev') {

                    //move slide
                    _movePrev(__this__);

                }

            });

            if (__this__.autoSlide) {
                _autoSlide(__this__);
            }
        }

        //auto slide
        function _autoSlide(__this__) {
            _pauseSlide(__this__); // remove timer

            var _miliseconds = Number(__this__.time) * 1000; // converts to miliseconds
            __this__.slider_timer = setTimeout(function() {
                _moveNext(__this__);
            }, _miliseconds);

            //stop items from auto slide
            __this__.$sliderContainer.unbind('mouseenter.slider').on('mouseenter.slider', function() {
                _pauseSlide(__this__); //remove timer
            });

            //back to auto slide
            __this__.$sliderContainer.unbind('mouseleave.slider').on('mouseleave.slider', function() {
                _autoSlide(__this__);
            });

        }

        //--------------
        //pause slide
        function _pauseSlide(__this__) {
            clearTimeout(__this__.slider_timer);
        }

        //move slide to the next item
        function _moveNext(__this__) {

            var _index = (__this__.indexActive == __this__.numItens - 1) ? 0 : (__this__.indexActive + 1);

            _moveSlide(_index, __this__);

        }

        //move slide to the previous item
        function _movePrev(__this__) {

            var _index = (__this__.indexActive == 0) ? (__this__.numItens - 1) : (__this__.indexActive - 1);

            _moveSlide(_index, __this__);

        }

        function _moveSlide(__index__, __this__) {

            __this__.indexActive = __index__;

            // removing all classes
            __this__.plugin_element.find('.' + __this__.ACTIVE_CLASS).removeClass(__this__.ACTIVE_CLASS);
            __this__.plugin_element.find('.' + __this__.NEXT_CLASS).removeClass(__this__.NEXT_CLASS);
            __this__.plugin_element.find('.' + __this__.PREV_CLASS).removeClass(__this__.PREV_CLASS);
            __this__.plugin_element.find('.' + __this__.PREV2_CLASS).removeClass(__this__.PREV2_CLASS);
            __this__.plugin_element.find('.' + __this__.NEXT2_CLASS).removeClass(__this__.NEXT2_CLASS);

            //if active index is the last item
            if (__index__ == __this__.numItens - 1) {

                __this__.$item.eq(0).addClass(__this__.NEXT_CLASS);

                if (__this__.displayItens == __this__.DISPLAY_5) {
                    __this__.$item.eq(1).addClass(__this__.NEXT2_CLASS);
                }

            }

            //if active index is the first item
            if (__index__ == 0) {

                __this__.$item.eq(__this__.numItens - 1).addClass(__this__.PREV_CLASS);

                if (__this__.displayItens == __this__.DISPLAY_5) {
                    __this__.$item.eq(__this__.numItens - 2).addClass(__this__.PREV2_CLASS);
                }

            }

            // loop through all items
            __this__.$item.each(function(index) {

                if (index == __index__) {

                    __this__.$item.eq(index).addClass(__this__.ACTIVE_CLASS);

                }

                if (index == __index__ + 1) {

                    __this__.$item.eq(index).addClass(__this__.NEXT_CLASS);

                }

                if (index == __index__ - 1) {

                    __this__.$item.eq(index).addClass(__this__.PREV_CLASS);

                }

                //just addClass if display 5 items
                if (__this__.displayItens == __this__.DISPLAY_5) {

                    if (index == __index__ + 2) {

                        __this__.$item.eq(index).addClass(__this__.NEXT2_CLASS);

                    }

                    if (__index__ == (__this__.numItens - 2)) {
                        __this__.$item.eq(0).addClass(__this__.NEXT2_CLASS);
                    }

                    if ((__index__ - 2) == -1) {
                        __this__.$item.eq(__this__.numItens - 1).addClass(__this__.PREV2_CLASS);
                    }

                    if (index == __index__ - 2) {
                        __this__.$item.eq(index).addClass(__this__.PREV2_CLASS);
                    }

                }

                if (__this__.autoSlide) {
                    _autoSlide(__this__);
                }

            });

        }

        //----------------------------------------------------
        //----------------------------------------------------
        //----------------------------------------------------
        //----------------------------------------------------
        $.fn[pluginName] = function(options) {

            var plugin = this.data(dataKey);

            if (plugin instanceof SliderRotate) {
                if (typeof options !== 'undefined') {
                    plugin.init(options);
                }
            } else {
                plugin = new SliderRotate(this, options);
                this.data(dataKey, plugin);
            }

            return plugin;
        };

    }(jQuery, window, document));
</script>

</html>