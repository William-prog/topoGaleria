<style>
    .sliderft4 {
        position: relative;
        background: #000116;
        width: 1080px;
        min-height: 500px;
        margin: 20px;
        overflow: hidden;
        border-radius: 10px;
    }

    .sliderft4 .slideft4 {
        position: absolute;
        width: 100%;
        height: 100%;
        clip-path: circle(0% at 0 50%);
    }

    .sliderft4 .slideft4.active {
        clip-path: circle(150% at 0 50%);
        transition: 4s;
    }

    .sliderft4 .slideft4 img {
        position: absolute;
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .sliderft4 .slideft4 .infoft4 {
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

    .sliderft4 .slideft4 .infoft4 h2 {
        font-size: 2em;
        font-weight: 800;
    }

    .sliderft4 .slideft4 .infoft4 p {
        font-size: 1em;
        font-weight: 400;
    }

    .navigationft4 {
        height: 800px;
        display: flex;
        align-items: center;
        justify-content: space-between;
        opacity: 0;
        transition: opacity 0.5s ease;
    }

    .sliderft4:hover .navigationft4 {
        opacity: 1;
    }

    .prev-btnft4,
    .next-btnft4 {
        z-index: 999;
        font-size: 2em;
        color: #222;
        background: rgba(255, 255, 255, 0.8);
        padding: 10px;
        cursor: pointer;
    }

    .prev-btnft4 {
        border-top-right-radius: 3px;
        border-bottom-right-radius: 3px;
    }

    .next-btnft4 {
        border-top-left-radius: 3px;
        border-bottom-left-radius: 3px;
    }

    .navigation-visibilityft4 {
        z-index: 999;
        display: flex;
        justify-content: center;
    }

    .navigation-visibilityft4 .slide-iconft4 {
        z-index: 999;
        background: rgba(255, 255, 255, 0.5);
        width: 20px;
        height: 10px;
        transform: translateY(-50px);
        margin: 0 6px;
        border-radius: 2px;
        box-shadow: 0 5px 25px rgb(1 1 1 / 20%);
    }

    .navigation-visibilityft4 .slide-iconft4.active {
        background: #F5731D;
    }

    @media (max-width: 900px) {
        .sliderft4 {
            width: 100%;
        }

        .sliderft4 .slideft4 .infoft4 {
            position: relative;
            width: 80%;
            margin-left: auto;
            margin-right: auto;
        }
    }

    @media (max-width: 500px) {
        .sliderft4 .slideft4 .infoft4 h2 {
            font-size: 1.8em;
            line-height: 40px;
        }

        .sliderft4 .slideft4 .infoft4 p {
            font-size: 0.9em;
        }
    }
</style>


<div class="col-md-4 filter Equipo1">
    <div class="each-item">
        <img class="port-image" src="/imagen/Barrick/CargadordeExplosivoM30RAM/Cargador de Explosivo M30 RAM_page-0001.jpg" alt="">
        <div class="cap1">
            <img src="/imagen/Barrick/LogoBlanco.png" style="margin-top: 8px;" height="60" alt="" />
        </div>
        <div class="cap2" style="text-align: center;">
            <a type="button" class="btn" style="background-color: rgba(15, 15, 15); color: #fff;" data-bs-toggle="modal" data-bs-target="#modalCargadordeExplosivoM30RAM">
                Ver detalles
            </a>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade " id="modalCargadordeExplosivoM30RAM" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" style="width: 100%;">

    <div class="modal-dialog modal-xl" style=" margin-top: 1px;">
        <div class="modal-content">

            <div class="modal-body">

                <div class="sliderft4">
                    <div class="slideft4">
                        <img src="/imagen/Barrick/CargadordeExplosivoM30RAM/Cargador de Explosivo M30 RAM_page-0002.jpg" alt="">
                    </div>
                    <div class="slideft4">
                        <img src="/imagen/Barrick/CargadordeExplosivoM30RAM/Cargador de Explosivo M30 RAM_page-0003.jpg" alt="">
                    </div>
                    <div class="slideft4 active">
                        <img src="/imagen/Barrick/CargadordeExplosivoM30RAM/Cargador de Explosivo M30 RAM_page-0004.jpg" alt="">
                    </div>
                    <div class="slideft4">
                        <img src="/imagen/Barrick/CargadordeExplosivoM30RAM/Cargador de Explosivo M30 RAM_page-0005.jpg" alt="">
                    </div>
                    <div class="slideft4">
                        <img src="/imagen/Barrick/CargadordeExplosivoM30RAM/Cargador de Explosivo M30 RAM_page-0006.jpg" alt="">
                    </div>
                    <div class="slideft4">
                        <img src="/imagen/Barrick/CargadordeExplosivoM30RAM/Cargador de Explosivo M30 RAM_page-0007.jpg" alt="">
                    </div>
                    <div class="navigationft4">
                        <i class="fas fa-chevron-left prev-btnft4"></i>
                        <i class="fas fa-chevron-right next-btnft4"></i>
                    </div>
                    <div class="navigation-visibilityft4">
                        <div class="slide-iconft4"></div>
                        <div class="slide-iconft4"></div>
                        <div class="slide-iconft4 active"></div>
                        <div class="slide-iconft4"></div>
                        <div class="slide-iconft4"></div>
                        <div class="slide-iconft4"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    const sliderft4 = document.querySelector(".sliderft4");
    const nextBtnft4 = document.querySelector(".next-btnft4");
    const prevBtnft4 = document.querySelector(".prev-btnft4");
    const slidesft4 = document.querySelectorAll(".slideft4");
    const slideIconsft4 = document.querySelectorAll(".slide-iconft4");
    const numberOfSlidesft4 = slidesft4.length;
    var slideNumberft4 = 0;

    //image slider next button
    nextBtnft4.addEventListener("click", () => {
        slidesft4.forEach((slide) => {
            slide.classList.remove("active");
        });
        slideIconsft4.forEach((slideIcon) => {
            slideIcon.classList.remove("active");
        });

        slideNumberft4++;

        if (slideNumberft4 > (numberOfSlidesft4 - 1)) {
            slideNumberft4 = 0;
        }

        slidesft4[slideNumberft4].classList.add("active");
        slideIconsft4[slideNumberft4].classList.add("active");
    });

    //image slider previous button
    prevBtnft4.addEventListener("click", () => {
        slidesft4.forEach((slide) => {
            slide.classList.remove("active");
        });
        slideIconsft4.forEach((slideIcon) => {
            slideIcon.classList.remove("active");
        });

        slideNumberft4--;

        if (slideNumberft4 < 0) {
            slideNumberft4 = numberOfSlidesft4 - 1;
        }

        slidesft4[slideNumberft4].classList.add("active");
        slideIconsft4[slideNumberft4].classList.add("active");
    });

    //image slider autoplay
    var playSlider;

    var repeater = () => {
        playSlider = setInterval(function() {
            slidesft4.forEach((slide) => {
                slide.classList.remove("active");
            });
            slideIconsft4.forEach((slideIcon) => {
                slideIcon.classList.remove("active");
            });

            slideNumberft4++;

            if (slideNumberft4 > (numberOfSlidesft4 - 1)) {
                slideNumberft4 = 0;
            }

            slidesft4[slideNumberft4].classList.add("active");
            slideIconsft4[slideNumberft4].classList.add("active");
        }, 5000);
    }
    repeater();

    //stop the image slider autoplay on mouseover
    sliderft4.addEventListener("mouseover", () => {
        clearInterval(playSlider);
    });

    //start the image slider autoplay again on mouseout
    sliderft4.addEventListener("mouseout", () => {
        repeater();
    });
</script>