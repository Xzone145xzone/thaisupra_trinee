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
use App\template;
use Illuminate\Support\Facades\DB;
use Session;
use Input;
use App\pa_evaluation_answer;

class PA5Controller extends Controller {

    public function PA5() {
           $template = DB::table('template')
                       ->get();
           
        return view("PA5.PA5",["template" => $template]);
    }

    public function Template1() {
        return view("template.template1.page2");
    }

   

}
