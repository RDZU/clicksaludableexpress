<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <link rel="shortcut icon" href="{{asset('assets/img/logo-clicksaludableexpress.ico')}}">
    <title>Nosotros</title>
    <meta name="description" content="Importamos productos sin gluten, sin taxx, sin azucar, veganos ,non/gmo, para nuestros clientes de Venezuela" />
    <link rel="stylesheet" href="{{asset('assets/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css">
@include('layouts/header')






<section id="nosotros" >
    <div class="brands" style="background-color:#f7fbf3">
        
            <div class="row">
          
                <div class="col">
                    <div class="brands_slider_container">
                        <div class="owl-carousel owl-theme brands_slider">

                            @foreach ($marcas_logo as $marcas)                                                        
                            <div class="owl-item">
                                <div class="brands_item d-flex flex-column justify-content-center"><img src="{{asset('assets/img/'.$marcas->image_link)}}" alt="{{$marcas->image_alt}}" title="{{$marcas->image_title}}" ></div>
                            </div>
                            @endforeach
                            
                        </div> <!-- Brands Slider Navigation -->
                         <div class="brands_nav brands_prev"><i class="fas fa-chevron-left"></i></div>
                        <div class="brands_nav brands_next"><i class="fas fa-chevron-right"></i></div>
                    </div>
                </div>
            </div>
       
    </div>
    
    
    <div class="container">
            <div class="col">
                <h1 class="text-center" id="header-productos" style="margin-bottom: 0px;"><strong>Nosotros  <span style="color:#24A62D">.</span></strong></h1><br>
                <br>
                <p id="nosotros-parrafo" class="text-justify">En <strong>Click Saludable Express</strong> nos destacamos por importar y comercializar líneas de productos <strong>SIN GLUTEN</strong> , <strong>SIN TACC</strong>, <strong>SIN AZUCAR</strong> ,<strong>VEGANOS</strong>,<strong> NON/GMO</strong>, entre otros atributos que buscan mejorar la calidad
                    de vida de nuestros clientes con tan solo un <strong>CLICK </strong>, distribuyendo productos de reconocidas marcas a nivel internacional que cumplen con los más altos estándares de calidad y seguridad. Nuestro objetivo es ser tu proveedor de alimentos
                    saludables a nivel Nacional.<br><br><br><br>Date un Placer sin Culpas&nbsp;</p><br><br>
            </div>
        </div>
    
        
        </section>




@include('layouts/footer')
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/owl.carousel.js"></script>
<script src="{{asset('assets/js/owl-carousel.js')}}"></script>
</html>