<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class MatController extends Controller
{
    //
    public function index(){
     /*$tab1=[
         ['code'=>'algo',
         'Libelle'=>'Algorithmique',
         'Coefficient'=>3],

         ['code'=>'aDevWeb',
         'Libelle'=>'DéveloppementWeb',
         'Coefficient'=>3 ]
         
           ];
        return view('affMat')->with('tab1',$tab1);}*/
        $users = DB::select('select * from matieres');

        return view('affMat', ['tab1' => $users]);
          }
     public function store() {
      DB::table('matieres')->insert(
        ['code' => 'aa', 'Libelle'=> 'aaaa','Coefficient'=>'65']
    );
        }
}
