<style>
    .sliderft5 {
        position: relative;
        background: #000116;
        width: 1080px;
        min-height: 500px;
        margin: 20px;
        overflow: hidden;
        border-radius: 10px;
    }

    .sliderft5 .slideft5 {
        position: absolute;
        width: 100%;
        height: 100%;
        clip-path: circle(0% at 0 50%);
    }

    .sliderft5 .slideft5.active {
        clip-path: circle(150% at 0 50%);
        transition: 4s;
    }

    .sliderft5 .slideft5 img {
        position: absolute;
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .sliderft5 .slideft5 .infoft5 {
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

    .sliderft5 .slideft5 .infoft5 h2 {
        font-size: 2em;
        font-weight: 800;
    }

    .sliderft5 .slideft5 .infoft5 p {
        font-size: 1em;
        font-weight: 400;
    }

    .navigationft5 {
        height: 800px;
        display: flex;
        align-items: center;
        justify-content: space-between;
        opacity: 0;
        transition: opacity 0.5s ease;
    }

    .sliderft5:hover .navigationft5 {
        opacity: 1;
    }

    .prev-btnft5,
    .next-btnft5 {
        z-index: 999;
        font-size: 2em;
        color: #222;
        background: rgba(255, 255, 255, 0.8);
        padding: 10px;
        cursor: pointer;
    }

    .prev-btnft5 {
        border-top-right-radius: 3px;
        border-bottom-right-radius: 3px;
    }

    .next-btnft5 {
        border-top-left-radius: 3px;
        border-bottom-left-radius: 3px;
    }

    .navigation-visibilityft5 {
        z-index: 999;
        display: flex;
        justify-content: center;
    }

    .navigation-visibilityft5 .slide-iconft5 {
        z-index: 999;
        background: rgba(255, 255, 255, 0.5);
        width: 20px;
        height: 10px;
        transform: translateY(-50px);
        margin: 0 6px;
        border-radius: 2px;
        box-shadow: 0 5px 25px rgb(1 1 1 / 20%);
    }

    .navigation-visibilityft5 .slide-iconft5.active {
        background: #F5731D;
    }

    @media (max-width: 900px) {
        .sliderft5 {
            width: 100%;
        }

        .sliderft5 .slideft5 .infoft5 {
            position: relative;
            width: 80%;
            margin-left: auto;
            margin-right: auto;
        }
    }

    @media (max-width: 500px) {
        .sliderft5 .slideft5 .infoft5 h2 {
            font-size: 1.8em;
            line-height: 40px;
        }

        .sliderft5 .slideft5 .infoft5 p {
            font-size: 0.9em;
        }
    }
</style>


<div class="col-md-4 filter Equipo1">
    <div class="each-item">
        <img class="port-image" src="/imagen/Barrick/CargadordeExplosivoM40RAM/Cargador de Explosivo M40 RAM_page-0001.jpg" alt="">
        <div class="cap1">
            <img src="/imagen/Barrick/LogoBlanco.png" style="margin-top: 8px;" height="60" alt="" />
        </div>
        <div class="cap2" style="text-align: center;">
            <a type="button" class="btn" style="background-color: rgba(15, 15, 15); color: #fff;" data-bs-toggle="modal" data-bs-target="#modalCargadordeExplosivoM40RAM">
                Ver detalles
            </a>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade " id="modalCargadordeExplosivoM40RAM" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" style="width: 100%;">

    <div class="modal-dialog modal-xl" style=" margin-top: 1px;">
        <div class="modal-content">

            <div class="modal-body">

                <div class="sliderft5">
                    <div class="slideft5">
                        <img src="/imagen/Barrick/CargadordeExplosivoM40RAM/Cargador de Explosivo M40 RAM_page-0002.jpg" alt="">
                    </div>
                    <div class="slideft5">
                        <img src="/imagen/Barrick/CargadordeExplosivoM40RAM/Cargador de Explosivo M40 RAM_page-0003.jpg" alt="">
                    </div>
                    <div class="slideft5 active">
                        <img src="/imagen/Barrick/CargadordeExplosivoM40RAM/Cargador de Explosivo M40 RAM_page-0004.jpg" alt="">
                    </div>
                    <div class="slideft5">
                        <img src="/imagen/Barrick/CargadordeExplosivoM40RAM/Cargador de Explosivo M40 RAM_page-0005.jpg" alt="">
                    </div>
                    <div class="slideft5">
                        <img src="/imagen/Barrick/CargadordeExplosivoM40RAM/Cargador de Explosivo M40 RAM_page-0006.jpg" alt="">
                    </div>
                    <div class="slideft5">
                        <img src="/imagen/Barrick/CargadordeExplosivoM40RAM/Cargador de Explosivo M40 RAM_page-0007.jpg" alt="">
                    </div>
                    <div class="navigationft5">
                        <i class="fas fa-chevron-left prev-btnft5"></i>
                        <i class="fas fa-chevron-right next-btnft5"></i>
                    </div>
                    <div class="navigation-visibilityft5">
                        <div class="slide-iconft5"></div>
                        <div class="slide-iconft5"></div>
                        <div class="slide-iconft5 active"></div>
                        <div class="slide-iconft5"></div>
                        <div class="slide-iconft5"></div>
                        <div class="slide-iconft5"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    const sliderft5 = document.querySelector(".sliderft5");
    const nextBtnft5 = document.querySelector(".next-btnft5");
    const prevBtnft5 = document.querySelector(".prev-btnft5");
    const slidesft5 = document.querySelectorAll(".slideft5");
    const slideIconsft5 = document.querySelectorAll(".slide-iconft5");
    const numberOfSlidesft5 = slidesft5.length;
    var slideNumberft5 = 0;

    //image slider next button
    nextBtnft5.addEventListener("click", () => {
        slidesft5.forEach((slide) => {
            slide.classList.remove("active");
        });
        slideIconsft5.forEach((slideIcon) => {
            slideIcon.classList.remove("active");
        });

        slideNumberft5++;

        if (slideNumberft5 > (numberOfSlidesft5 - 1)) {
            slideNumberft5 = 0;
        }

        slidesft5[slideNumberft5].classList.add("active");
        slideIconsft5[slideNumberft5].classList.add("active");
    });

    //image slider previous button
    prevBtnft5.addEventListener("click", () => {
        slidesft5.forEach((slide) => {
            slide.classList.remove("active");
        });
        slideIconsft5.forEach((slideIcon) => {
            slideIcon.classList.remove("active");
        });

        slideNumberft5--;

        if (slideNumberft5 < 0) {
            slideNumberft5 = numberOfSlidesft5 - 1;
        }

        slidesft5[slideNumberft5].classList.add("active");
        slideIconsft5[slideNumberft5].classList.add("active");
    });

    //image slider autoplay
    var playSlider;

    var repeater = () => {
        playSlider = setInterval(function() {
            slidesft5.forEach((slide) => {
                slide.classList.remove("active");
            });
            slideIconsft5.forEach((slideIcon) => {
                slideIcon.classList.remove("active");
            });

            slideNumberft5++;

            if (slideNumberft5 > (numberOfSlidesft5 - 1)) {
                slideNumberft5 = 0;
            }

            slidesft5[slideNumberft5].classList.add("active");
            slideIconsft5[slideNumberft5].classList.add("active");
        }, 5000);
    }
    repeater();

    //stop the image slider autoplay on mouseover
    sliderft5.addEventListener("mouseover", () => {
        clearInterval(playSlider);
    });

    //start the image slider autoplay again on mouseout
    sliderft5.addEventListener("mouseout", () => {
        repeater();
    });
</script>