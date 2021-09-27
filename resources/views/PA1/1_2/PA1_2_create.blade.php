@extends('layouts.app')    
@section('content')
<!-- Page content-->


<div class="container-fluid" style="padding-bottom:100px;">
    <form action="/PA1_2_insert" method="post">
        @csrf
    <div class="child" style="padding-bottom: 50px;">
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
                        <p><b><u><span style="color:#1050A2;">1.1 วิชาที่ทำการสอน</span></u></b></p>
                    </td>
                    <td style="text-align:right;width: 50%;">
                        <a class="btn_page" onclick="add_schedule();"><span class="fa fa-plus" ></span> เพิ่ม</a>
                    </td>
                </tr>
            </table> 
<div class="table-responsive">
            <table class="table_green" >
                <tr class="tr_header">
                    <th style="width:30%;">กลุ่มสาระ</th>
                    <th style="width:25%;">วิชาที่ทำการสอน</th>
                    <th style="width:10%;">ระดับชั้น</th>
                    <th style="width:20%;">ชั่วโมง</th>
                    <th style="width:15%;"></th>
                </tr>
                <tr style="height:40px;">
                    <td colspan="5" style="text-align:center;"> ไม่มีข้อมูล </td>
                </tr>
                <tr class="tr_footer" id="tbl_schedule">
                    <th colspan="3">สรุปชั่วโมงการปฏิบัติหน้าที่</th>
                    <th></th>
                    <th></th>
                </tr>
            </table>
</div>
        </div>
    </div>



    <div class="child" style="padding-bottom: 50px;">

        <div class="row" id="block">   
            <table style="width: 100%;" border="0" >
                <tr style="height: 70px;">
                    <td style="width: 50%;">
                        <p><b><u> <span style="color:#1050A2;">1.2 งานส่งเสริมและสนับสนุนการจัดการเรียนรู้ </span></u></b></p>
                    </td>
                    <td style="text-align:right;width: 50%;">
                        <a class="btn_page" onclick="add_support();" ><span class="fa fa-plus"></span> เพิ่ม</a>
                    </td>
                </tr>
            </table>  
            <table class="table_green" >
                <tr class="tr_header">
                    <th style="width: 70%;">งานส่งเสริมและสนับสนุนการจัดการเรียนรู้</th>
                    <th style="width: 20%;">ชั่วโมง/สับดาห์</th>
                    <th style="width: 10%;"></th>
                </tr>
                <tr style="height:40px;">
                       <td colspan="3" style="text-align:center;"> ไม่มีข้อมูล </td>
                  
                </tr>
                <tr class="tr_footer" id="tbl_support">
                    <th>สรุปชั่วโมงการปฏิบัติหน้าที่</th>
                    <th></th>
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
                        <p><b><u> <span style="color:#1050A2;">1.3 งานพัฒนาคุณภาพการจัดการศึกษาของสถานศึกษา </span></u></b></p>
                    </td>
                    <td style="text-align:right;width: 50%;">
                        <a class="btn_page" onclick="add_develop();" ><span class="fa fa-plus"></span> เพิ่ม</a>
                    </td>
                </tr>
            </table>  
            <table class="table_green" >
                <tr class="tr_header">
                    <th style="width: 70%;">งานพัฒนาคุณภาพการจัดการศึกษาของสถานศึกษา</th>
                    <th style="width: 20%;">ชั่วโมง/สับดาห์</th>
                    <th style="width: 10%;"></th>
                </tr>
                <tr style="height:40px;">
                       <td colspan="3" style="text-align:center;"> ไม่มีข้อมูล </td>
                </tr>
                <tr class="tr_footer" id="tbl_develop">
                    <th>สรุปชั่วโมงการปฏิบัติหน้าที่</th>
                    <th></th>
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
                        <p><b><u> <span style="color:#1050A2;">1.4 งานตอบสนองนโยบายและจุดเน้น </span></u></b></p>
                    </td>
                    <td style="text-align:right;width: 50%;">
                        <a class="btn_page" onclick="add_response();" ><span class="fa fa-plus"></span> เพิ่ม</a>
                    </td>
                </tr>
            </table>  
            <table class="table_green" >
                <tr class="tr_header">
                    <th style="width: 70%;">งานตอบสนองนโยบายและจุดเน้น</th>
                    <th style="width: 20%;">ชั่วโมง/สับดาห์</th>
                    <th style="width: 10%;"></th>
                </tr>
                <tr style="height:40px;">
                     <td colspan="3" style="text-align:center;"> ไม่มีข้อมูล </td>
                </tr>
                <tr class="tr_footer" id="tbl_response">
                    <th>สรุปชั่วโมงการปฏิบัติหน้าที่</th>
                    <th></th>
                    <th></th>
                </tr>
            </table>
        </div>
    </div> 
        

        <center>
            <button type="submit" class="btn_green"><li style="margin-right:10px;font-size: 18pt;" class="fa fa-arrow-circle-right "></li> บันทึกและดำเนินการต่อ</button>
        </center> 
    </form>
</div>

@endsection