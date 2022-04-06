<!DOCTYPE html>
<html>

<head>

  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <link rel="shortcut icon" href="{{asset('assets/img/logo-clicksaludableexpress.ico')}}">


    
    <title>Productos</title>
    <meta name="description" content="Alimentos disponibles sin gluten ,libres de tacc, sin azúcar , veganos, orgánicos, no transgénicos, libre de Lactosa, hacemos entregas en Lecherias, Anzoategui y envios a toda Venezuela" />
    <link rel="stylesheet" href="{{asset('assets/bootstrap/css/bootstrap.min.css')}}">

@include('layouts/header')

<h1 class="text-center" id="header-productos"><strong>Nuestros Productos <span style="color:#24A62D">.</span></strong></h1>

    

<ul class="nav nav-pills mb-3 " id="pills-tab" role="tablist">
  <li class="nav-item">
    <a class="nav-link text-success active" id="pills-todos-tab" data-toggle="pill" href="#pills-todos" role="tab" aria-controls="pills-home" aria-selected="true"><strong>Todos</strong></a>
  </li>
  <li class="nav-item">
    <a class="nav-link text-success" id="pills-sin-gluten-tab" data-toggle="pill" href="#pills-sin-gluten" role="tab" aria-controls="pills-profile" aria-selected="false"><strong>Sin gluten</strong></a>
  </li>
  <li class="nav-item">
    <a class="nav-link text-success" id="pills-sustitutos-azucar-tab" data-toggle="pill" href="#pills-sustitutos-azucar" role="tab" aria-controls="pills-contact" aria-selected="false"><strong>Sustitutos de Azúcar</strong></a>
  </li>
    
  <li class="nav-item">
    <a class="nav-link text-success" id="pills-sin-azucar-tab" data-toggle="pill" href="#pills-sin-azucar" role="tab" aria-controls="pills-contact" aria-selected="false"><strong>Sin Azúcar</strong></a>
  </li>

    <li class="nav-item">
    <a class="nav-link text-success" id="pills-salados-tab" data-toggle="pill" href="#pills-salados" role="tab" aria-controls="pills-contact" aria-selected="false"><strong>Salados </strong></a>
  </li>
    
    <li class="nav-item">
    <a class="nav-link text-success" id="pills-harinas-tab" data-toggle="pill" href="#pills-harinas" role="tab" aria-controls="pills-contact" aria-selected="false"><strong>Harinas y Premezclas</strong> </a>
  </li>
    <li class="nav-item">
    <a class="nav-link text-success" id="pills-almacen-tab" data-toggle="pill" href="#pills-almacen" role="tab" aria-controls="pills-contact" aria-selected="false"><strong>Almacén</strong></a>
  </li>
  <li class="nav-item">
    <a class="nav-link text-success" id="pills-superalimentos-tab" data-toggle="pill" href="#pills-superalimentos" role="tab" aria-controls="pills-contact" aria-selected="false"><strong>Superalimentos y Proteínas</strong></a>
  </li>
</ul>

    <section class="galeria-productos" >

<div class="tab-content" id="pills-tabContent">
  <div class="tab-pane fade show active" id="pills-todos" role="tabpanel" aria-labelledby="pills-todos-tab">



        <div class="container py-lg-5">
            <div class="row">
          <!-- CATEGORIA TODOS -->  
@foreach ($productos_todos as $todos)
    
                <div class="col-sm-12 col-md-6  col-xl-4">
                    <ul class="list-unstyled clearfix p-0  row">
                        <li class="lista-producto">
                        <span class="image-block">
                        <a href="{{ route('productos.slug', [$todos->slug])}}"> 
                            
                            <div class="content-overlay"></div><img class="img-fluid" src="{{asset('imagen/'.$todos->image_frontal_link)}}" alt="{{$todos->image_frontal_alt}}" title="{{$todos->image_frontal_title}}">
                        <div class="content-details fadeIn-bottom">
                            <h3>{{$todos->name}}</h3>
                            <div id="content-logo"><img class="img-fluid" src="{{asset('assets/img/logo-clicksaludableexpress.webp')}}"  width="200" height="200">
                                <h3 >{{$todos->tipo_presentacion}}</h3>
                                    <h3>Ver ficha <i class="fa fa-search"></i></h3>
                            </div>
                        </div></a>
    
                    </span>
    
                    </li>
                    </ul>

                </div>
                @endforeach

            </div>
       
        </div>
      
  </div>
  <div class="tab-pane fade" id="pills-sin-gluten" role="tabpanel" aria-labelledby="pills-sin-gluten-tab">





    <div class="container py-lg-5">
      <div class="row">

          <!-- CATEGORIA SIN GLUTEN -->
