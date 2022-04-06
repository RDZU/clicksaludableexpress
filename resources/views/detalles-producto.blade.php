@extends('layouts/detalles')


@section('title')
    <title> Click Saludable Express {{$detalles_productos->photo_min_reverso_link}}</title>
    <meta name="description" content= {{$detalles_productos->photo_link_reverso_title}} />
@endsection


@section('content')

<h1 class="text-center" id="header-productos-detalles">{{$detalles_productos->name}} <span style="color:#afcb07">.</span></h1>

<section id="detalles-productos" >
<div  class="container">
    <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-7">

          <div class="container-fluid px-sm-1 py-5 mx-auto">
            <div class="row justify-content-center">
                <div class="d-flex">
                    <div class="card">
                        <div class="d-flex flex-column thumbnails">
                            <div id="f1" class="tb tb-active"> <img class="thumbnail-img fit-image" src="{{asset('imagen/'.$detalles_productos->image_frontal_link)}}"> </div>
                           
                            @if ($detalles_productos->photo_min_frontal_link==1 || $detalles_productos->photo_min_frontal_link==null)   
                            <div id="f2" class="tb"> <img class="thumbnail-img2 fit-image" src="{{asset('imagen/'.$detalles_productos->image_reverso_link)}}"> </div>
                            @elseif($detalles_productos->photo_min_frontal_link==2) 
                            <div id="f2" class="tb"> <img class="thumbnail-img3 fit-image" src="{{asset('imagen/'.$detalles_productos->image_reverso_link)}}"> </div>
                            @elseif($detalles_productos->photo_min_frontal_link==3)
                            <div id="f2" class="tb"> <img class="thumbnail-img4 fit-image" src="{{asset('imagen/'.$detalles_productos->image_reverso_link)}}"> </div>
                            @endif
                        </div>
                        <fieldset id="f11" class="active">
                <div class="product-pic">  <img class="pic0" src="{{asset('imagen/'.$detalles_productos->image_frontal_link)}}" alt="{{$detalles_productos->image_frontal_alt}}" title="{{$detalles_productos->image_frontal_title}}"></div>
                        </fieldset>
                        <fieldset id="f21" class="">
                          
                          @if ($detalles_productos->photo_min_frontal_link==1 || $detalles_productos->photo_min_frontal_link==null)   
                            <div class="product-pic"><a data-lightbox="photos" href="{{asset('imagen/'.$detalles_productos->image_reverso_link)}}"> <img class="pic1" src="{{asset('imagen/'.$detalles_productos->image_reverso_link)}}" alt="{{$detalles_productos->image_reverso_alt}}" title="{{$detalles_productos->image_reverso_title}}"></a> </div>
                          
 
                            @elseif($detalles_productos->photo_min_frontal_link==2) 
                        
                            <div class="product-pic"><a data-lightbox="photos" href="{{asset('imagen/'.$detalles_productos->image_reverso_link)}}"> <img class="pic2" src="{{asset('imagen/'.$detalles_productos->image_reverso_link)}}" alt="{{$detalles_productos->image_reverso_alt}}" title="{{$detalles_productos->image_reverso_title}}"></a> </div>
                        
                            @elseif($detalles_productos->photo_min_frontal_link==3)
                            <div class="product-pic"><a data-lightbox="photos" href="{{asset('imagen/'.$detalles_productos->image_reverso_link)}}"> <img class="pic3" src="{{asset('imagen/'.$detalles_productos->image_reverso_link)}}" alt="{{$detalles_productos->image_reverso_alt}}" title="{{$detalles_productos->image_reverso_title}}"></a> </div>
                            @endif
                            
                        </fieldset>
                       
                        
                    </div>
                </div>
            </div>
        </div>
            
        


</div>





<div class="col-sm-12 col-md-12 col-lg-5">


<ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
<li class="nav-item">
<a class="nav-link text-success active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true"><strong>Presentación</strong></a>
</li>
<li class="nav-item">
<a class="  nav-link text-success" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false"><strong>Info. Producto</strong></a>
</li>

</ul>

<div class="tab-content" id="pills-tabContent">
<div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
<h4 id="texto-presentacion">Presentacion Individual</h4>
<p id="productos-detalles-descripcion">
<br>

{{$detalles_productos->tipo_presentacion}}

<br><br>

{!!$detalles_productos->description!!}


</p>
<p>
@foreach ($etiquetas as $item)
<img src="{{asset('assets/img/'.$item->tag_link)}}" alt="{{$item->tag_alt}}" title="{{$item->tag_title}}">  
@endforeach



</p>
</div>
<div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab"></div>

</p>
<div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
  
<h4 id="texto-presentacion">Información para despacho</h4>


  <table width="98%" border="0" cellspacing="0" cellpadding="0" class="table table-hover nutricional" style="margin-top:0px !important;">
  <tr class=" nutricionalTitulo">
    <td class="bg-success text-white" colspan="2"><div align="left" style="font-weight:bold;">Presentación</div></td>
  </tr>
  <tr>
    <td  width="30%" class="bg-success text-white nutricionalTd"><strong>Envase</strong></td>
    <td width="70%" class="nutricionalTdGrilla"><div align="center">{{$detalles_productos->envase}}</div></td>
  </tr>
  <tr>
    <td class="bg-success text-white nutricionalTd"><strong>Cantidad</strong></td>
    <td class="nutricionalTdGrilla"><div align="center">{{$detalles_productos->cantidad}}</div></td>
  </tr>
  <tr>
    <td valign="top" class="bg-success text-white nutricionalTd"><strong>Dimensiones</strong></td>
    <td class="nutricionalTdGrilla"><div align="center"><b>Largo:</b> {{$detalles_productos->largo}} cm.<br />
      <b>Ancho:</b> {{$detalles_productos->ancho}} cm. <br />
      <b>Alto:</b> {{$detalles_productos->alto}} cm. </div></td>
  </tr>
  <tr>
    <td class=" bg-success text-white nutricionalTd"><strong>Peso total</strong></td>
    <td class="nutricionalTdGrilla"><div align="center">{{$detalles_productos->peso}}</div></td>
  </tr>
</table>
</div>

</div>
</div>
</div>
</div>

</section>


@endsection