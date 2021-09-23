@extends('layouts.app')    
@section('content')
<!-- Page content-->

<div class="container-fluid" style="padding-bottom:100px;">
    <div class="child">
        <div class="page_header">
            <table class="tb_header">
                <tr class="border_bottom">
                    <td colspan="3">
                        <span class="text_blue"><b><u>ส่วนที่ 3</u> การวิเคราะห์ประเด็นท้าทายในการพัฒนาผลลัพธ์การเรียนรู้ของผู้เรียน</b></span>
                    </td>
                    <td colspan="2" style="text-align:right;">
                        <span class="text_blue"><b>แบบประเมิณ</b></span>
                    </td>
                </tr>

            </table>
        </div>

        <span class="text_blue"><b>เลขที่แบบประเมิณ : WE7845415215</b></span>
        
        <div class="row" style="margin:30px;">            
            <a class="btn_blue" href="{{url('PA3_evaluation/WE7845415215')}}" style='width:200px;'>
                <li style="margin-right:10px;font-size: 18pt;" class="fa fa-arrow-circle-right "></li> 
                เริ่มทำแบบประเมิณ
            </a> 
        </div>
        <div class="row">

            <div class="col-lg-8 col-md-8 col-sm-12" style="float: left;padding: 0;">
                
<!--            <div class="col-lg-2 col-md-2 col-sm-12" style="float: left;text-align: center;">
                <div style="width: 100%;height: 60%;">
                    <div style="width:100%;text-align: center;color: white;background-color:#303E89;vertical-align: central;padding:1em;">
                        <span style="font-size:50pt;" class="fa fa-user"></span>
                        <span style="font-size:18pt;">25</span><br>
                        ผู้ประเมิณทั้งหมด

                    </div>
                     <div style="width:100%;padding: 0.5em;text-align: center;color: white;background-color:#C4C4C4;">

                        <a>สรุปคะแนนประเมิณ</a>
                    </div>
                </div>
            </div>-->
                
                
                <table class="table_green" style="width:100%;margin:0;" border='1'>
                    <tr class="tr_header">
                        <th> ผู้ประเมิณ </th>
                        <th>เวลาประเมิณ</th>
                        <th>แบบประเมิณ</th>
                        <th></th>
                    </tr>
                    @for($i=0;$i<=10;$i++)
                    <tr>
                        <td>น.ส.สุดสวย ใจสบาย</td> 
                        <td>2021-08-09:15:00</td>
                        <td><a href="{{url('evaluation')}}" target="_blank" class="btn" style="background-color:#52E973;">ประเมิณแล้ว</a></td> 
                        <td><a class="btn btn-default" style="background-color:#ddd;"><li class="fa fa-trash"></li></a></td>
                    </tr>
                    @endfor
                </table>
            </div>
             
        </div>




    </div>




<!--    <center>
        <a class="btn_green"><li style="margin-right:10px;font-size: 18pt;" class="fa fa-arrow-circle-right "></li> บันทึกและดำเนินการต่อ</a> 
    </center>-->

</div>

@endsection