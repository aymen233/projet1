<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class epreuvecontroller extends Controller
{
    //
    public function index(){
        $tab2=[
            ['Date'=>'23/09/2019',
            'Lieu'=>'110',
            'Code'=>'Algo'],
   
            ['Date'=>'24/09/2019 ',
            'Lieu'=>'112',
            'Code'=>'Algo']
            
              ];
           return view('affMat1')->with('tab2',$tab2);}
   }
   