<?php

namespace App\Http\Controllers;
use App\Models\Marca;
use App\Models\Product;
use App\Models\ProductCategory;
use Illuminate\Http\Request;
use DB;
class ProductosController extends Controller
{
    

    public function index (){
   
      
        $productos_todos = Product::select('name','tipo_presentacion','slug','image_frontal_link','image_frontal_alt','image_frontal_title')->where('stock',1)->get();
        $productos_sin_gluten=DB::table('products')
        ->select('name','tipo_presentacion','slug','image_frontal_link','image_frontal_alt','image_frontal_title')
        ->join('product_product_category','products.id','product_product_category.product_id')
        ->where('stock',1)->where('product_category_id',1)->get();
        
        $productos_sin_azucar=DB::table('products')
        ->select('name','tipo_presentacion','slug','image_frontal_link','image_frontal_alt','image_frontal_title')
        ->join('product_product_category','products.id','product_product_category.product_id')
        ->where('stock',1)->where('product_category_id',7)->get();

        $productos_sustitutos_azucar=DB::table('products')
        ->select('name','tipo_presentacion','slug','image_frontal_link','image_frontal_alt','image_frontal_title')
        ->join('product_product_category','products.id','product_product_category.product_id')
        ->where('stock',1)->where('product_category_id',2)->get();

        
        $productos_almacen=DB::table('products')
        ->select('name','tipo_presentacion','slug','image_frontal_link','image_frontal_alt','image_frontal_title')
        ->join('product_product_category','products.id','product_product_category.product_id')
        ->where('stock',1)->where('product_category_id',5)->get();
        
        $productos_salados=DB::table('products')
        ->select('name','tipo_presentacion','slug','image_frontal_link','image_frontal_alt','image_frontal_title')
        ->join('product_product_category','products.id','product_product_category.product_id')
        ->where('stock',1)->where('product_category_id',3)->get();
        
        $productos_HarinasyPremezclas=DB::table('products')
        ->select('name','tipo_presentacion','slug','image_frontal_link','image_frontal_alt','image_frontal_title')
        ->join('product_product_category','products.id','product_product_category.product_id')
        ->where('stock',1)->where('product_category_id',4)->get();
        

        $productos_SuperAlimentosyProteinas=DB::table('products')
        ->select('name','tipo_presentacion','slug','image_frontal_link','image_frontal_alt','image_frontal_title')
        ->join('product_product_category','products.id','product_product_category.product_id')
        ->where('stock',1)->where('product_category_id',6)->get();

       // dd($productos_sin_gluten);
        
            return view('productos',compact('productos_todos','productos_salados','productos_sin_gluten','productos_sin_azucar','productos_almacen','productos_HarinasyPremezclas','productos_SuperAlimentosyProteinas','productos_sustitutos_azucar'));
        
        }
        
        
        public function detalles_productos($slug) {
        
         /*   select name, description, tipo_presentacion,envase,cantidad,largo,ancho,alto,peso,image_frontal_link,image_frontal_title,image_frontal_alt,image_reverso_link,image_reverso_title,image_reverso_alt from products  
where slug = 'pretzel-gluten-free'*/
        $detalles_productos = DB::table('products')->select('*')->where('slug',$slug)->first();
        $get_id= DB::table('products')->where('slug',$slug)->value('id');

        /* select tag_link,tag_title,tag_alt from product_product_tag 
JOIN product_tags ON product_product_tag.product_tag_id=product_tags.id

WHERE product_id='1' */




$etiquetas= DB::table('product_product_tag')->select('tag_link','tag_title','tag_alt')->join('product_tags','product_product_tag.product_tag_id','product_tags.id')->where('product_id', $get_id)->get();
   
        
            return view('detalles-producto',compact('detalles_productos','etiquetas'));
        
        
        }


}
