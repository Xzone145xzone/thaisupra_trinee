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

class PA4Controller extends Controller {

    public function PA4() {
        $issue = DB::table('pa_issue')
                ->where('user_id', uId())
                ->where('PA_year', PA_year())
                ->first();

        if (!empty($issue) > 0) {
            return view("PA4.PA4_update", ["issue" => $issue]);
        } else {
            return view("PA4.PA4_create");
        }
    }

    public function PA4_insert(Request $request) {
        DB::table('pa_issue')->insert([
            ['user_id' => uId(),
                'PA_year' => PA_year(),
                'issue' => $request->txtissue,
                'detail_1' => $request->txtdetail_1,
                'detail_2' => $request->txtdetail_2,
                'detail_3' => $request->txtdetail_3,
                'detail_4' => $request->txtdetail_4]
        ]);
        return redirect('PA4');
    }

//    public function PA4_doc(Request $request) {
//
//        $issue = DB::table('pa_issue')
//                ->where('user_id', uId())
//                ->where('PA_year', PA_year())
//                ->first();
//
//        $phpWord = new \PhpOffice\PhpWord\PhpWord();
//        $section = $phpWord->addSection();
//
//        $phpWord->setDefaultParagraphStyle(
//                array('spaceAfter' => \PhpOffice\PhpWord\Shared\Converter::pointToTwip(0),
//                    'spacing' => 1,
//                    'lineHeight' => 1,
//        ));
//
//        $bold = array('bold' => true, 'size' => 16, 'name' => 'TH SarabunPSK');
//        $normal = array('size' => 16, 'name' => 'TH SarabunPSK');
//
//        $section->addText("ประเด็นท้าทาย เรื่อง ", $bold);
//        $section->addText($issue->issue, $normal);
//        $section->addText("1.สภาพปัญหาของผู้เรียนและการจัดการเรียนรู้", $bold);
//        $section->addText($issue->detail_1, $normal);
//        $section->addText("2.วิธีการดำเนินการให้บรรลุผล", $bold);
//        $section->addText($issue->detail_2, $normal);
//        $section->addText("3.ผลลัพธ์การพัฒนาที่คาดหวัง", $bold);
//        $section->addText("3.1 เชิงปริมาณ", $bold);
//        $section->addText($issue->detail_3, $normal);
//        $section->addText("3.2 เชิงคุณภาพ", $bold);
//        $section->addText($issue->detail_4, $normal);
//
//
//        $section->addText('<w:br/><w:br/>');
//
//
//        $section->addText("ลงชื่อ.....................................................................", $normal);
//        $section->addText("(.........................................................................)", $normal);
//        $section->addText("ตำแหน่ง.................................................................. ", $normal);
//        $section->addText(" ผู้จัดทำข้อตกลงในการพัฒนางาน", $bold);
//        $section->addText("................/.............../...................", $normal);
//
//        $section->addText('<w:br/><w:br/>');
//
//        $section->addText("ความเห็นของผู้อำนวยการสถานศึกษา", $bold);
//        $section->addText("( ) เห็นชอบให้เป็นข้อตกลงในการพัฒนางาน ", $normal);
//        $section->addText("( ) ไม่เห็นชอบให้เป็นข้อตกลงในการพัฒนางาน โดยมีข้อเสนอแนะเพื่อนำไปแก้ไข และเสนอเพื่อพิจารณาอีกครั้ง ดังนี้ ", $normal);
//
//        $section->addText("...........................................................................................................................................................................................................................................................................................................................................................", $normal);
//
//
//        $section->addText('<w:br/><w:br/>');
//        $section->addText("ลงชื่อ.....................................................................", $normal);
//        $section->addText("(.........................................................................)", $normal);
//        $section->addText("ตำแหน่ง....................................................................", $normal);
//        $section->addText("................/.............../...................", $normal);
//
//
//
//
//        $objWriter = \PhpOffice\PhpWord\IOFactory::createWriter($phpWord, 'Word2007');
//        try {
//            $objWriter->save(storage_path('pa3.docx'));
//        } catch (Exception $e) {
//            
//        }
//
//
//        return response()->download(storage_path('pa3.docx'));
//    }
    
    
    
    public function PA4_update_field(Request $request) {

        pa_issue::where('id', $request->id)
                ->update(array($request->field => $request->value));
        return true;
    }

    
    public function PA4_doc(Request $request){
        
        
                $issue = DB::table('pa_issue')
                ->where('id',$request->id)
                ->first();
                                        
        $headers = array(
        "Content-type"=>"text/html",
        "Content-Disposition"=>"attachment;Filename=pa.doc"
        );
                
        $content = '<html>
            <head><meta charset="utf-8"></head>
            <body style="font-family:"THSarabunNew",sans-serif;font-size:16px;">
                <b>ประเด็นท้าทาย เรื่อง</b> <br> '.$issue->issue.'
                <p><b>1.สภาพปัญหาของผู้เรียนและการจัดการเรียนรู้ </b>
                '.$issue->detail_1.'
                <p><b>2.วิธีการดำเนินการให้บรรลุผล </b> 
                '.$issue->detail_2.'
                <p><b>3.ผลลัพธ์การพัฒนาที่คาดหวัง </b> 
                <p><b>3.1 เชิงปริมาณ </b> 
                '.$issue->detail_3.'     
                <p><b>3.2 เชิงคุณภาพ </b> 
                '.$issue->detail_4.'
                <div style="width:100%;">
                <div style="width:800px;float:left;"></div>
                <div style="width:50%;text-align:center;float:left;">
                 ลงชื่อ..........................................................................
                <br>(.........................................................................)
                <br>ตำแหน่ง.....................................................................
                <br><b>ผู้จัดทำข้อตกลงในการพัฒนางาน</b>
                <br>................/.............../...................
                </div>               
                </div>    
                <p><b>ความเห็นของผู้อำนวยการสถานศึกษา</b>   
                <p>( ) เห็นชอบให้เป็นข้อตกลงในการพัฒนางาน  
                <p>( ) ไม่เห็นชอบให้เป็นข้อตกลงในการพัฒนางาน โดยมีข้อเสนอแนะเพื่อนำไปแก้ไข และเสนอเพื่อพิจารณาอีกครั้ง ดังนี้
                <p>...................................................................................................................................................................................................................................................................................................................................................................................................... 
                 <div style="width:100%;">
                <div style="width:50%;float:left;">.</div>
                <div style="width:50%;text-align:center;float:left;">
                 ลงชื่อ..........................................................................
                <br>(.........................................................................)
                <br>ตำแหน่ง.....................................................................
                <br><b>ผู้จัดทำข้อตกลงในการพัฒนางาน</b>
                <br>................/.............../...................
                </div>               
                </div>    
            </body>
            </html>';
    
    return \Response::make($content,200, $headers);
                
    }
}
