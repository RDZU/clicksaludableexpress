<!DOCTYPE html>
<html>

<head>

  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <link rel="shortcut icon" href="{{asset('assets/img/logo-clicksaludableexpress.ico')}}">
    <title>Contacto</title>
    <meta name="description" content="Tiene alguna consulta, ingresa y responderemos lo mas pronto posible" />
    <link rel="stylesheet" href="{{asset('assets/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/Registration-Form-with-Photo.css')}}">
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>

@include('layouts/header')

<div class="register-photo">
    <div class="form-container">
        <div class="image-holder"></div>
        <form action="{{route('mensaje')}}" method="post">
            {{csrf_field()}}
            <h2 class="text-center"><strong>¿Dudas? ¿Consultas? Escribanos</strong></h2>
            <div class="form-group"><input required class="form-control" type="text" placeholder="Nombre / Razon social" name="name"></div>
            <div class="form-group"><input required class="form-control" type="email" name="email" placeholder="Email"></div>
            <div class="form-group"><input class="form-control" type="text" name="telefono" placeholder="Teléfono"></div>
            <div class="form-group"><select name="info_conocer" class="form-control"><optgroup label="¿Como nos Conoce?"></optgroup><option value="Publicidad" >Publicidad</option><option value="Redes Sociales">Redes Sociales</option><option value="Referido">Referido</option><option value="Internet">Internet</option></select></div>
            <div class="form-group"><select name="consulta" class="form-control"><optgroup label="¿Motivo de su Consulta?"><option value="Publicidad" selected="">Consulta</option><option value="Reclamos">Reclamos</option><option value="Otros" >Otros</option></optgroup></select></div>
    <div class="form-group"><textarea required  class="form-control form-control-sm d-inline" name="descripcion_consulta" rows="5" placeholder="Escriba su mensaje aquí..."></textarea></div>
    <div class="g-recaptcha" data-sitekey="{{config('services.recaptcha.key')}}"></div>
    @if(Session::has('g-recaptcha-response'))
    <p class="alert {{Session::get('alert-class' , 'alert-info')}}">
        {{Session::get('g-recaptcha-response')}}
    </p>
    @endif
      <br/> 

<div class="form-group"><input value="Enviar Consulta "class="btn btn-success btn-block" type="submit"></div>
</form>
</div>
</div>
@include('layouts/footer')

</html>