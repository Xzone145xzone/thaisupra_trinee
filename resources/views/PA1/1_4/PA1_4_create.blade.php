@extends('layouts.app')    
@section('content')


<div class="container-fluid" style="padding-bottom:100px;">
     <form method="post" action="PA1_4_insert">
          @csrf 
    <div class="child">
        <div class="page_header">
            <table class="tb_header">
                <tr class="border_bottom">
                    <td colspan="2">
                        <span class="text_blue"><b><u>ส่วนที่ 1</u> ข้อมูลผู้จัดทำแผนพัฒนาตน</b></span>
                    </td>
                    <td colspan="3" style="text-align:right;">
                        <span class="text_blue"><b>การอบรมและพัฒนาตนเอง</b></span>
                    </td>
                </tr>

            </table>
            @include('layouts.main1')
        </div>
       
        <div class="row" id="block">
           <div style="width: 100%;text-align: right;margin:1em;">
                        <a class="btn_page" onclick="add_train();" ><span class="fa fa-plus"></span> เพิ่มประวัติการอบรม</a>
           </div>
                    
            <div class="table-responsive">
            <table class="table_green" id='tbl_train'>
                <tr class="tr_header">                   
                    <th style="width:25%;">หัวข้อในการอบรม</th>
                    <th style="width:15%;">วันเริ่มต้น</th>
                    <th style="width:15%;">วันสิ้นสุด</th> 
                    <th style="width:10%;">จำนวนชั่วโมง</th>
                    <th style="width:20%;">หน่วยงานที่จัด</th> 
                    <th style="width:20%;"></th> 
                </tr>
                <tr style="height:40px;">
                    <td colspan="6" style="text-align: center;">ไม่มีข้อมูล</td>
                </tr>             
            </table>
            </div>
        </div>
       
    </div>

    <center>
        <button type="submit" class="btn_green"><li style="margin-right:10px;font-size: 18pt;" class="fa fa-arrow-circle-right "></li> บันทึกและดำเนินการต่อ</button> 
    </center>
 </form>
</div>

@endsection