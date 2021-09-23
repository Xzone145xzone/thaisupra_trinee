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
use Illuminate\Support\Facades\DB;
use Session;
use Input;
use App\pa_evaluation_answer;

class PA3Controller extends Controller {

    public function PA3() {
//        
//        $answer = pa_evaluation_answer::where('eva_id',$eva_id)
//                ->where('user_id',$user_id)   
//                ->where('root',$root)   
//                 ->where('sub',$sub)   
//                ->first();

        return view("PA3.PA3");
    }

    public function PA3_resolution() {
        return view("PA3.resolution");
    }

    public function evaluation() {
        return view("PA3.evaluation_later");
    }

    public function PA3_evaluation(Request $request) {

        $answer = pa_evaluation_answer::where('eva_id', $request->eva_id)
                ->where('user_id', uId())
                ->get();

        $topic = pa_evaluation::where('root', 0)
                        ->where('eva_id', $request->eva_id)
                        ->orderBy('no', 'asc')->get();
        $model = pa_evaluation::find(1);

        if (count($answer) > 0) {
            return view("PA3.evaluation_answer", ["topic" => $topic,
                                "eva_id" => $request->eva_id,
                                "user_id" => uId()])
                            ->withModel($model);
        } else {
            return view("PA3.evaluation", ["topic" => $topic, "eva_id" => $request->eva_id])->withModel($model);
        }
    }

    public function PA3_techer_evaluation() {

        return view("PA3.evaluation");
    }

    public function PA3_evaluation_answer(Request $request) {

        $topic = pa_evaluation::where('root', 0)
                        ->where('eva_id', $request->hdneva_id)
                        ->orderBy('no', 'asc')->get();
        foreach ($topic as $topic) {
            $question = pa_evaluation::find_question($topic->no);
            foreach ($question as $question) {
                $answer = $request->answer[$topic->no][$question->no];
                DB::table('pa_evaluation_answer')->insert([
                    ['user_id' => uId(),
                        'eva_id' => $request->hdneva_id,
                        'root' => $topic->no,
                        'sub' => $question->no,
                        'answer' => $answer]
                ]);
//                 echo "choice :::: ".$topic->no."_".$question->no."<br>";
//                 echo "answer ::: ".$answer."<br>";
//                 echo "---------------------------<br>";
            }
        }

        return redirect('PA3');
    }

    public function PA3_evaluation_result(Request $request) {

        $topic = pa_evaluation::where('root', 0)
                        ->where('eva_id', $request->eva_id)
                        ->orderBy('no', 'asc')->get();
        $model = pa_evaluation::find(1);
        return view("PA3.evaluation_answer", ["topic" => $topic,
                            "eva_id" => $request->eva_id,
                            "user_id" => $request->user_id])
                        ->withModel($model);
    }

}
