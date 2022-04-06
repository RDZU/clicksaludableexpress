<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Marca;

class AboutController extends Controller
{
    

public function index(){

$marcas_logo = Marca::select('name','image_link','image_alt','image_title')->orderBy('name')->get();

return view('about',compact('marcas_logo'));

}

}
