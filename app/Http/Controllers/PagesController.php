<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class PagesController extends Controller
{
    public function index(){
        
        $data = Product::all();
        $logo = 'meds.jpg';
        $poster = 'pharmacy.jpg';

        $DataImages = array('logo' => $logo ,
                    'poster' => $poster,'products' =>$data);
        

        return view('pages.index')->with($DataImages);
    }
    public function about(){
        $title = 'Aboutus';
        return view('pages.about',compact('title'));
    }

    // public function services(){
    //     $data = array(
    //         'title' => 'services',
    //         'services' => ['web design','coding','networking']
    //     );
    //     return view('pages.services')->with($data);
    // }
    
    public function contact(){
        return view('pages.contact',['users'=>['debashish','sam','asa']]);
    }


 
}