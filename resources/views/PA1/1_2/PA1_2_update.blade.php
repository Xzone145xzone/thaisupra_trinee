@extends('layouts.app')    
@section('content')

<style>

    .table_green td{
        text-align: center;
    }

    .table_green input{
        text-align: center;
    }

</style>


<div class="container-fluid" id="container-fluid">


    <div class="child">
        <div class="page_header">
            <table class="tb_header">
                <tr class="border_bottom">
                    <td colspan="2">
                        <span class="text_blue"><b><u>ส่วนที่ 1</u> ข้อมูลผู้จัดทำแผนพัฒนาตน</b></span>
                    </td>
                    <td colspan="3" style="text-align:right;">
                        <span class="text_blue"><b>ภาระงานตามที่ ก.ค.ศ. กำหนด</b></span>
                    </td>
                </tr>

            </table>
            @include('layouts.main1')
        </div>
        <div class="row" id="block">
            <table style="width: 100%;" border="0" >
                <tr>
                    <td style="width: 50%;">
                        <p><b><u><span style="color:#1050A2;">1.1. วิชาที่ทำการสอน</span></u></b></p>
                    </td>
                    <td style="text-align:right;width: 50%;">
                        <a class="btn_page" onclick="add_schedule_edit();"><span class="fa fa-plus" ></span> เพิ่ม</a>
                    </td>
                </tr>
            </table> 

            <table class="table_green" >
                <tr class="tr_header">
                          <th style="width:30%;">กลุ่มสาระ</th>
                    <th style="width:30%;">วิชาที่ทำการสอน</th>
                    <th style="width:10%;">ระดับชั้น</th>
                    <th style="width:20%;">ชั่วโมง</th>
                    <th style="width:10%;"></th>
                </tr>
                <?php
                $sch_hr = 0;
                $i = 0;
                ?>
                
                @if(count($schedule_hour)>0)
                
                @foreach($schedule_hour as $schedule_hours)
                <tr>
                    <td style="padding-left: 30px;">
                        <div id="ele_group_learn_{{$i}}" class="display_none">
                            
                            
                            <select  class="form-control" id="txtgroup_learn" name="txtgroup_learn[{{$i}}]" onchange="update_sch_field({{$schedule_hours->id}},{{$i}}, 'group_learn');" required>
                                    <option value="">-กลุ่มสาระการเรียนรู้-</option>
                                    @foreach(group_learn('all') as $learn)
                                    @if($schedule_hours->group_learn == $learn->group)
                                    <option value="{{$learn->group}}" selected>{{$learn->group}}</option>
                                    @else
                                    <option value="{{$learn->group}}">{{$learn->group}}</option>
                                    @endif
                                    @endforeach
                            </select>
                        </div>
                        <div id="text_group_learn_{{$i}}" class="display_text"  onclick="show_ele('group_learn_{{$i}}');">
                            {{$schedule_hours->group_learn}}
                        </div>                        
                    </td>
                    <td style="padding-left: 30px;">
                        <div id="ele_subject_{{$i}}" class="display_none">
                            <input type="text" class="form-control" id="txtsubject" value="{{$schedule_hours->subject}}" onchange="update_sch_field({{$schedule_hours->id}},{{$i}}, 'subject');" name="txtsubject[{{$i}}]" required>
                        </div>
                        <div id="text_subject_{{$i}}" class="display_text"  onclick="show_ele('subject_{{$i}}');">
                            {{$schedule_hours->subject}}
                        </div>                        
                    </td>
                    <td>
                        <div id="ele_grade_{{$i}}" class="display_none">
                            <input type="text" class="form-control" id="txtgrade" value="{{$schedule_hours->grade}}" onchange="update_sch_field({{$schedule_hours->id}},{{$i}}, 'grade');" name="txtgrade[{{$i}}]" required>
                        </div>
                        <div id="text_grade_{{$i}}" class="display_text"  onclick="show_ele('grade_{{$i}}');">
                            {{$schedule_hours->grade}}
                        </div>      
                    </td>
                    <td>
                        <div id="ele_sch_hour_{{$i}}" class="display_none">
                            <input type="text" class="form-control" id="txtsch_hour" value="{{$schedule_hours->sch_hour}}" onchange="update_sch_field({{$schedule_hours->id}},{{$i}}, 'sch_hour');" name="txtsch_hour[{{$i}}]" required>
                        </div>
                        <div id="text_sch_hour_{{$i}}" class="display_text"  onclick="show_ele('sch_hour_{{$i}}');">
                            {{$schedule_hours->sch_hour}}
                        </div>   
                        <?php $sch_hr += $schedule_hours->sch_hour; ?>
                    </td>
                    <td>
                        <a class="btn btn-default" onclick="delete_row_sch({{$schedule_hours->id}});"><li class="fa fa-trash"></li></a>   
                    </td>
                </tr>
                    <?php $i++; ?>
                @endforeach

                @else
                <tr style="height:40px;">
                    <td colspan="5" style="text-align:center;">ไม่มีข้อมูล</td>
                </tr>
                @endif
            

                <tr class="tr_footer" id="tbl_schedule">
                    <th colspan="3">สรุปชั่วโมงการปฏิบัติหน้าที่</th>
                    <th style="text-align: center;">{{$sch_hr}}</th>
                    <th>
                    </th>
                </tr>
            </table>
        </div>
    </div>



    <div class="child" style="padding-bottom: 50px;">

        <div class="row" id="block">   
            <table style="width: 100%;" border="0" >
                <tr style="height: 70px;">
                    <td style="width: 50%;">
                        <p><b><u> <span style="color:#1050A2;">1.2. งานส่งเสริมและสนับสนุนการจัดการเรียนรู้</span></u></b></p>
                    </td>
                    <td style="text-align:right;width: 50%;">
                        <a class="btn_page" onclick="add_support_edit();" ><span class="fa fa-plus"></span> เพิ่ม</a>
                    </td>
                </tr>
            </table>  
            <table class="table_green" >
                <tr class="tr_header">
                    <th style="width: 60%;">งานส่งเสริมและสนับสนุนการจัดการเรียนรู้</th>
                    <th style="width: 20%;">ชั่วโมง/สับดาห์</th>
                    <th style="width: 20%;"></th>
                </tr>
                <?php
                $sp_hr = 0;
                $j = 0;
                ?>
               
                @if(count($support_hour)>0)
                
                @foreach($support_hour as $support_hours)  
                <tr style="height:40px;">
                    <td>
                        <div id="ele_support_detail_{{$j}}" class="display_none">
                            <input type="text" class="form-control" id="txtsupport_detail" value="{{$support_hours->support_detail}}" name="txtsupport_detail[{{$j}}]" onchange="update_sp_field({{$support_hours->id}},{{$j}},'support_detail');" required>
                        </div>
                        <div id="text_support_detail_{{$j}}" style="width:100%;" onclick="show_ele('support_detail_{{$j}}');">
                            {{$support_hours->support_detail}}
                        </div>   
                    </td>
                    <td>
                        <div id="ele_sp_hour_{{$j}}" class="display_none">
                            <input type="text" class="form-control" id="txtsp_hour" value="{{$support_hours->sp_hour}}" name="txtsp_hour[{{$j}}]"  onchange="update_sp_field({{$support_hours->id}},{{$j}},'sp_hour');" required>
                        </div>
                        <div id="text_sp_hour_{{$j}}" style="width:100%;" onclick="show_ele('sp_hour_{{$j}}');">
                            {{$support_hours->sp_hour}}
                        </div>   
                        <?php $sp_hr += $support_hours->sp_hour;
                        $j++;
                        ?> 
                    </td>
                    <td>
                        <a class="btn btn-default" onclick="delete_row_sp({{$support_hours->id}});"><li class="fa fa-trash"></li></a>  
                    </td>
                </tr>
                @endforeach
                @else 
                <td colspan="3" style="text-align:center;">ไม่มีข้อมูล</td>
                @endif
                <tr class="tr_footer" id="tbl_support">
                    <th>สรุปชั่วโมงการปฏิบัติหน้าที่</th>
                    <th>{{$sp_hr}}</th>
                    <th></th>
                </tr>
            </table>
        </div>
    </div>


    <div class="child" style="padding-bottom: 50px;">

        <div class="row" id="block">   
            <table style="width: 100%;" border="0" >
                <tr style="height: 70px;">
                    <td style="width: 50%;">
                        <p><b><u> <span style="color:#1050A2;">1.3. งานพัฒนาคุณภาพการจัดการศึกษาของสถานศึกษา </span></u></b></p>
                    </td>
                    <td style="text-align:right;width: 50%;">
                        <a class="btn_page" onclick="add_develop_edit();" ><span class="fa fa-plus"></span> เพิ่ม</a>
                    </td>
                </tr>
            </table>  
            <table class="table_green" >
                <tr class="tr_header">
                    <th style="width: 60%;">งานพัฒนาคุณภาพการจัดการศึกษาของสถานศึกษา</th>
                    <th style="width: 20%;">ชั่วโมง/สับดาห์</th>
                    <th style="width: 20%;"></th>
                </tr>
                 <?php
                $dev_hr = 0;
                $k = 0;
                ?>
                 @if(count($develop_hour)>0)
                @foreach($develop_hour as $develop_hours)
                <tr style="height:40px;">
                    <td>
                         <div id="ele_develops_{{$k}}" class="display_none">
                            <input type="text" class="form-control" id="txtdevelops" value="{{$develop_hours->develops}}" name="txtdevelops[{{$k}}]" onchange="update_dev_field({{$develop_hours->id}},{{$k}},'develops');" required>
                        </div>
                        <div id="text_develops_{{$k}}" style="width:100%;" onclick="show_ele('develops_{{$k}}');">
                            {{$develop_hours->develops}}
                        </div>   
                    </td>
                    <td>
                         <div id="ele_dev_hour_{{$k}}" class="display_none">
                             <input type="number" class="form-control" id="txtdev_hour" value="{{$develop_hours->dev_hour}}" name="txtdev_hour[{{$k}}]" onchange="update_dev_field({{$develop_hours->id}},{{$k}},'dev_hour');" required>
                        </div>
                        <div id="text_dev_hour_{{$k}}" style="width:100%;" onclick="show_ele('dev_hour_{{$k}}');">
                            {{$develop_hours->dev_hour}}
                        </div>   
                          <?php $dev_hr+=$develop_hours->dev_hour;$k++;?> 
                    </td>
                    <td>
                         <a class="btn btn-default" onclick="delete_row_dev({{$develop_hours->id}});"><li class="fa fa-trash"></li></a>  
                    </td>
                </tr> 
                @endforeach
                 @else 
                <td colspan="3" style="text-align:center;">ไม่มีข้อมูล</td>
                @endif
                <tr class="tr_footer" id="tbl_develop">
                    <th>สรุปชั่วโมงการปฏิบัติหน้าที่</th>
                    <th>{{$dev_hr}}</th>
                    <th></th>
                </tr>
            </table>
        </div>
    </div>

    <div class="child" style="padding-bottom: 50px;">

        <div class="row" id="block">   
            <table style="width: 100%;" border="0" >
                <tr style="height: 70px;">
                    <td style="width: 50%;">
                        <p><b><u> <span style="color:#1050A2;">1.4. งานตอบสนองนโยบายและจุดเน้น </span></u></b></p>
                    </td>
                    <td style="text-align:right;width: 50%;">
                        <a class="btn_page" onclick="add_response_edit();" ><span class="fa fa-plus"></span> เพิ่ม</a>
                    </td>
                </tr>
            </table>  
            <table class="table_green" >
                <tr class="tr_header">
                    <th style="width: 60%;">งานตอบสนองนโยบายและจุดเน้น</th>
                    <th style="width: 20%;">ชั่วโมง/สับดาห์</th>
                    <th style="width: 20%;"></th>
                </tr>
                 <?php
                $res_hr = 0;
                $z = 0;
                ?>
                  @if(count($response_hour)>0)
                @foreach($response_hour as $response_hours)
                <tr style="height:40px;">
                    <td>
                         <div id="ele_response_{{$z}}" class="display_none">
                             <input type="text" class="form-control" id="txtresponse" value="{{$response_hours->response}}" name="txtresponse[{{$z}}]" onchange="update_res_field({{$response_hours->id}},{{$z}},'response');" required>
                        </div>
                        <div id="text_response_{{$z}}" style="width:100%;" onclick="show_ele('response_{{$z}}');">
                            {{$response_hours->response}}
                        </div>   
                    </td>
                    <td>
                         <div id="ele_res_hour_{{$z}}" class="display_none">
                             <input type="number" class="form-control" id="txtres_hour" value="{{$response_hours->res_hour}}" name="txtres_hour[{{$z}}]" onchange="update_res_field({{$response_hours->id}},{{$z}},'res_hour');" required>
                        </div>
                        <div id="text_res_hour_{{$z}}" style="width:100%;" onclick="show_ele('res_hour_{{$z}}');">
                            {{$response_hours->res_hour}}
                        </div>   
                          <?php $res_hr+=$response_hours->res_hour;$z++;?> 
                    </td>
                    <td>
                         <a class="btn btn-default" onclick="delete_row_res({{$response_hours->id}});"><li class="fa fa-trash"></li></a>  
                    </td>
                </tr>
                @endforeach
                  @else 
                <td colspan="3" style="text-align:center;">ไม่มีข้อมูล</td>
                @endif
                <tr class="tr_footer" id="tbl_response">
                    <th>สรุปชั่วโมงการปฏิบัติหน้าที่</th>
                    <th></th>
                    <th></th>
                </tr>
            </table>
        </div>
    </div> 


    <center>
        <a  href="PA1_3" class="btn_blue"><li style="margin-right:10px;font-size: 18pt;" class="fa fa-arrow-circle-right "></li> ไปยังขั้นตอนถัดไป</a>
    </center> 

</div>

@endsection