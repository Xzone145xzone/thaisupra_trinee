<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pa_evaluation_answer extends Model
{
 
    
    protected $table = 'pa_evaluation_answer';
    
    public static function find_answer($root,$sub,$user_id,$eva_id){
        
        $answer = pa_evaluation_answer::where('eva_id',$eva_id)
                ->where('user_id',$user_id)   
                ->where('root',$root)   
                 ->where('sub',$sub)   
                ->first();
        
        return $answer->answer;
        
    }
}
