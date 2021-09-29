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
use App\pa_evaluation;
use App\pa_issue;
use Illuminate\Support\Facades\DB;
use Session;
use Input;
use App\pa_evaluation_answer;

class Template1Controller extends Controller {



    public function loadpage(Request $request) {

   

        $schedule_hour = DB::table('pa_schedule_hour')
                ->where('user_id', uId())
                ->where('PA_year', PA_year())
                ->get();

        $support_hour = DB::table('pa_support_hour')
                ->where('user_id', uId())
                ->where('PA_year', PA_year())
                ->get();

        $develop_hour = DB::table('pa_develop_hour')
                ->where('user_id', uId())
                ->where('PA_year', PA_year())
                ->get();


        $response_hour = DB::table('pa_response_hour')
                ->where('user_id', uId())
                ->where('PA_year', PA_year())
                ->get();


        $train = DB::table('pa_train_hour')
                ->where('user_id', uId())
                ->where('PA_year', PA_year())
                ->get();

        $inno = DB::table('pa_innovation')
                ->where('user_id', uId())
                ->where('PA_year', PA_year())
                ->get();


        $uProfile = DB::table('user_profile')
                ->where('user_id', uId())
                ->get();

        $uEducation = DB::table('user_education')
                ->where('user_id', uId())
                ->get();

        $Profile = DB::table('user_profile')
                ->where('user_id', uId())
                ->first();


        $standard1 = pa_standard::where('root', 0)
                       ->where('no',1) 
                        ->orderBy('no', 'asc')->get();
        
        $standard2 = pa_standard::where('root', 0)
                       ->where('no',"!=",1) 
                        ->orderBy('no', 'asc')->get();

        $pa_standard = pa_standard::find(1);


               $development = pa_standard_development::where('PA_year',PA_year())
                 ->where('user_id', uId())
                ->orderBy('id', 'asc')->get();
               
               
                $task = DB::table('pa_task')
                ->where('user_id', uId())
                ->where('PA_year', PA_year())
                ->orderBy('standard_id','asc')
                ->get();
                
                
        $topic1 = pa_evaluation::where('root', 0)
                        ->where('no',"<=",3)
                        ->where('eva_id', 'WE7845415215')
                        ->orderBy('no', 'asc')->get();
        
         $topic2 = pa_evaluation::where('root', 0)
                        ->where('no',">",3)
                        ->where('eva_id', 'WE7845415215')
                        ->orderBy('no', 'asc')->get();
        
   
        
        $issue = DB::table('pa_issue')
                ->where('user_id', uId())
                ->where('PA_year', PA_year())         
                ->first();
        
    

        return view("template.".$request->pages, [
                    "uId" => uId(),
                    "uProfile" => $uProfile,
                    "uEducation" => $uEducation,
                    "inno" => $inno,
                    "train" => $train,
                    "Profile" => $Profile,
                    "develop_hour" => $develop_hour,
                    "support_hour" => $support_hour,
                    "schedule_hour" => $schedule_hour,
                    "issue" => $issue,
                    "standard1" => $standard1,
                    "standard2" => $standard2,
                     "development" => $development,
                     "task" => $task,
                     "topic1" => $topic1,
                      "topic2" => $topic2,
//                     "topic_model"=>$topic_model,
                     "response_hour" => $response_hour])
                    ->withModel($pa_standard);
    }
    
    
     public function coverpage(Request $request) {
         
           $Profile = DB::table('user_profile')
                ->where('user_id', uId())
                ->first();
         
          return view("template.cover.".$request->pages, [
                    "uId" => uId(),
                      "Profile" => $Profile]);
     }
     
     
     public function graphic(Request $request) {
         
         
        $schedule_hour = DB::table('pa_schedule_hour')
                ->where('user_id', uId())
                ->where('PA_year', PA_year())
                ->get();

        $support_hour = DB::table('pa_support_hour')
                ->where('user_id', uId())
                ->where('PA_year', PA_year())
                ->get();

        $develop_hour = DB::table('pa_develop_hour')
                ->where('user_id', uId())
                ->where('PA_year', PA_year())
                ->get();


        $response_hour = DB::table('pa_response_hour')
                ->where('user_id', uId())
                ->where('PA_year', PA_year())
                ->get();


        $train = DB::table('pa_train_hour')
                ->where('user_id', uId())
                ->where('PA_year', PA_year())
                ->get();

        $inno = DB::table('pa_innovation')
                ->where('user_id', uId())
                ->where('PA_year', PA_year())
                ->get();


        $uProfile = DB::table('user_profile')
                ->where('user_id', uId())
                ->get();

        $uEducation = DB::table('user_education')
                ->where('user_id', uId())
                ->get();

        $Profile = DB::table('user_profile')
                ->where('user_id', uId())
                ->first();


        $standard1 = pa_standard::where('root', 0)
                       ->where('no',1) 
                        ->orderBy('no', 'asc')->get();
        
        $standard2 = pa_standard::where('root', 0)
                       ->where('no',"!=",1) 
                        ->orderBy('no', 'asc')->get();

        $pa_standard = pa_standard::find(1);


               $development = pa_standard_development::where('PA_year',PA_year())
                 ->where('user_id', uId())
                ->orderBy('id', 'asc')->get();
               
               
                $task = DB::table('pa_task')
                ->where('user_id', uId())
                ->where('PA_year', PA_year())
                ->orderBy('standard_id','asc')
                ->get();
                
                
        $topic1 = pa_evaluation::where('root', 0)
                        ->where('no',"<=",3)
                        ->where('eva_id', 'WE7845415215')
                        ->orderBy('no', 'asc')->get();
        
         $topic2 = pa_evaluation::where('root', 0)
                        ->where('no',">",3)
                        ->where('eva_id', 'WE7845415215')
                        ->orderBy('no', 'asc')->get();
        
   
        
        $issue = DB::table('pa_issue')
                ->where('user_id', uId())
                ->where('PA_year', PA_year())         
                ->first();
        
    

        return view("template.graphic.".$request->pages, [
                    "uId" => uId(),
                    "uProfile" => $uProfile,
                    "uEducation" => $uEducation,
                    "inno" => $inno,
                    "train" => $train,
                    "Profile" => $Profile,
                    "develop_hour" => $develop_hour,
                    "support_hour" => $support_hour,
                    "schedule_hour" => $schedule_hour,
                    "issue" => $issue,
                    "standard1" => $standard1,
                    "standard2" => $standard2,
                     "development" => $development,
                     "task" => $task,
                     "topic1" => $topic1,
                      "topic2" => $topic2,
//                     "topic_model"=>$topic_model,
                     "response_hour" => $response_hour])
                    ->withModel($pa_standard);
     }
     
     

}
