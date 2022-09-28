<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proyect</title>

    <style>
        .container {
            position: absolute;
        }

        .filtro {
            position: relative;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .port-image {
            width: 100%;
        }

        .col-md-4 {
            margin-bottom: 30px;
        }

        .each-item {
            position: relative;
            overflow: hidden;
            border-radius: 5%;
        }

        .each-item:hover .cap2,
        .each-item:hover .cap1 {
            left: 0px;
        }



        .cap1 {
            position: absolute;
            display: flex;
            justify-content: center;
            align-items: center;

            width: 100%;
            height: 85%;
            background: rgba(15, 15, 15, 0.4);
            color: #fff;
            top: 0px;
            left: -100%;
            padding: 10px;

            transition: all .5s;
        }

        .cap2 {
            position: absolute;
            width: 100%;
            height: 15%;
            background: rgba(245, 115, 29, 0.4);
            bottom: 0px;
            left: 100%;
            padding: 10px;

            transition: all .5s;
        }
    </style>

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap');

        body {
            height: 100vh;
            display: flex;
            position: relative;

            justify-content: center;
            /* align-items: center; */
            background: #151515 !important;
        }

        .modal {
            position: fixed;
            top: 10%;
            left: 0;
            z-index: 1060;
            display: none;
            width: 100%;
            height: 100%;
            overflow-x: hidden;
            overflow-y: auto;
            outline: 0;
            background: rgba(255, 255, 255, 0.3);
        }

        .modal-content {
            position: relative;
            display: flex;
            flex-direction: column;
            width: 100%;
            pointer-events: auto;
            background-color: #000116 !important;
            background-clip: padding-box;
            border: 1pxsolidrgba(0, 0, 0, .2);
            border-radius: 0.3rem;
            outline: 0;
            border-radius: 10px;
        }

        .modal-body {
            position: relative;
            flex: 1 1 auto;
            padding: 1rem 0rem 1rem 0rem;
            border-radius: 10px;
            background-color: #000116;
        }

        .slider {
            position: relative;
            background: #000116;
            width: 1080px;
            min-height: 500px;
            margin: 20px;
            overflow: hidden;
            border-radius: 10px;
        }

        .slider .slide {
            position: absolute;
            width: 100%;
            height: 100%;
            clip-path: circle(0% at 0 50%);
        }

        .slider .slide.active {
            clip-path: circle(150% at 0 50%);
            transition: 4s;
        }

        .slider .slide img {
            position: absolute;
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .slider .slide .info {
            position: absolute;
            color: #222;
            background: rgba(255, 255, 255, 0.3);
            width: 75%;
            margin-top: 50px;
            margin-left: 50px;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 5px 25px rgb(1 1 1 / 5%);
        }

        .slider .slide .info h2 {
            font-size: 2em;
            font-weight: 800;
        }

        .slider .slide .info p {
            font-size: 1em;
            font-weight: 400;
        }

        .navigation {
            height: 800px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            opacity: 0;
            transition: opacity 0.5s ease;
        }

        .slider:hover .navigation {
            opacity: 1;
        }

        .prev-btn,
        .next-btn {
            z-index: 999;
            font-size: 2em;
            color: #222;
            background: rgba(255, 255, 255, 0.8);
            padding: 10px;
            cursor: pointer;
        }

        .prev-btn {
            border-top-right-radius: 3px;
            border-bottom-right-radius: 3px;
        }

        .next-btn {
            border-top-left-radius: 3px;
            border-bottom-left-radius: 3px;
        }

        .navigation-visibility {
            z-index: 999;
            display: flex;
            justify-content: center;
        }

        .navigation-visibility .slide-icon {
            z-index: 999;
            background: rgba(255, 255, 255, 0.5);
            width: 20px;
            height: 10px;
            transform: translateY(-50px);
            margin: 0 6px;
            border-radius: 2px;
            box-shadow: 0 5px 25px rgb(1 1 1 / 20%);
        }

        .navigation-visibility .slide-icon.active {
            background: #F5731D;
        }

        @media (max-width: 900px) {
            .slider {
                width: 100%;
            }

            .slider .slide .info {
                position: relative;
                width: 80%;
                margin-left: auto;
                margin-right: auto;
            }
        }

        @media (max-width: 500px) {
            .slider .slide .info h2 {
                font-size: 1.8em;
                line-height: 40px;
            }

            .slider .slide .info p {
                font-size: 0.9em;
            }
        }
    </style>

    <style>
        /* .area {
            background: #4e54c8;
            background: -webkit-linear-gradient(to left, #8f94fb, #4e54c8);
            width: 100%;
            height: 100vh;
        } */

        .circles {
            background-color: none;
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            overflow: hidden;
        }

        .circles li {
            position: absolute;
            display: block;
            list-style: none;
            width: 20px;
            height: 20px;
            background: rgba(245, 115, 29, 0.2);
            animation: animate 25s linear infinite;
            bottom: -150px;

        }

        .circles li:nth-child(1) {
            left: 25%;
            width: 80px;
            height: 80px;
            animation-delay: 0s;
        }


        .circles li:nth-child(2) {
            left: 10%;
            width: 20px;
            height: 20px;
            animation-delay: 2s;
            animation-duration: 12s;
        }

        .circles li:nth-child(3) {
            left: 70%;
            width: 20px;
            height: 20px;
            animation-delay: 4s;
        }

        .circles li:nth-child(4) {
            left: 40%;
            width: 60px;
            height: 60px;
            animation-delay: 0s;
            animation-duration: 18s;
        }

        .circles li:nth-child(5) {
            left: 65%;
            width: 20px;
            height: 20px;
            animation-delay: 0s;
        }

        .circles li:nth-child(6) {
            left: 75%;
            width: 110px;
            height: 110px;
            animation-delay: 3s;
        }

        .circles li:nth-child(7) {
            left: 35%;
            width: 150px;
            height: 150px;
            animation-delay: 7s;
        }

        .circles li:nth-child(8) {
            left: 50%;
            width: 25px;
            height: 25px;
            animation-delay: 15s;
            animation-duration: 45s;
        }

        .circles li:nth-child(9) {
            left: 20%;
            width: 15px;
            height: 15px;
            animation-delay: 2s;
            animation-duration: 35s;
        }

        .circles li:nth-child(10) {
            left: 85%;
            width: 150px;
            height: 150px;
            animation-delay: 0s;
            animation-duration: 11s;
        }



        @keyframes animate {
            0% {
                transform: translateY(0) rotate(0deg);
                opacity: 1;
                border-radius: 0;
            }

            100% {
                transform: translateY(-1000px) rotate(720deg);
                opacity: 0;
                border-radius: 50%;
            }
        }
    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

</head>

<body>
    <ul class="circles">
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
    </ul>

    <div class="container">



        <div class="filtro">
            <div style="color: #fff;">
                <h2>Filtro Componentes class </h2>
            </div>
        </div>
        <div class="filtro" style="background-color: #fff; border-radius: 10px;">
            <button class="btn btn-primary filter-button" data-filter="all">Todos</button>
            <button class="btn btn-default filter-button" data-filter="Equipo1">Equipo 1</button>
            <button class="btn btn-default filter-button" data-filter="Equipo2">Equipo 2</button>
            <button class="btn btn-default filter-button" data-filter="Equipo3">Equipo 3</button>
        </div>
        <br />

        <div class="row">
            

            <div class="col-md-4 filter Equipo2 Equipo1">
                <div class="each-item">
                    <img class="port-image" src="/imagen/Barrick/S2.jpg" alt="">
                    <div class="cap1">
                        <h3>Titulo</h3>
                        <p>Descripcion</p>
                    </div>
                    <div class="cap2">
                        <p class="text-center">Ver Modal</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4 filter Equipo3">
                <div class="each-item">
                    <img class="port-image" src="/imagen/Barrick/S3.jpg" alt="">
                    <div class="cap1">
                        <h3>Titulo</h3>
                        <p>Descripcion</p>
                    </div>
                    <div class="cap2">
                        <p class="text-center">Ver Modal</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4 filter Equipo2 Equipo1">
                <div class="each-item">
                    <img class="port-image" src="/imagen/Barrick/S4.jpg" alt="">
                    <div class="cap1">
                        <h3>Titulo</h3>
                        <p>Descripcion</p>
                    </div>
                    <div class="cap2">
                        <p class="text-center">Ver Modal</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4 filter Equipo3 Equipo2">
                <div class="each-item">
                    <img class="port-image" src="/imagen/Barrick/S6.jpg" alt="">
                    <div class="cap1">
                        <h3>Titulo</h3>
                        <p>Descripcion</p>
                    </div>
                    <div class="cap2">
                        <p class="text-center">Ver Modal</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4 filter Equipo1">
                <div class="each-item">
                    <img class="port-image" src="/imagen/Barrick/S7.jpg" alt="">
                    <div class="cap1">
                        <h3>Titulo</h3>
                        <p>Descripcion</p>
                    </div>
                    <div class="cap2">
                        <p class="text-center">Ver Modal</p>
                    </div>
                </div>
            </div>
        </div>

    </div>

</body>




<script>
    $(document).ready(function() {

        $(".filter-button").click(function() {
            var value = $(this).attr('data-filter');

            if (value == "all") {
                $('.filter').show('1000');
            } else {
                $(".filter").not('.' + value).hide('3000');
                $('.filter').filter('.' + value).show('3000');
            }
        });

    });
</script>

<script type="text/javascript">
    const slider = document.querySelector(".slider");
    const nextBtn = document.querySelector(".next-btn");
    const prevBtn = document.querySelector(".prev-btn");
    const slides = document.querySelectorAll(".slide");
    const slideIcons = document.querySelectorAll(".slide-icon");
    const numberOfSlides = slides.length;
    var slideNumber = 0;

    //image slider next button
    nextBtn.addEventListener("click", () => {
        slides.forEach((slide) => {
            slide.classList.remove("active");
        });
        slideIcons.forEach((slideIcon) => {
            slideIcon.classList.remove("active");
        });

        slideNumber++;

        if (slideNumber > (numberOfSlides - 1)) {
            slideNumber = 0;
        }

        slides[slideNumber].classList.add("active");
        slideIcons[slideNumber].classList.add("active");
    });

    //image slider previous button
    prevBtn.addEventListener("click", () => {
        slides.forEach((slide) => {
            slide.classList.remove("active");
        });
        slideIcons.forEach((slideIcon) => {
            slideIcon.classList.remove("active");
        });

        slideNumber--;

        if (slideNumber < 0) {
            slideNumber = numberOfSlides - 1;
        }

        slides[slideNumber].classList.add("active");
        slideIcons[slideNumber].classList.add("active");
    });

    //image slider autoplay
    var playSlider;

    var repeater = () => {
        playSlider = setInterval(function() {
            slides.forEach((slide) => {
                slide.classList.remove("active");
            });
            slideIcons.forEach((slideIcon) => {
                slideIcon.classList.remove("active");
            });

            slideNumber++;

            if (slideNumber > (numberOfSlides - 1)) {
                slideNumber = 0;
            }

            slides[slideNumber].classList.add("active");
            slideIcons[slideNumber].classList.add("active");
        }, 5000);
    }
    repeater();

    //stop the image slider autoplay on mouseover
    slider.addEventListener("mouseover", () => {
        clearInterval(playSlider);
    });

    //start the image slider autoplay again on mouseout
    slider.addEventListener("mouseout", () => {
        repeater();
    });
</script>

</html>