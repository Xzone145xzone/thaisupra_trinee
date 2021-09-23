<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PA5Controller extends Controller
{
 
     public function PA5(){        
        return view("PA5.PA5");
    }
    
    public function Template1(){
         return view("template.resolution");
    }
}
