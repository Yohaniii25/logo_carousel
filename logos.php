<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- <link rel="stylesheet" href="./style.css"> -->
    <script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
</head>
<style>
    /* Slider */
    .slick-slide {
        margin: 0px 20px;
    }

    .slick-slide img {
        width: 200px;
        height: 200px;
    }

    .slick-slider {
        position: relative;
        display: block;
        box-sizing: border-box;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
        -webkit-touch-callout: none;
        -khtml-user-select: none;
        -ms-touch-action: pan-y;
        touch-action: pan-y;
        -webkit-tap-highlight-color: transparent;
    }

    .slick-list {
        position: relative;
        display: block;
        overflow: hidden;
        margin: 0;
        padding: 0;
    }

    .slick-list:focus {
        outline: none;
    }

    .slick-list.dragging {
        cursor: pointer;
        cursor: hand;
    }

    .slick-slider .slick-track,
    .slick-slider .slick-list {
        -webkit-transform: translate3d(0, 0, 0);
        -moz-transform: translate3d(0, 0, 0);
        -ms-transform: translate3d(0, 0, 0);
        -o-transform: translate3d(0, 0, 0);
        transform: translate3d(0, 0, 0);
    }

    .slick-track {
        position: relative;
        top: 0;
        left: 0;
        display: block;
    }

    .slick-track:before,
    .slick-track:after {
        display: table;
        content: '';
    }

    .slick-track:after {
        clear: both;
    }

    .slick-loading .slick-track {
        visibility: hidden;
    }

    .slick-slide {
        display: none;
        float: left;
        height: 100%;
        min-height: 1px;
    }

    [dir='rtl'] .slick-slide {
        float: right;
    }

    .slick-slide img {
        display: block;
    }

    .slick-slide.slick-loading img {
        display: none;
    }

    .slick-slide.dragging img {
        pointer-events: none;
    }

    .slick-initialized .slick-slide {
        display: block;
    }

    .slick-loading .slick-slide {
        visibility: hidden;
    }

    .slick-vertical .slick-slide {
        display: block;
        height: auto;
        border: 1px solid transparent;
    }

    .slick-arrow.slick-hidden {
        display: none;
    }

    .imgcls {
  display: block;
  width: 60%;
  margin-left: auto;
  margin-right: auto;
  text-align: center;
  /*font-weight: 500;*/
  font-weight: bolder;
color: black;
}
</style>

<body>
<!--     <script>
        $(document).ready(function () {
            $('.customer-logos').slick({
                slidesToShow: 3,
                slidesToScroll: 2,
                autoplay: true,
                autoplaySpeed: 4000,
                arrows: false,
                dots: false,
                pauseOnHover: false,
                responsive: [{
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 2
                    }
                }, {
                    breakpoint: 520,
                    settings: {
                        slidesToShow: 2
                    }
                }]
            });
        });
    </script> -->
    <center>
        <div>

            <h2>Institutions</h2>

        </div><br>
    </center>
    <div class="container">
        <section class="customer-logos slider">
            <div class="slide">
                <a href="https://www.meteo.gov.lk/index.php?lang=en"><img class="imgcls" alt="" src="images/home/logo33.png">
                    <p class="imgcls">
                        Department of
                        Meteorology</p>
                </a>
            </div>
            <div class="slide">
                <a href="http://www.drr.dmc.gov.lk/index.php?lang=en"><img class="imgcls" alt="" src="images/home/logo1.png">
                    <p class="imgcls">Disaster Management
                        Center</p>
                </a>
            </div>
            <div class="slide">
                <a href="http://www.nbro.gov.lk/index.php?lang=en"><img class="imgcls" alt="" src="images/home/logo44.png"
                       >
                    <p class="imgcls">National Building
                        Research Organization</p>
                </a>
            </div>
            <div class="slide">
                <a href="http://www.ndrsc.gov.lk/web/"><img class="imgcls" alt="" src="images/home/logo2.png"
                       >
                    <p class="imgcls">National Disaster
                        Relief Service Center</p>
                </a>
            </div>

        </section>
    </div><br>
    <center>
        <div>

            <h2>Important Links</h2>

        </div><br>
    </center>
    <div class="container">

          <section class="customer-logos slider">
            <div class="slide">
                <a href="https://www.defence.lk/"><img class="imgcls" alt="" src="images/home/i1.jpg">
                    <p class="imgcls">
                        Ministry of Defence</p>
                </a>
            </div>
            <div class="slide">
                <a href="http://www.irrigationmin.gov.lk/"><img class="imgcls" alt="" src="images/home/Irrigation logo.jpg">
                    <p class="imgcls">Ministry of Irrigation</p>
                </a>
            </div>
            <div class="slide">
                <a href="http://mahaweli.gov.lk"><img class="imgcls" alt="" src="images/home/i3.jpg"
                       >
                    <p class="imgcls">Mahawali Authority</p>
                </a>
            </div>
            <div class="slide">
                <a href="http://www.irrigationmin.gov.lk/"><img class="imgcls" alt="" src="images/home/Irrigation logo.jpg">
                    <p class="imgcls">Ministry of Irrigation</p>
                </a>
            </div>

        </section>


  
    </div>
</body>

</html>