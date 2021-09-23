<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    
    public function PALogin($user){
        
        //echo $request->token;
        
        return redirect('pa_1');   
        
    }
}
