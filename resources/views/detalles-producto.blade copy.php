<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title> Click Saludable Express {{$detalles_productos->photo_min_reverso_link}}</title>
    <meta name="description" content= {{$detalles_productos->photo_link_reverso_title}} />
    <link rel="stylesheet" href="{{asset('assets/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:400,500,600,700,800&amp;subset=latin-ext">
    <link rel="stylesheet" href="{{asset('assets/fonts/fontawesome-all.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/fonts/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/fonts/fontawesome5-overrides.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/best-carousel-slide.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/Brands.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/Footer-Dark.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/css/lightbox.min.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.css">
    
    <link rel="stylesheet" href="{{asset('assets/css/Simple-Slider.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css">
    <link rel="stylesheet" href="{{asset('assets/css/Lightbox-Gallery.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/Navigation-Clean.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/Navigation-with-Search.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/Registration-Form-with-Photo.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/card-carousel.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/Social-Icons.css')}}">

    <link rel="stylesheet" href="{{asset('assets/css/styles.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/gallery-products.css')}}">
</head>

<body>
    <section id="top-header">
        <div class="container">
            <div class="row">
                
              <div class="col-md-12 col-lg-2 col-xl-2 text-center">
                <a href="https://www.facebook.com/clicksaludableexpress-107186111415243" target="_blank">
                    <i class="fab fa-facebook-square top-header"></i>
                </a>
                <a href="https://www.instagram.com/clicksaludableexpress/" target="_blank">
                    <i class="fab fa-instagram top-header"></i>
                </a>
                <a href="https://api.whatsapp.com/send?phone=584248164599" target="_blank">
                    <i class="fab fa-whatsapp top-header"></i>
                </a>
            </div>
                <div
                    class="col-md-12 col-lg-5 col-xl-5 offset-0 offset-md-0 offset-lg-0 text-center"><i class="fa fa-envelope top-email"></i><a class="text-success" data-bs-hover-animate="bounce" href="mailto:clicksaludableexpress@gmail.com" target="_blank"><span class="cabecera-correo"><strong>&nbsp; clicksaludableexpress@gmail.com</strong></span></a></div>
            <div
                class="col-md-12 col-lg-5 col-xl-5 text-center"><i class="fa fa-map-marker top-lugar"></i><span id="cabezera-lugar"><strong>&nbsp; Lecheria, Edo. Anzoátegui. Venezuela</strong></span></div>
        </div>
        </div>
    </section>
    <header>
        <nav class="navbar navbar-light navbar-expand-lg mobile">
            <div class="container"><a href="{{route('inicio')}}"><img id="logo" class="img-fluid" src="{{asset('assets/img/logo-clicksaludableexpress.webp')}}"></a><a class="navbar-brand" href="#"><br></a><button data-toggle="collapse" class="navbar-toggler .menu" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navcol-1">
                    <ul class="nav navbar-nav mx-auto">
                        <li class="nav-item" role="presentation"><a class="nav-link text-success" href="{{route('inicio')}}" style="font-size: 18px;"><strong>Inicio</strong></a></li>
                        <li class="nav-item" role="presentation"><a class="nav-link text-success " href="{{route('productos')}}" style="font-size: 18px;"><strong>Productos</strong></a></li>
                        <li class="nav-item" role="presentation"><a class="nav-link text-success" href="{{route('marcas')}}" style="font-size: 18px;"><strong>Marcas</strong></a></li>
                        <li class="nav-item" role="presentation"><a class="nav-link text-success border-secondary" href="{{route('about')}}" style="font-size: 18px;"><strong>Nosotros</strong></a></li>
                        <li class="nav-item" role="presentation"><a class="nav-link text-success" href="{{route('contacto')}}" style="font-size: 18px;"><strong>Contacto</strong></a></li>
                    </ul>
            </div>
            </div>
        </nav>
    </header>



<!--    FOOTER    -->

<div class="footer-dark">
  <footer>
      <div class="container">
          <div class="row">
              <div class="col-sm-12 col-md-3 col-lg-2 item">
                  <h3>Click Saludable Express</h3>
                  <ul></ul><img id="logo-footer" class="img-fluid" src="{{asset('assets/img/logo-clicksaludableexpress.webp')}}"></div>
              <div class="col-sm-12 col-md-7 col-lg-5">
                  <p class="text-justify">Click Saludable Express tu Mejor opción en alimentos&nbsp;saludables de calidad sin gluten ( gluten free) ,libres de tacc, sin azúcar (sugar Free) , veganos, orgánicos, NON/GMO,( no transgénicos), Libre de Lactosa,&nbsp;ideal&nbsp;
                      para todas las personas que poseen un estilo de vida&nbsp; vegetariano, vegano, celíacos o con condiciones como por ejemplo: intolerancia a la lactosa, diabéticos entre otras o simplemente consumidores con altos estándares
                      en sus hábitos alimenticios.&nbsp;</p>
              </div>
              <div class="col-sm-12 col-md-2 col-lg-2 item">
                  <h3>Menu</h3>
                  <ul>
                      <li><a href="{{route('inicio')}}">Inicio</a></li>
                      <li><a href="{{route('productos')}}">Productos</a></li>
                      <li><a href="{{route('marcas')}}">Marcas</a></li>
                      <li><a href="{{route('about')}}">Nosotros</a></li>
                      <li><a href="{{route('contacto')}}">Contacto</a></li>
                  </ul>
              </div>
              <div class="col-sm-12 col-md-12 col-lg-3 item text">
                  <h3>Redes Sociales</h3>
                  <hr class="d-inline-block"><a href="https://www.facebook.com/clicksaludableexpress-107186111415243" target="_blank"><i class="fab fa-facebook-f" id="facebook-footer"></i></a><a href="https://www.instagram.com/clicksaludableexpress/" target="_blank"><i class="fab fa-instagram" id="footer-instagram"></i></a>
                  <a
                      href="https://api.whatsapp.com/send?phone=584248164599" target="_blank"><i class="fab fa-whatsapp" id="whatsapp-footer"></i></a>
              </div>
          </div>
          <p class="copyright">Click Saludable Express © 2021</p>
      </div>
  </footer>
</div>
</body>
<script src="{{asset('assets/js/jquery.min.js')}}"></script>
<script src="{{asset('assets/bootstrap/js/bootstrap.min.js')}}"></script>

<script src="{{asset('assets/js/bs-init.js')}}"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/js/lightbox.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.3.1/js/swiper.jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/owl.carousel.js"></script>



<script src="{{asset('assets/js/owl-carousel.js')}}"></script>

<script src="https://unpkg.com/swiper/swiper-bundle.js"></script>

<script src="{{asset('assets/js/Simple-Slider.js')}}"></script>

<script src="{{asset('assets/js/Card-Carousel.js')}}"></script>

<script>
  $(document).ready(function(){

$(".tb").hover(function(){

$(".tb").removeClass("tb-active");
$(this).addClass("tb-active");

current_fs = $(".active");

next_fs = $(this).attr('id');
next_fs = "#" + next_fs + "1";

$("fieldset").removeClass("active");
$(next_fs).addClass("active");

current_fs.animate({}, {
step: function() {
current_fs.css({
'display': 'none',
'position': 'relative'
});
next_fs.css({
'display': 'block'
});
}
});
});

});
  
  </script>


</html>