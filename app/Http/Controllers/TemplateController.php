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

class TemplateController extends Controller {



    public function loadpage(Request $request) {

        return view("template.".$request->pages);
    }
    
    
     public function coverpage(Request $request) {

          return view("template.cover.".$request->pages);
     }
     
     
     public function graphic(Request $request) {  
         return view("template.graphic.".$request->pages);
     }
     
     

}
