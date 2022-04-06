
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <link rel="shortcut icon" href="{{asset('assets/img/logo-clicksaludableexpress.ico')}}">
    <title>Marcas</title>
    <meta name="description" content="Importamos productos sin gluten, sin taxx, sin azucar, veganos ,non/gmo, para nuestros clientes de Venezuela" />
    <link rel="stylesheet" href="{{asset('assets/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/css/lightbox.min.css">
    <link rel="stylesheet" href="{{asset('assets/css/Lightbox-Gallery.css')}}">


@include('layouts/header')
    

<div class="photo-gallery">
    <div class="container" style="margin-top:100px; margin-bottom:60px;">
        <div class="intro">
            <h2 class="text-center"></h2>
            <p class="text-center"></p>
        </div>
        <div class="row photos">

            @foreach ($marcas_logo as $marcas)
                
            
            <div class="col-sm-6 col-md-4 col-lg-3 item"><a data-lightbox="photos" href="{{asset('imagen/'.$marcas->image_link)}}"><img class="img-fluid" src="{{asset('imagen/'.$marcas->image_link)}}" alt="{{$marcas->image_alt}}" title="{{$marcas->image_title}}"></a></div>
  @endforeach
    </div>
</div>

</div>

@include('layouts/footer')

<script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/js/lightbox.min.js"></script>

</html>