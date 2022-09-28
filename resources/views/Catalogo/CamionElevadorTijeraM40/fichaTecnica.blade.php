<style>
    .sliderft1 {
        position: relative;
        background: #000116;
        width: 1080px;
        min-height: 500px;
        margin: 20px;
        overflow: hidden;
        border-radius: 10px;
    }

    .sliderft1 .slide {
        position: absolute;
        width: 100%;
        height: 100%;
        clip-path: circle(0% at 0 50%);
    }

    .sliderft1 .slide.active {
        clip-path: circle(150% at 0 50%);
        transition: 4s;
    }

    .sliderft1 .slide img {
        position: absolute;
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .sliderft1 .slide .info {
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

    .sliderft1 .slide .info h2 {
        font-size: 2em;
        font-weight: 800;
    }

    .sliderft1 .slide .info p {
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

    .sliderft1:hover .navigation {
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
        .sliderft1 {
            width: 100%;
        }

        .sliderft1 .slide .info {
            position: relative;
            width: 80%;
            margin-left: auto;
            margin-right: auto;
        }
    }

    @media (max-width: 500px) {
        .sliderft1 .slide .info h2 {
            font-size: 1.8em;
            line-height: 40px;
        }

        .sliderft1 .slide .info p {
            font-size: 0.9em;
        }
    }
</style>

<div class="col-md-4 filter Equipo1">
    <div class="each-item">
        <img class="port-image" src="/imagen/Barrick/CamiónElevadorTijeraM40/Camión Elevador de Tijera M40 RAM_page-0001.jpg" alt="">
        <div class="cap1">
            <img src="/imagen/Barrick/LogoBlanco.png" style="margin-top: 8px;" height="60" alt="" />
        </div>
        <div class="cap2" style="text-align: center;">
            <a type="button" class="btn" style="background-color: rgba(15, 15, 15); color: #fff;" data-bs-toggle="modal" data-bs-target="#modalCamionElevadorTijeraM40">
                Ver detalles
            </a>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade " id="modalCamionElevadorTijeraM40" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" style="width: 100%;">

    <div class="modal-dialog modal-xl" style=" margin-top: 1px;">
        <div class="modal-content">

            <div class="modal-body">

                <div class="sliderft1">
                    <div class="slide">
                        <img src="/imagen/Barrick/CamiónElevadorTijeraM40/Camión Elevador de Tijera M40 RAM_page-0002.jpg" alt="">
                    </div>
                    <div class="slide">
                        <img src="/imagen/Barrick/CamiónElevadorTijeraM40/Camión Elevador de Tijera M40 RAM_page-0003.jpg" alt="">
                    </div>
                    <div class="slide active">
                        <img src="/imagen/Barrick/CamiónElevadorTijeraM40/Camión Elevador de Tijera M40 RAM_page-0004.jpg" alt="">
                    </div>
                    <div class="slide">
                        <img src="/imagen/Barrick/CamiónElevadorTijeraM40/Camión Elevador de Tijera M40 RAM_page-0005.jpg" alt="">
                    </div>
                    <div class="slide">
                        <img src="/imagen/Barrick/CamiónElevadorTijeraM40/Camión Elevador de Tijera M40 RAM_page-0006.jpg" alt="">
                    </div>
                    <div class="navigation">
                        <i class="fas fa-chevron-left prev-btn"></i>
                        <i class="fas fa-chevron-right next-btn"></i>
                    </div>
                    <div class="navigation-visibility">
                        <div class="slide-icon"></div>
                        <div class="slide-icon"></div>
                        <div class="slide-icon active"></div>
                        <div class="slide-icon"></div>
                        <div class="slide-icon"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    const slider = document.querySelector(".sliderft1");
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