<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\pa_evaluation_answer;

class pa_evaluation extends Model
{
  
    
    protected $table = 'pa_evaluation';
    
   public static function find_question($id){
        
         $question = pa_evaluation::where('root',$id)
                ->orderBy('no', 'asc')->get();
         return $question;
    }
    
    public static function find_answer($root,$sub,$user_id,$eva_id){
        
        $answer = pa_evaluation_answer::where('eva_id',$eva_id)
                ->where('user_id',$user_id)   
                ->where('root',$root)   
                 ->where('sub',$sub)   
                ->first();
        
        return $answer->answer;
        
    }
}
