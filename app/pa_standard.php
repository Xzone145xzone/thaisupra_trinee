<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pa_standard extends Model
{
    
    protected $table = 'pa_standard';
    
    
    function find_standard($id){
         $standard = pa_standard::where('root',$id)
                ->orderBy('no', 'asc')->get();
         return $standard;
    }
}
