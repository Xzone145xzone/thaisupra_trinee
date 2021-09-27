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

class Template1Controller extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        //
    }
    
    
    
    public function index(Request $request){
        
        $issue = DB::table('pa_issue')
                ->where('id',$request->id)
                ->first();
          
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
    
//             return view("template.template1.".$request->page, [
//              "uId"=>uId(),
//              "uProfile" => $uProfile, 
//              "uEducation" => $uEducation]);        
          return view("template.template1.".$request->pages, [
              "uId"=>uId(),
              "uProfile" => $uProfile, 
              "uEducation" => $uEducation, 
              "inno" => $inno,
              "train"=>$train,
              "develop_hour"=>$develop_hour,
              "support_hour"=>$support_hour,
              "schedule_hour"=>$schedule_hour,
              "issue"=>$issue,
              "response_hour"=>$response_hour]);  
    }
}
