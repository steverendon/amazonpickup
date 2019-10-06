<?php require_once 'web/over/header.php'?>

<body style="text-align: center">

 <!-- menu -->

<?php require_once 'web/over/menu.php' ?>
<!-- carrusel -->
    <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <a href="index.php?view=registro"><img class="d-block w-100" src="web/img/banner/web-amazon10.png" alt="First slide"></a>
          <!-- <a href="index.php?view=web&v=planes"><img class="d-block w-100" src="web/img/banner/web-amazon10.png" alt="First slide"></a> -->
        </div>
      </div>
    </div>

    <!-- slider -->

    <div class="row justify-content-center">
        <div class="col-lg-12" style="padding: 3%">
            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel" data-interval="false">
              <div class="carousel-inner">
                <div class="carousel-item active" id="id">
                  <img class="d-block w-100" src="web/img/slider/carrusel1.png" alt="First slide">
                </div>
                <div class="carousel-item">
                  <img class="d-block w-100" src="web/img/slider/carrusel2.png" alt="Second slide">
                </div>
                <div class="carousel-item">
                  <img class="d-block w-100" src="web/img/slider/carrusel3.png" alt="Third slide">
                </div>
              </div>
              <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
            </div>
        </div>
    </div>

    <!-- image -->

    <img src="web/img/image/amazon-13.png" class="img-fluid">

    <br>

    <!-- titulo carrusel -->
    <br>
    <img src="web/img/slider/titulo-carrusel.png" class="img-fluid">


    <!-- slider 2 -->


    <div class="row justify-content-center">
        <div class="col-lg-12" style="padding: 3%">
            <div id="carrusel2" class="carousel slide" data-ride="carousel" data-interval="false">
                <div class="carousel-inner">
                  <div class="carousel-item active" id="id">
                    <a href="https://www.amazon.com/"><img class="d-block w-100" src="web/img/slider2/productos-01.png" alt="First slide"></a>
                  </div>
                  <div class="carousel-item">
                    <a href="https://www.amazon.com/"><img class="d-block w-100" src="web/img/slider2/productos-02.png" alt="Second slide"></a>
                  </div>
                  <div class="carousel-item">
                    <a href="https://www.amazon.com/"><img class="d-block w-100" src="web/img/slider2/productos-03.png" alt="Third slide"></a>
                  </div>
                  <div class="carousel-item">
                    <a href="https://www.amazon.com/"><img class="d-block w-100" src="web/img/slider2/productos-04.png" alt="Third slide"></a>
                  </div>
                </div>
              <a class="carousel-control-prev" href="#carrusel2" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next" href="#carrusel2" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
            </div>
        </div>
    </div>

    <a href="index.php?view=web&v=planes"><img src="web/img/image/amazon-14.png" class="img-fluid"></a>

<?php require_once 'web/over/footer.php' ?>

</body>
</html>
