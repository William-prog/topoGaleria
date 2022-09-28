<style>
    .sliderft2 {
        position: relative;
        background: #000116;
        width: 1080px;
        min-height: 500px;
        margin: 20px;
        overflow: hidden;
        border-radius: 10px;
    }

    .sliderft2 .slideft2 {
        position: absolute;
        width: 100%;
        height: 100%;
        clip-path: circle(0% at 0 50%);
    }

    .sliderft2 .slideft2.active {
        clip-path: circle(150% at 0 50%);
        transition: 4s;
    }

    .sliderft2 .slideft2 img {
        position: absolute;
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .sliderft2 .slideft2 .infoft2 {
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

    .sliderft2 .slideft2 .infoft2 h2 {
        font-size: 2em;
        font-weight: 800;
    }

    .sliderft2 .slideft2 .infoft2 p {
        font-size: 1em;
        font-weight: 400;
    }

    .navigationft2 {
        height: 800px;
        display: flex;
        align-items: center;
        justify-content: space-between;
        opacity: 0;
        transition: opacity 0.5s ease;
    }

    .sliderft2:hover .navigationft2 {
        opacity: 1;
    }

    .prev-btnft2,
    .next-btnft2 {
        z-index: 999;
        font-size: 2em;
        color: #222;
        background: rgba(255, 255, 255, 0.8);
        padding: 10px;
        cursor: pointer;
    }

    .prev-btnft2 {
        border-top-right-radius: 3px;
        border-bottom-right-radius: 3px;
    }

    .next-btnft2 {
        border-top-left-radius: 3px;
        border-bottom-left-radius: 3px;
    }

    .navigation-visibilityft2 {
        z-index: 999;
        display: flex;
        justify-content: center;
    }

    .navigation-visibilityft2 .slide-iconft2 {
        z-index: 999;
        background: rgba(255, 255, 255, 0.5);
        width: 20px;
        height: 10px;
        transform: translateY(-50px);
        margin: 0 6px;
        border-radius: 2px;
        box-shadow: 0 5px 25px rgb(1 1 1 / 20%);
    }

    .navigation-visibilityft2 .slide-iconft2.active {
        background: #F5731D;
    }

    @media (max-width: 900px) {
        .sliderft2 {
            width: 100%;
        }

        .sliderft2 .slideft2 .infoft2 {
            position: relative;
            width: 80%;
            margin-left: auto;
            margin-right: auto;
        }
    }

    @media (max-width: 500px) {
        .sliderft2 .slideft2 .infoft2 h2 {
            font-size: 1.8em;
            line-height: 40px;
        }

        .sliderft2 .slideft2 .infoft2 p {
            font-size: 0.9em;
        }
    }
</style>


<div class="col-md-4 filter Equipo1">
    <div class="each-item">
        <img class="port-image" src="/imagen/Barrick/CamiónGrúaM30RAM/Camión grúa M30 RAM_page-0001.jpg" alt="">
        <div class="cap1">
            <img src="/imagen/Barrick/LogoBlanco.png" style="margin-top: 8px;" height="60" alt="" />
        </div>
        <div class="cap2" style="text-align: center;">
            <a type="button" class="btn" style="background-color: rgba(15, 15, 15); color: #fff;" data-bs-toggle="modal" data-bs-target="#modalCamionGruaM30RAM">
                Ver detalles
            </a>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade " id="modalCamionGruaM30RAM" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" style="width: 100%;">

    <div class="modal-dialog modal-xl" style=" margin-top: 1px;">
        <div class="modal-content">

            <div class="modal-body">

                <div class="sliderft2">
                    <div class="slideft2">
                        <img src="/imagen/Barrick/CamiónGrúaM30RAM/Camión grúa M30 RAM_page-0002.jpg" alt="">
                    </div>
                    <div class="slideft2">
                        <img src="/imagen/Barrick/CamiónGrúaM30RAM/Camión grúa M30 RAM_page-0003.jpg" alt="">
                    </div>
                    <div class="slideft2 active">
                        <img src="/imagen/Barrick/CamiónGrúaM30RAM/Camión grúa M30 RAM_page-0004.jpg" alt="">
                    </div>
                    <div class="slideft2">
                        <img src="/imagen/Barrick/CamiónGrúaM30RAM/Camión grúa M30 RAM_page-0005.jpg" alt="">
                    </div>
                    <div class="slideft2">
                        <img src="/imagen/Barrick/CamiónGrúaM30RAM/Camión grúa M30 RAM_page-0006.jpg" alt="">
                    </div>
                    <div class="slideft2">
                        <img src="/imagen/Barrick/CamiónGrúaM30RAM/Camión grúa M30 RAM_page-0007.jpg" alt="">
                    </div>
                    <div class="navigationft2">
                        <i class="fas fa-chevron-left prev-btnft2"></i>
                        <i class="fas fa-chevron-right next-btnft2"></i>
                    </div>
                    <div class="navigation-visibilityft2">
                        <div class="slide-iconft2"></div>
                        <div class="slide-iconft2"></div>
                        <div class="slide-iconft2 active"></div>
                        <div class="slide-iconft2"></div>
                        <div class="slide-iconft2"></div>
                        <div class="slide-iconft2"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    const sliderft2 = document.querySelector(".sliderft2");
    const nextBtnft2 = document.querySelector(".next-btnft2");
    const prevBtnft2 = document.querySelector(".prev-btnft2");
    const slidesft2 = document.querySelectorAll(".slideft2");
    const slideIconsft2 = document.querySelectorAll(".slide-iconft2");
    const numberOfSlidesft2 = slidesft2.length;
    var slideNumberft2 = 0;

    //image slider next button
    nextBtnft2.addEventListener("click", () => {
        slidesft2.forEach((slide) => {
            slide.classList.remove("active");
        });
        slideIconsft2.forEach((slideIcon) => {
            slideIcon.classList.remove("active");
        });

        slideNumberft2++;

        if (slideNumberft2 > (numberOfSlidesft2 - 1)) {
            slideNumberft2 = 0;
        }

        slidesft2[slideNumberft2].classList.add("active");
        slideIconsft2[slideNumberft2].classList.add("active");
    });

    //image slider previous button
    prevBtnft2.addEventListener("click", () => {
        slidesft2.forEach((slide) => {
            slide.classList.remove("active");
        });
        slideIconsft2.forEach((slideIcon) => {
            slideIcon.classList.remove("active");
        });

        slideNumberft2--;

        if (slideNumberft2 < 0) {
            slideNumberft2 = numberOfSlidesft2 - 1;
        }

        slidesft2[slideNumberft2].classList.add("active");
        slideIconsft2[slideNumberft2].classList.add("active");
    });

    //image slider autoplay
    var playSlider;

    var repeater = () => {
        playSlider = setInterval(function() {
            slidesft2.forEach((slide) => {
                slide.classList.remove("active");
            });
            slideIconsft2.forEach((slideIcon) => {
                slideIcon.classList.remove("active");
            });

            slideNumberft2++;

            if (slideNumberft2 > (numberOfSlidesft2 - 1)) {
                slideNumberft2 = 0;
            }

            slidesft2[slideNumberft2].classList.add("active");
            slideIconsft2[slideNumberft2].classList.add("active");
        }, 5000);
    }
    repeater();

    //stop the image slider autoplay on mouseover
    sliderft2.addEventListener("mouseover", () => {
        clearInterval(playSlider);
    });

    //start the image slider autoplay again on mouseout
    sliderft2.addEventListener("mouseout", () => {
        repeater();
    });
</script>