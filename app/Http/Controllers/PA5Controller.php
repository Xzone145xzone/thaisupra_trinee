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

class PA5Controller extends Controller {

    public function PA5() {
        return view("PA5.PA5_1");
    }

    public function Template1() {
        //  return view("template.resolution");

        return view("template.template1.page2");
    }

    public function document(Request $request) {



        $uProfile = DB::table('user_profile')
                ->where('user_id', uId())
                ->first();

        $uEducation = DB::table('user_education')
                        ->where('user_id', uId())
                        ->orderBy('id', 'asc')->get();


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



        if (!empty($uProfile) && (count($uEducation) > 0) && (count($schedule_hour) > 0) && (count($support_hour) > 0) && (count($develop_hour) > 0) && (count($response_hour) > 0) && (count($train) > 0) && (count($inno) > 0)) {

            $headers = array(
                "Content-type" => "text/html",
                "Content-Disposition" => "attachment;Filename=pa.doc"
            );

            $content = '<html>
            <head><meta charset="utf-8"></head>
            <body style="font-family:"THSarabunNew",sans-serif;font-size:18px;">
            
   
              <img src="/storage/template/template1/cover.gif"> 

<br style="page-break-before: always">

            <center><b><h2>คำนำ</h2></b></center>
            <center>
สำนักงาน ก.ค.ศ. ได้ออกหลักเกณฑ์และวิธีการให้ข้าราชการครูและบุคลากรทางการศึกษา ตำแหน่งครู มีวิทยฐานะและเลื่อนวิทยฐานะ ว 9/2560 หลักเกณฑ์ 
และวิธีการพัฒนาข้าราชการครูและบุคลากรทางการศึกษา  สายการสอน ว 3/2564 เมื่อวันที่ 26 มกราคม 2564 และการใช้งานระบบประเมินวิทยฐานะดิจิทัล 
(Digital Performance Appraisal) เมื่อวันที่ 20 พฤษภาคม 2564 ครูจะต้องประเมินตนเอง จัดทำข้อตกลงในการพัฒนางาน (Performance Agreement) 
ร่วมกับผู้บริหารสถานศึกษาทางผู้จัดทำข้อตกลงในการพัฒนางาน(Performance Agreement) จึงได้จัดทำเอกสารดังกล่าวเพื่อให้เป็นไปตามนโยบายกระทรวงศึกษาธิการ
ในการปฏิรูประบบการพัฒนาครู เพื่อตอบสนองต่อการพัฒนาทรัพยากรบุคคลอย่างมีระบบ และมีประสิทธิภาพสูงสุด สอดคล้องกับยุทธศาสตร์ชาติระยะ 20 ปี 
</center>

<br style="page-break-before: always">

   <center><b><h2>สารบัญ</h2></b></center>
   											
<br><br><b>ส่วนที่ 1 ข้อมูลผู้จัดทำข้อตกลงในการพัฒนางาน</b>							
<br>1.1 ข้อมูลทั่วไป                                                 	                    				
<br>1.2 ประวัติการทำงาน                                        						
<br>1.3 ชั่วโมงการปฏิบัติหน้าที่ในปีการศึกษา  ..........						
<br>1.4 การอบรบ/พัฒนาตนเองในปีการศึกษาที่ผ่านมา						
<br>1.5 สื่อการเรียนรู้/นวัตกรรม					               			
<br><b>ส่วนที่ 2 ผลการประเมินงานตามมาตรฐานตำแหน่งและภาระงานตามที่ ก.ค.ศ. กำหนด</b>		
<br>2.1 ผลการประเมินงานตามมาตรฐานตำแหน่งและภาระงานตามที่ ก.ค.ศ. กำหนด		          
<br>2.2 ผลสรุปการประเมินงานตามมาตรฐานตำแหน่งและภาระงานตามที่ ก.ค.ศ. กำหนด		
<br>2.3 สรุปแผนการพัฒนาตนเองและวิชาชีพ                                   			          
<br>2.4 ความต้องการและคำรับรองในการพัฒนาตนเองและวิชาชีพของผู้จัดทำ                   		
<br><b>ส่วนที่ 3 การวิเคราะห์ประเด็นท้าทายในการพัฒนาผลลัพธ์การเรียนรู้ของผู้เรียน</b>	 		
<br>3.1 ผลการประเมินการวิเคราะห์ประเด็นท้าทายในการพัฒนาผลลัพธ์การเรียนรู้ของผู้เรียน	        
<br>3.2 ผลสรุปผลการประเมินการวิเคราะห์ประเด็นท้าทายในการพัฒนาผลลัพธ์การเรียนรู้ของผู้เรียน	
<br><b>ส่วนที่ 4 แนวทางการการพัฒนาและผลการพัฒนาผลลัพธ์การเรียนรู้ของผู้เรียนตามประเด็นท้าทาย</b>	
<br>4.1 ประเด็นท้าทาย										
<br>4.2 ความเป็นมาและความสำคัญของประเด็นท้าทาย						
<br>4.3 วัตถุประสงค์ของการดำเนินแก้ไขประเด็นท้าทาย						
<br>4.4 วิธีดำเนินการดำเนินแก้ไขประเด็นท้าทาย							
<br>4.5 ผลการดำเนินแก้ไขประเด็นท้าทาย 								
<br>4.6 อภิปรายผลการดำเนินแก้ไขประเด็นท้าทาย							
<br>4.7 ข้อเสนอแนะ										
<br><b>ภาคผนวก</b>


<br style="page-break-before: always">

<center><b>ข้อตกลงในการพัฒนางานสำหรับครู
<br>(Performance Agreement)</b></center>

<br><b>ส่วนที่  1  ข้อมูลผู้จัดทำข้อตกลงในการพัฒนางาน</b>
<br><u><b>ข้อมูลทั่วไป</b></u>
<br><table style="width:80%;" border="0"> 
<tr><td style="width:30%;">ชื่อ-สกุล</td>
<td>'.$uProfile->firstname.' '.$uProfile->lastname.'</td>
</tr>
<tr><td>ตำแหน่ง</td>
<td>'.$uProfile->position.'</td>
</tr>
<tr><td>กลุ่มสาระการเรียนรู้</td>
<td>'.$uProfile->major.'</td>
</tr>
<tr><td>สัญชาติ </td>
<td>'.$uProfile->national.'</td>
</tr>
<tr><td>เชื้อชาติ </td>
<td>'.$uProfile->race.'</td>
</tr>
<tr><td>ศาสนา </td>
<td>'.$uProfile->religion.'</td>
</tr>
<tr><td>ที่อยู่ </td>
<td>' . $uProfile->address . '</td>
</tr></table>
<br>';

            $content .= '<b><u>ประวัติการศึกษา</u></b>'
                    . '<table style="width:90%;" border="0">'
                    . '<tr>'
                    . '<td><b>วุฒิ</b></td>'
                    . '<td><b>คณะ</b></td>'
                    . '<td><b>สาขา</b></td>'
                    . '<td><b>สถานศึกษา</b></td>'
                    . '</tr>';

            foreach ($uEducation as $uEducation) {
                $content .= '<tr>'
                        . '<td>' . $uEducation->edu_type . '</td>'
                        . '<td>' . $uEducation->faculty . '</td>'
                        . '<td>' . $uEducation->major . '</td>'
                        . '<td>' . $uEducation->school . '</td>'
                        . '</tr>';
            }
            $content .= '</table><br>';

            $content .= '<b><u>ประวัติการทำงาน</u></b>'
                    . '<br><table style="width:80%;" border="0"> '
                    . '<tr>'
                    . '<td style="width:30%">วันที่เริ่มรับราชการ</td>'
                    . '<td>' . $uProfile->datestart . '</td>'
                    . '</tr>'
                    . '<tr>'
                    . '<td style="width:30%">วันที่บรรจุ</td>'
                    . '<td>' . $uProfile->datebegin . '</td>'
                    . '</tr>'
                    . '<tr>'
                    . '<td style="width:30%">วิทยฐานะ</td>'
                    . '<td>' . $uProfile->academic . '</td>'
                    . '</tr>'
                    . '<tr>'
                    . '<td>วันที่ดำรงค์ตำแหน่ง</td>'
                    . '<td>' . $uProfile->dateacademic . '</td>'
                    . '</tr>'
                    . '<tr>'
                    . '<td>เงินเดือน</td>'
                    . '<td>' . $uProfile->salary . '</td>'
                    . '</tr>'
                    . '<tr>'
                    . '<td>สังกัด</td>'
                    . '<td>' . $uProfile->school_department . '</td>'
                    . '</tr>'
                    . '<tr>'
                    . '<td>โรงเรียน</td>'
                    . '<td>' . $uProfile->school . '</td>'
                    . '</tr>';
            $content .= '</table><br>'
                    . '<br style="page-break-before: always">';


            $sch_hour = 0;

            $content .= '<b>วิชาที่ทำการสอน</b><br>'
                    . '<table style="width:100%;border-collapse: collapse;" border="1">'
                    . '<tr>'
                    . '<td><b>กลุ่มสาระ</b></td><td><b>วิชา</b></td><td><b>ระดับชั้น</b></td><td><b>ชั่วโมงที่ทำการสอน</b></td>'
                    . '</tr>';
            foreach ($schedule_hour as $schedule_hour) {

                $content .= '<tr>'
                        . '<td>' . $schedule_hour->group_learn . '</td>'
                        . '<td>' . $schedule_hour->subject . '</td>'
                        . '<td>' . $schedule_hour->grade . '</td>'
                        . '<td>' . $schedule_hour->sch_hour . '</td>'
                        . '</tr>';

                $sch_hour += $schedule_hour->sch_hour;
            }
            $content .= '<tr>'
                    . '<td colspan="3" style="text-align:center;"><b>รวมชั่วโมงในการปฏิบัติหน้าที่</b></td>'
                    . '<td><b>' . $sch_hour . '</b></td>'
                    . '</tr>';

            $content .= '</table>';



            $sp_hour = 0;

            $content .= '<br><b>งานส่งเสริมและสนับสนุนการจัดการเรียนรู้</b><br>'
                    . '<table style="width:100%;border-collapse: collapse;" border="1">'
                    . '<tr>'
                    . '<td><b>งานส่งเสริมและสนับสนุนการจัดการเรียนรู้</b></td>'
                    . '<td><b>ชั่วโมง/สับดาห์</b></td>'
                    . '</tr>';
            foreach ($support_hour as $support_hour) {

                $content .= '<tr>'
                        . '<td>' . $support_hour->support_detail . '</td>'
                        . '<td>' . $support_hour->sp_hour . '</td>'
                        . '</tr>';

                $sp_hour += $support_hour->sp_hour;
            }
            $content .= '<tr>'
                    . '<td style="text-align:center;"><b>รวมชั่วโมงในการปฏิบัติหน้าที่</b></td>'
                    . '<td><b>' . $sp_hour . '</b></td>'
                    . '</tr>';

            $content .= '</table>';


            $dev_hour = 0;

            $content .= '<br><b>งานพัฒนาคุณภาพการจัดการศึกษาของสถานศึกษา</b><br>'
                    . '<table style="width:100%;border-collapse: collapse;" border="1">'
                    . '<tr>'
                    . '<td><b>งานพัฒนาคุณภาพการจัดการศึกษาของสถานศึกษา</b></td>'
                    . '<td><b>ชั่วโมง/สับดาห์</b></td>'
                    . '</tr>';
            foreach ($develop_hour as $develop_hour) {

                $content .= '<tr>'
                        . '<td>' . $develop_hour->develops . '</td>'
                        . '<td>' . $develop_hour->dev_hour . '</td>'
                        . '</tr>';

                $dev_hour += $develop_hour->dev_hour;
            }
            $content .= '<tr>'
                    . '<td style="text-align:center;"><b>รวมชั่วโมงในการปฏิบัติหน้าที่</b></td>'
                    . '<td><b>' . $dev_hour . '</b></td>'
                    . '</tr>';

            $content .= '</table>';


            $res_hour = 0;

            $content .= '<br><b>งานตอบสนองนโยบายและจุดเน้น</b><br>'
                    . '<table style="width:100%;border-collapse: collapse;" border="1">'
                    . '<tr>'
                    . '<td><b>งานตอบสนองนโยบายและจุดเน้น</b></td>'
                    . '<td><b>ชั่วโมง/สับดาห์</b></td>'
                    . '</tr>';
            foreach ($response_hour as $response_hour) {

                $content .= '<tr>'
                        . '<td>' . $response_hour->response . '</td>'
                        . '<td>' . $response_hour->res_hour . '</td>'
                        . '</tr>';

                $res_hour += $response_hour->res_hour;
            }
            $content .= '<tr>'
                    . '<td style="text-align:center;"><b>รวมชั่วโมงในการปฏิบัติหน้าที่</b></td>'
                    . '<td><b>' . $res_hour . '</b></td>'
                    . '</tr>';

            $content .= '</table>';



            $content .= '<br><b>การอบรมและพัฒนาตัวเอง</b><br>'
                    . '<table style="width:100%;border-collapse: collapse;" border="1">'
                    . '<tr>'
                    . '<td><b>หัวข้อในการอบรม</b></td>'
                    . '<td><b>วันเริ่มต้น</b></td>'
                    . '<td><b>วันสิ้นสุด</b></td>'
                    . '<td><b>จำนวนชั่วโมง</b></td>'
                    . '<td><b>หน่วยงานที่จัด</b></td>'
                    . '</tr>';
            foreach ($train as $train) {

                $content .= '<tr>'
                        . '<td>' . $train->train . '</td>'
                        . '<td>' . $train->train_hour . '</td>'
                        . '<td>' . $train->start_date . '</td>'
                        . '<td>' . $train->end_date . '</td>'
                        . '<td>' . $train->agency . '</td>'
                        . '</tr>';
            }

            $content .= '</table>';


            $content .= '<br><b>สื่อการเรียนรู้และนวัตกรรม</b><br>';

            $content .= '<ul>';

            foreach ($inno as $inno) {
                $content .= '<li>' . $inno->innovation . '</li>';
            }

            $content .= '</ul>';

            $content .= '<br><b>ประเภทห้องเรียนที่จัดการเรียนรู้</b><br>';

            $content .= '</body></html>';
            return \Response::make($content, 200, $headers);
        } else {

            return redirect('PA5');
        }
    }

}
