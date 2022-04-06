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
<link rel="stylesheet" href="{{asset('assets/jquery-ui/jquery-ui.min.css')}}">
<link rel="stylesheet" href="{{asset('assets/css/styles.css')}}">



<script src="{{asset('assets/js/jquery.min.js')}}"></script>
<script src="{{asset('assets/bootstrap/js/bootstrap.min.js')}}"></script>
<script src="{{asset('assets/jquery-ui/jquery-ui.min.js')}}"></script>
<script src="{{asset('assets/js/bs-init.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/js/lightbox.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.3.1/js/swiper.jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/owl.carousel.js"></script>
<script src="{{asset('assets/js/owl-carousel.js')}}"></script>
<script src="https://unpkg.com/swiper/swiper-bundle.js"></script>
<script src="{{asset('assets/js/Simple-Slider.js')}}"></script>
<script src="{{asset('assets/js/Card-Carousel.js')}}"></script>

<script> 

$('#search').autocomplete({
    source: function(request,response) {
        $.ajax({

            url: "{{route('search.productos')}}",
            dataType: 'json',
            data:{
                term: request.term
            },
            success : function (data){
                response(data)
            }

        });
    }
});
 </script>