@foreach ($productos_sin_gluten as $todos)

          <div class="col-sm-12 col-md-6  col-xl-4">
              <ul class="list-unstyled clearfix p-0  row">
                  <li class="lista-producto">
                  <span class="image-block">
                  <a href="{{ route('productos.slug', [$todos->slug])}}"> 
                      
                      <div class="content-overlay"></div><img class="img-fluid" src="{{asset('imagen/'.$todos->image_frontal_link)}}" alt="{{$todos->image_frontal_alt}}" title="{{$todos->image_frontal_title}}">
                  <div class="content-details fadeIn-bottom">
                      <h3>{{$todos->name}}</h3>
                      <div id="content-logo"><img class="img-fluid" src="{{asset('assets/img/logo-clicksaludableexpress.webp')}}"  width="200" height="200">
                          <h3 >{{$todos->tipo_presentacion}}</h3>
                              <h3>Ver ficha <i class="fa fa-search"></i></h3>
                      </div>
                  </div></a>

              </span>

              </li>
              </ul>

          </div>
          @endforeach

      </div>
 
  </div>




  </div>


  <div class="tab-pane fade" id="pills-sustitutos-azucar" role="tabpanel" aria-labelledby="pills-sustitutos-azucar-tab">
    <div class="container py-lg-5">
        <div class="row">

            <!-- CATEGORIA SUSTITUTOS DEL AZUCAR -->
  @foreach ($productos_sustitutos_azucar as $todos)
  
            <div class="col-sm-12 col-md-6  col-xl-4">
                <ul class="list-unstyled clearfix p-0  row">
                    <li class="lista-producto">
                    <span class="image-block">
                    <a href="{{ route('productos.slug', [$todos->slug])}}"> 
                        
                        <div class="content-overlay"></div><img class="img-fluid" src="{{asset('imagen/'.$todos->image_frontal_link)}}" alt="{{$todos->image_frontal_alt}}" title="{{$todos->image_frontal_title}}">
                    <div class="content-details fadeIn-bottom">
                        <h3>{{$todos->name}}</h3>
                        <div id="content-logo"><img class="img-fluid" src="{{asset('assets/img/logo-clicksaludableexpress.webp')}}"  width="200" height="200">
                            <h3 >{{$todos->tipo_presentacion}}</h3>
                                <h3>Ver ficha <i class="fa fa-search"></i></h3>
                        </div>
                    </div></a>
  
                </span>
  
                </li>
                </ul>
  
            </div>
            @endforeach
  
        </div>
   
    </div>
</div>


  <div class="tab-pane fade" id="pills-sin-azucar" role="tabpanel" aria-labelledby="pills-sin-azucar-tab">


    <div class="container py-lg-5">
        <div class="row">

            <!-- CATEGORIA SUSTITUTOS DEL AZUCAR -->
  @foreach ($productos_sin_azucar as $todos)
  
            <div class="col-sm-12 col-md-6  col-xl-4">
                <ul class="list-unstyled clearfix p-0  row">
                    <li class="lista-producto">
                    <span class="image-block">
                    <a href="{{ route('productos.slug', [$todos->slug])}}"> 
                        
                        <div class="content-overlay"></div><img class="img-fluid" src="{{asset('imagen/'.$todos->image_frontal_link)}}" alt="{{$todos->image_frontal_alt}}" title="{{$todos->image_frontal_title}}">
                    <div class="content-details fadeIn-bottom">
                        <h3>{{$todos->name}}</h3>
                        <div id="content-logo"><img class="img-fluid" src="{{asset('assets/img/logo-clicksaludableexpress.webp')}}"  width="200" height="200">
                            <h3 >{{$todos->tipo_presentacion}}</h3>
                                <h3>Ver ficha <i class="fa fa-search"></i></h3>
                        </div>
                    </div></a>
  
                </span>
  
                </li>
                </ul>
  
            </div>
            @endforeach
  
        </div>
   
    </div>
</div>

    <div class="tab-pane fade" id="pills-salados" role="tabpanel" aria-labelledby="pills-salados-tab"> 



      <div class="container py-lg-5">
        <div class="row">

            <!-- CATEGORIA SALADOS -->
