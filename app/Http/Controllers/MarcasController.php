<?php

namespace App\Http\Controllers;
use App\Models\Marca;
use Illuminate\Http\Request;

class MarcasController extends Controller
{
    
public function index ()  {

  //  $productos_todos = Product::select('name','tipo_presentacion','slug')->where('stock',1)->get();

$marcas_logo = Marca::select('name','image_link','image_title','image_alt')->orderBy('name')->get();


//return view('marcas',compact('marcas_logo'));
return view('test');

}


}
