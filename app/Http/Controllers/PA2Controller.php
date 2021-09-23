<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Http;
use App\PA;
use App\user_edu_type;
use App\User_Profile;
use App\user_education;
use App\pa_schedule_hour;
use App\pa_support_hour;
use App\pa_develop_hour;
use App\pa_response_hour;
use App\pa_standard;
use App\pa_train_hour;
use App\pa_innovation;
use App\pa_learn_class;
use App\group_learn;
use App\pa_task;
use App\pa_standard_development;

use Illuminate\Support\Facades\DB;
use Session;
use Input;

class PA2Controller extends Controller {

    public function PA2_1(){
        $standard = pa_standard::where('root',0)
                ->orderBy('no', 'asc')->get();
        
        $pa_standard = pa_standard::find(1);
        
        return view("PA2.PA2_1", ["standard" => $standard,])->withModel($pa_standard);
           
    }
    
    public function PA2_2(){    
         $development = pa_standard_development::where('PA_year',PA_year())
                 ->where('user_id', uId())
                ->orderBy('id', 'asc')->get();
         
          $standard = pa_standard::where('root',0)
                ->orderBy('no', 'asc')->get();
         
        return view("PA2.PA2_2",["development"=>$development,"standard"=>$standard]);
    }
    
    public function PA2_3(){       
        $standard = "";
        
        $task = DB::table('pa_task')
                ->where('user_id', uId())
                ->where('PA_year', PA_year())
                ->orderBy('standard_id','asc')
                ->get();
        
        
        if(count($task)>0){
            
           $standard =  DB::table('pa_standard')                 
          ->select('id','detail')
          ->where('root',0)
          ->whereNotIn('id', DB::table('pa_task')
                   ->where('user_id', uId())
                   ->where('PA_year', PA_year())
                   ->pluck('standard_id'))->orderBy('no', 'asc')->get(); 
        
           
        }else{
          $standard = pa_standard::where('root',0)
                ->orderBy('no', 'asc')->get();
        }
        
        return view("PA2.PA2_3",["task" => $task,"standard"=>$standard]);
    }
    
    
    public function PA2_Insert_Task(Request $request){        
        
            DB::table('pa_task')->insert([
                    ['user_id' => uId(),
                        'PA_year' => PA_year(),
                        'standard_id' => $request->input('txtstandard'),
                        'standard' => standard($request->input('txtstandard'))->detail,
                        'task' => $request->input('txttask'),
                        'outcome' => $request->input('txtoutcome'),
                        'indicator' => $request->input('txtindicator')]
                ]);
        
        return redirect('PA2_3');
    }
    
    
        public function PA2_Insert_Development(Request $request){        
        
            DB::table('pa_standard_development')->insert([
                    ['user_id' => uId(),
                        'PA_year' => PA_year(),
                        'standard_id' => $request->input('txtstandard'),
                        'start_date' => $request->input('txtstart_date'),
                        'end_date' => $request->input('txtend_date'),
                        'budget' => $request->input('txtbudget'),
                        'benefit' => $request->input('txtbenefit')]
                ]);
            
            
        
        return redirect('PA2_2');
    }
    
    
       public function PA2_delete_Task(Request $request){
           
           
           pa_task::where('id', $request->id)->delete();
           
           return redirect('PA2_3');
       }
       
       
       
         public function PA2_delete_Development(Request $request){
           
           
           pa_standard_development::where('id', $request->id)->delete();
           
           return redirect('PA2_2');
       }

}
