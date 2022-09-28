<style>
    .sliderft3 {
        position: relative;
        background: #000116;
        width: 1080px;
        min-height: 500px;
        margin: 20px;
        overflow: hidden;
        border-radius: 10px;
    }

    .sliderft3 .slideft3 {
        position: absolute;
        width: 100%;
        height: 100%;
        clip-path: circle(0% at 0 50%);
    }

    .sliderft3 .slideft3.active {
        clip-path: circle(150% at 0 50%);
        transition: 4s;
    }

    .sliderft3 .slideft3 img {
        position: absolute;
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .sliderft3 .slideft3 .infoft3 {
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

    .sliderft3 .slideft3 .infoft3 h2 {
        font-size: 2em;
        font-weight: 800;
    }

    .sliderft3 .slideft3 .infoft3 p {
        font-size: 1em;
        font-weight: 400;
    }

    .navigationft3 {
        height: 800px;
        display: flex;
        align-items: center;
        justify-content: space-between;
        opacity: 0;
        transition: opacity 0.5s ease;
    }

    .sliderft3:hover .navigationft3 {
        opacity: 1;
    }

    .prev-btnft3,
    .next-btnft3 {
        z-index: 999;
        font-size: 2em;
        color: #222;
        background: rgba(255, 255, 255, 0.8);
        padding: 10px;
        cursor: pointer;
    }

    .prev-btnft3 {
        border-top-right-radius: 3px;
        border-bottom-right-radius: 3px;
    }

    .next-btnft3 {
        border-top-left-radius: 3px;
        border-bottom-left-radius: 3px;
    }

    .navigation-visibilityft3 {
        z-index: 999;
        display: flex;
        justify-content: center;
    }

    .navigation-visibilityft3 .slide-iconft3 {
        z-index: 999;
        background: rgba(255, 255, 255, 0.5);
        width: 20px;
        height: 10px;
        transform: translateY(-50px);
        margin: 0 6px;
        border-radius: 2px;
        box-shadow: 0 5px 25px rgb(1 1 1 / 20%);
    }

    .navigation-visibilityft3 .slide-iconft3.active {
        background: #F5731D;
    }

    @media (max-width: 900px) {
        .sliderft3 {
            width: 100%;
        }

        .sliderft3 .slideft3 .infoft3 {
            position: relative;
            width: 80%;
            margin-left: auto;
            margin-right: auto;
        }
    }

    @media (max-width: 500px) {
        .sliderft3 .slideft3 .infoft3 h2 {
            font-size: 1.8em;
            line-height: 40px;
        }

        .sliderft3 .slideft3 .infoft3 p {
            font-size: 0.9em;
        }
    }
</style>


<div class="col-md-4 filter Equipo1">
    <div class="each-item">
        <img class="port-image" src="/imagen/Barrick/CamiónGrúaM40RAM/Camión Grúa M40 RAM_pages-to-jpg-0001.jpg" alt="">
        <div class="cap1">
            <img src="/imagen/Barrick/LogoBlanco.png" style="margin-top: 8px;" height="60" alt="" />
        </div>
        <div class="cap2" style="text-align: center;">
            <a type="button" class="btn" style="background-color: rgba(15, 15, 15); color: #fff;" data-bs-toggle="modal" data-bs-target="#modalCamionGruaM40RAM">
                Ver detalles
            </a>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade " id="modalCamionGruaM40RAM" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" style="width: 100%;">

    <div class="modal-dialog modal-xl" style=" margin-top: 1px;">
        <div class="modal-content">

            <div class="modal-body">

                <div class="sliderft3">
                    <div class="slideft3">
                        <img src="/imagen/Barrick/CamiónGrúaM40RAM/Camión Grúa M40 RAM_pages-to-jpg-0002.jpg" alt="">
                    </div>
                    <div class="slideft3">
                        <img src="/imagen/Barrick/CamiónGrúaM40RAM/Camión Grúa M40 RAM_pages-to-jpg-0003.jpg" alt="">
                    </div>
                    <div class="slideft3 active">
                        <img src="/imagen/Barrick/CamiónGrúaM40RAM/Camión Grúa M40 RAM_pages-to-jpg-0004.jpg" alt="">
                    </div>
                    <div class="slideft3">
                        <img src="/imagen/Barrick/CamiónGrúaM40RAM/Camión Grúa M40 RAM_pages-to-jpg-0005.jpg" alt="">
                    </div>
                    <div class="slideft3">
                        <img src="/imagen/Barrick/CamiónGrúaM40RAM/Camión Grúa M40 RAM_pages-to-jpg-0006.jpg" alt="">
                    </div>
                    <div class="slideft3">
                        <img src="/imagen/Barrick/CamiónGrúaM40RAM/Camión Grúa M40 RAM_pages-to-jpg-0007.jpg" alt="">
                    </div>
                    <div class="navigationft3">
                        <i class="fas fa-chevron-left prev-btnft3"></i>
                        <i class="fas fa-chevron-right next-btnft3"></i>
                    </div>
                    <div class="navigation-visibilityft3">
                        <div class="slide-iconft3"></div>
                        <div class="slide-iconft3"></div>
                        <div class="slide-iconft3 active"></div>
                        <div class="slide-iconft3"></div>
                        <div class="slide-iconft3"></div>
                        <div class="slide-iconft3"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    const sliderft3 = document.querySelector(".sliderft3");
    const nextBtnft3 = document.querySelector(".next-btnft3");
    const prevBtnft3 = document.querySelector(".prev-btnft3");
    const slidesft3 = document.querySelectorAll(".slideft3");
    const slideIconsft3 = document.querySelectorAll(".slide-iconft3");
    const numberOfSlidesft3 = slidesft3.length;
    var slideNumberft3 = 0;

    //image slider next button
    nextBtnft3.addEventListener("click", () => {
        slidesft3.forEach((slide) => {
            slide.classList.remove("active");
        });
        slideIconsft3.forEach((slideIcon) => {
            slideIcon.classList.remove("active");
        });

        slideNumberft3++;

        if (slideNumberft3 > (numberOfSlidesft3 - 1)) {
            slideNumberft3 = 0;
        }

        slidesft3[slideNumberft3].classList.add("active");
        slideIconsft3[slideNumberft3].classList.add("active");
    });

    //image slider previous button
    prevBtnft3.addEventListener("click", () => {
        slidesft3.forEach((slide) => {
            slide.classList.remove("active");
        });
        slideIconsft3.forEach((slideIcon) => {
            slideIcon.classList.remove("active");
        });

        slideNumberft3--;

        if (slideNumberft3 < 0) {
            slideNumberft3 = numberOfSlidesft3 - 1;
        }

        slidesft3[slideNumberft3].classList.add("active");
        slideIconsft3[slideNumberft3].classList.add("active");
    });

    //image slider autoplay
    var playSlider;

    var repeater = () => {
        playSlider = setInterval(function() {
            slidesft3.forEach((slide) => {
                slide.classList.remove("active");
            });
            slideIconsft3.forEach((slideIcon) => {
                slideIcon.classList.remove("active");
            });

            slideNumberft3++;

            if (slideNumberft3 > (numberOfSlidesft3 - 1)) {
                slideNumberft3 = 0;
            }

            slidesft3[slideNumberft3].classList.add("active");
            slideIconsft3[slideNumberft3].classList.add("active");
        }, 5000);
    }
    repeater();

    //stop the image slider autoplay on mouseover
    sliderft3.addEventListener("mouseover", () => {
        clearInterval(playSlider);
    });

    //start the image slider autoplay again on mouseout
    sliderft3.addEventListener("mouseout", () => {
        repeater();
    });
</script>