@foreach ($productos_salados as $todos)

            <div class="col-sm-12 col-md-6  col-xl-4">
                <ul class="list-unstyled clearfix p-0  row">
                    <li class="lista-producto">
                    <span class="image-block">
                    <a href="{{ route('productos.slug', [$todos->slug])}}"> 
                        
                        <div class="content-overlay"></div><img class="img-fluid" src="{{asset('imagen/'.$todos->image_frontal_link)}}" alt="{{$todos->image_frontal_alt}}" title="{{$todos->image_frontal_title}}">
                    <div class="content-details fadeIn-bottom">
                        <h3>{{$todos->name}}</h3>
                        <div id="content-logo"><img class="img-fluid" src="{{asset('assets/img/logo-clicksaludableexpress.webp')}}"  width="200" height="200">
                            <h3 >{{$todos->tipo_presentacion}}</h3>
                                <h3>Ver ficha <i class="fa fa-search"></i></h3>
                        </div>
                    </div></a>

                </span>

                </li>
                </ul>

            </div>
            @endforeach

        </div>
   
    </div>



    </div>

    <div class="tab-pane fade" id="pills-harinas" role="tabpanel" aria-labelledby="pills-harinas-tab">



        <div class="container py-lg-5">
            <div class="row">
                
                <!-- CATEGORIA HARINAS Y MEZCLA -->
    @foreach ($productos_HarinasyPremezclas as $todos)
    
                <div class="col-sm-12 col-md-6  col-xl-4">
                    <ul class="list-unstyled clearfix p-0  row">
                        <li class="lista-producto">
                        <span class="image-block">
                        <a href="{{ route('productos.slug', [$todos->slug])}}"> 
                            
                            <div class="content-overlay"></div><img class="img-fluid" src="{{asset('imagen/'.$todos->image_frontal_link)}}" alt="{{$todos->image_frontal_alt}}" title="{{$todos->image_frontal_title}}">
                        <div class="content-details fadeIn-bottom">
                            <h3>{{$todos->name}}</h3>
                            <div id="content-logo"><img class="img-fluid" src="{{asset('assets/img/logo-clicksaludableexpress.webp')}}"  width="200" height="200">
                                <h3 >{{$todos->tipo_presentacion}}</h3>
                                    <h3>Ver ficha <i class="fa fa-search"></i></h3>
                            </div>
                        </div></a>
    
                    </span>
    
                    </li>
                    </ul>
    
                </div>
                @endforeach
    
            </div>
       
        </div>
    




    </div>
    <div class="tab-pane fade" id="pills-almacen" role="tabpanel" aria-labelledby="pills-almacen-tab">



        <div class="container py-lg-5">
            <div class="row">
                <!-- CATEGORIA ALMACEN -->
    @foreach ($productos_almacen as $todos)
    
                <div class="col-sm-12 col-md-6  col-xl-4">
                    <ul class="list-unstyled clearfix p-0  row">
                        <li class="lista-producto">
                        <span class="image-block">
                        <a href="{{ route('productos.slug', [$todos->slug])}}"> 
                            
                            <div class="content-overlay"></div><img class="img-fluid" src="{{asset('imagen/'.$todos->image_frontal_link)}}" alt="{{$todos->image_frontal_alt}}" title="{{$todos->image_frontal_title}}">
                        <div class="content-details fadeIn-bottom">
                            <h3>{{$todos->name}}</h3>
                            <div id="content-logo"><img class="img-fluid" src="{{asset('assets/img/logo-clicksaludableexpress.webp')}}"  width="200" height="200">
                                <h3 >{{$todos->tipo_presentacion}}</h3>
                                    <h3>Ver ficha <i class="fa fa-search"></i></h3>
                            </div>
                        </div></a>
    
                    </span>
    
                    </li>
                    </ul>
    
                </div>
                @endforeach
    
            </div>
       
        </div>

    </div>


    <div class="tab-pane fade" id="pills-superalimentos" role="tabpanel" aria-labelledby="pills-superalimentos-tab">



        <div class="container py-lg-5">
            <div class="row">
                <!-- CATEGORIA ALMACEN -->
    @foreach ($productos_SuperAlimentosyProteinas as $todos)
    
                <div class="col-sm-12 col-md-6  col-xl-4">
                    <ul class="list-unstyled clearfix p-0  row">
                        <li class="lista-producto">
                        <span class="image-block">
                        <a href="{{ route('productos.slug', [$todos->slug])}}"> 
                            
                            <div class="content-overlay"></div><img class="img-fluid" src="{{asset('imagen/'.$todos->image_frontal_link)}}" alt="{{$todos->image_frontal_alt}}" title="{{$todos->image_frontal_title}}">
                        <div class="content-details fadeIn-bottom">
                            <h3>{{$todos->name}}</h3>
                            <div id="content-logo"><img class="img-fluid" src="{{asset('assets/img/logo-clicksaludableexpress.webp')}}"  width="200" height="200">
                                <h3 >{{$todos->tipo_presentacion}}</h3>
                                    <h3>Ver ficha <i class="fa fa-search"></i></h3>
                            </div>
                        </div></a>
    
                    </span>
    
                    </li>
                    </ul>
    
                </div>
                @endforeach
    
            </div>
       
        </div>

    </div>




</div>
   

</section>




    @include('layouts/footer')

    </html>