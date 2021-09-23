<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Session;


use Auth;

use GuzzleHttp\Client;
use Illuminate\Support\Facades\Http;


class MasterController extends Controller
{

    public function index(){
        return view("pa.pa1");
    }
    
//    public function pa_1(){
//        
//        return view("pa.pa1");
//    }
//    
//    public function pa_2_1(){
//        return view("pa.pa1");
//    }
//    
//    public function pa_2_2(){
//        return view("pa.pa2_2");
//    }
//    
//    public function pa_3(){
//        return view("pa.pa3");
//    }
//    
//    public function pa_4(){
//        return view("pa.pa4");
//    }
    
    
    
    
    
     public function Pa_update($uID,$filed) {

        $year = DB::table('PA')
                ->where('PA_year', PA_year())
                ->where('user_id', $uID)
                ->first();

        if (count($year) >= 0) {
            
            $pa = PA::where('PA_year', PA_year())
                    ->where('user_id', $uID)
                    ->update(array($filed => 1));
           
        }else{
            Pa($uID);
        }      
        
    }
    

    
}
