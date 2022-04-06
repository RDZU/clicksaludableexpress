<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">




    
    <link rel="stylesheet" href="{{asset('assets/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:400,500,600,700,800&amp;subset=latin-ext">
    <link rel="stylesheet" href="{{asset('assets/fonts/fontawesome-all.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/fonts/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/fonts/fontawesome5-overrides.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/Footer-Dark.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/css/lightbox.min.css">
    <link rel="stylesheet" href="{{asset('assets/css/Lightbox-Gallery.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/Navigation-Clean.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/Social-Icons.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/styles.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/gallery-products.css')}}">
</head>

<body>


<div id="nombre">
	<span>Nombre: </span>
	<input id="nombre_fruta" class="texto" type="text">
    <button type="button" class="agregar">Agregar</button>
</div>
<div id="listado_frutas">
	<ul>
		<li>
			Pera <button type="button">Borrar</button>
		</li>
		<li>
			Manzana <button type="button">Borrar</button>
		</li>
		<li>
			Naranja <button type="button">Borrar</button>
		</li>
	</ul>
</div>
<!-- -->
</body>
<script src="{{asset('assets/js/jquery.min.js')}}"></script>
<script src="{{asset('assets/bootstrap/js/bootstrap.min.js')}}"></script>

<script>
$("button").click(function(){
var $agregar = $("#nombre_fruta").val();
$("#listado_frutas ul").append('<li>'+ $agregar + '<button type="button"> Borrar </button></li>');
});

$(document).on('click','li',function(){
    $(this).remove();
});

</script> 