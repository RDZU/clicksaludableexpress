<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Marca;
use App\Models\Product;

use DB;
class InicioController extends Controller
{
    

    public function index () {
$marcas_logo = Marca::select('name','image_link','image_alt','image_title')->orderBy('name')->get();

$number_products= Product::where('visible_home',1)->count();
    $products_first = Product::with(['etiquetas'])->where('visible_home',1)->take(1)->get();
    $products = Product::with(['etiquetas'])->where('visible_home',1)->skip(1)->take($number_products)->get();
   
//dd($products_first);

        return view('inicio',compact('marcas_logo','products_first','products')); 
     }



//request: metodo recibe info de un form y para recibir la info se necesita un obj tipo request
     public function buscar(Request $request){
$term = $request->get('term');


        $querys = Product::select('name','slug')->where('name','LIKE','%' .$term. '%')->get();

        $data = [];

        foreach ($querys as $query) {
            $data[] = [
                'label' => $query->name,
                'value' =>strtolower($query->name)
            ];
        }
        return $data;
     }

     public function mostrar_producto(Request $request){
$name= strtoupper($request->get('search'));


$detalles_productos = DB::table('products')->select('*')->where('name',$name)->first();

        
        $verificacion= DB::table('products')->where('name',$name)->value('name');
        if ($verificacion==$name) {
            $get_id= DB::table('products')->where('name',$name)->value('id'); 
        $etiquetas= DB::table('product_product_tag')->select('tag_link','tag_title','tag_alt')->join('product_tags','product_product_tag.product_tag_id','product_tags.id')->where('product_id', $get_id)->get();
     //   dd($detalles_productos);
        
        return view('detalles-producto',compact('detalles_productos','etiquetas'));
}
else {
    return back()->with('error',"El producto $name no fue encontrado, porfavor ingrese  nuevamente el nombre del producto  y seleccione alguno de la lista.");
   
     }

}

}