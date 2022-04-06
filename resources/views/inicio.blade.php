<!DOCTYPE html>
<html>

<head>

  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <link rel="shortcut icon" href="{{asset('assets/img/logo-clicksaludableexpress.ico')}}">


    
    <title>Click Saludable Express</title>
    <meta name="description" content="Click Saludable Express, alimentos&nbsp;saludables, sin gluten ( gluten free) ,libres de tacc, sin azúcar (sugar Free) , veganos, orgánicos, NON/GMO,( no transgénicos), Libre de Lactosa" />
    <link rel="stylesheet" href="{{asset('assets/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/best-carousel-slide.css')}}"> 
    <link rel="stylesheet" href="{{asset('assets/css/Simple-Slider.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css">

 <link rel="stylesheet" href="https://unpkg.com/swiper@6.5.5/swiper-bundle.min.css"> 
 <link rel="stylesheet" href="{{asset('assets/css/card-carousel.css')}}">
 <link rel="stylesheet" href="{{asset('assets/jquery-ui/jquery-ui.min.css')}}">
@include('layouts/header')


<div class="container">
    <div class="row">
      

        <div class="col-12">
          @if ($message = Session::get('error'))

    <div class="alert alert-danger alert-block" style="text-align: center;">
    
      <button type="button" class="close" data-dismiss="alert">×</button>	
    
            <strong>{{ $message }}</strong>
    
    </div>
    
    @endif
          <form action="{{route('mostrar.productos')}}" method="get">
            <div class="input-group">
                <div class="input-group-prepend"><span class="input-group-text">Buscar:</span></div><input required id="search" name="search" class="form-control" type="text">
                <div class="input-group-append"><button class="btn btn-success" type="submit"><i class="fa fa-search"></i></button></div>
            </div>
          </form>
        </div>
        </div >
    </div>
    

    <section id="inicio-slider">
    <div class="row">
        <div class="col-12">
            

            <div class="simple-slider">
                <div class="swiper-container">
                  <div class="swiper-wrapper">
                    <div class="swiper-slide" style="background-image:url(assets/img/productos-glutino.webp);"></div>
                     <div class="swiper-slide" style="background-image:url(assets/img/productos-lakanto.webp);"></div>
                    <div class="swiper-slide" style="background-image:url(assets/img/productos-yum-earth.webp);"></div>
                   <div class="swiper-slide" style="background-image:url(assets/img/productos-natures-eats.webp);"></div>
                    <div class="swiper-slide" style="background-image:url(assets/img/productos-hacendado.webp);"></div>
                  </div>
                  
                </div>
              
              </div>

        </div>
    </div>

</section>



<div class="brands2">

    <div class="row">
  
        <div class="col">
            <div class="brands_slider_container">
                <div class="owl-carousel owl-theme brands_slider">
                   
                  @foreach ($marcas_logo as $marcas)                                                        
                  <div class="owl-item">
                      <div class="brands_item d-flex flex-column justify-content-center"><img src="{{asset('assets/img/'.$marcas->image_link)}}" alt="{{$marcas->image_alt}}" title="{{$marcas->image_title}}"></div>
                  </div>
                  @endforeach
                  
                </div> <!-- Brands Slider Navigation -->
                 <div class="brands_nav brands_prev"><i class="fas fa-chevron-left"></i></div>
                <div class="brands_nav brands_next"><i class="fas fa-chevron-right"></i></div>
            </div>
        </div>
    </div>

</div>

<section id="listado-productos">
   
<div class="container" >



  <div class="container-fluid">
    <h1 id="header-productos" class="text-center mb-3">Click Saludable Express te recomienda</h1>
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner row w-100 mx-auto">
        
  



        
        @foreach($products_first as $key => $product)
            
        <div class="carousel-item col-md-4 active" >
          <div class="card">
        
            <a href="{{ route('productos.slug', $product->slug) }}">   <img class="card-img-top img-fluid" src="{{asset('imagen/'.$product->image_frontal_link)}}" alt="{{$product->image_frontal_alt}}" title="{{$product->image_frontal_title}}"> 
           </a>
            <div class="card-body">
              <h4 class="card-title">{{$product->name}}</h4>
              <p class="card-text">{{$product->descripcion_home}}</p>
              <p class="card-text"><small class="text-muted"> @foreach($product->etiquetas as $key => $item)
                <img src="{{asset('assets/img/'.$item->tag_link)}}" alt="{{$item->tag_alt}}" title="{{$item->tag_title}}"> 
             
            
            @endforeach
          
          </small></p>
            </div>
          </div>
        </div>
        
        @endforeach


        
        @foreach($products as $key => $product)
            
        <div class="carousel-item col-md-4">
          <div class="card">
        
            <a href="{{ route('productos.slug', $product->slug) }}">   <img class="card-img-top img-fluid" src="{{asset('imagen/'.$product->image_frontal_link)}}" alt="{{$product->image_frontal_alt}}" title="{{$product->image_frontal_title}}"> 
           </a>
            <div class="card-body">
              <h4 class="card-title">{{$product->name}}</h4>
              <p class="card-text">{{$product->descripcion_home}}</p>
              <p class="card-text"><small class="text-muted"> @foreach($product->etiquetas as $key => $item)
                <img src="{{asset('assets/img/'.$item->tag_link)}}" alt="{{$item->tag_alt}}" title="{{$item->tag_title}}"> 
             
            
            @endforeach
          
          </small></p>
            </div>
          </div>
        </div>
        
        @endforeach
       
      
       
        
      
      </div>
      <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </div>



</div>

</section>


@include('layouts/footer')


<script src="{{asset('assets/jquery-ui/jquery-ui.min.js')}}"></script>


<script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.3.1/js/swiper.jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/owl.carousel.js"></script>
<script src="{{asset('assets/js/owl-carousel.js')}}"></script>
<script src="https://unpkg.com/swiper@6.5.5/swiper-bundle.min.js"></script>
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
  </html>