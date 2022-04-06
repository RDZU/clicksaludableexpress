<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contacto;
use Session;
class ContactoController extends Controller
{
    

public function index() {

return view('contacto');

}


public function mensaje(Request $request){

   // dd($request);
   
$this->validate($request,[
'g-recaptcha-response' => function ($attribute, $value, $fail){
 $secretKey = config('services.recaptcha.secret');
 $response = $value;
 $userIP= $_SERVER['REMOTE_ADDR'];
 $url = "https://www.google.com/recaptcha/api/siteverify?secret=$secretKey&response=$response&remoteip=$userIP";
 $response =\file_get_contents($url);
 $response= json_decode($response);
 if(!$response->sucess){
   Session::flash('g-recaptcha-response','Porfavor haz click en reCaptcha');
   Session::flash('alert-class' , 'alert-danger');
   $fail($attribute.'google reCaptha failed');
}
  },
  ]);



$contacto= new Contacto;
$contacto->name= $request->get('name');
$contacto->email= $request->get('email');
$contacto->telefono= $request->get('telefono');
$contacto->info_conocer=$request->get('info_conocer');
$contacto->consulta= $request->get('consulta');
$contacto->descripcion_consulta= $request->get('descripcion_consulta');
$contacto->save();


return redirect()->route('contacto');
}




}
