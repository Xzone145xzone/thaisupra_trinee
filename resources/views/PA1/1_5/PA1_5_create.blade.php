@extends('layouts.app')    
@section('content')


<div class="container-fluid">
    <form method="post" action="/PA1_5_insert">
         @csrf
    <div class="child">
        <div class="page_header">
            <table class="tb_header">
                <tr class="border_bottom">
                    <td colspan="2">
                        <span class="text_blue"><b><u>ส่วนที่ 1</u> ข้อมูลผู้จัดทำแผนพัฒนาตน</b></span>
                    </td>
                    <td colspan="3" style="text-align:right;">
                        <span class="text_blue"><b>สื่อการเรียนรู้และนวัตกรรม</b></span>
                    </td>
                </tr>
              
            </table>
            @include('layouts.main1')
        </div>


        <table style="width: 100%;" border="0">
            <tr style="height: 70px;">
                <td style="width: 50%;">
                </td>
                <td style="text-align:right;width: 50%;">
                    <a class="btn_page" onclick="add_innovation();" ><span class="fa fa-plus"></span> เพิ่มสื่อการเรียนรู้ / นวัตกรรม</a>
                </td>
            </tr>
        </table>

        <div id="div_innovation" style="margin:1em;padding: 2em;border: 1px solid gainsboro;">

        </div>
    </div>
    <center>
        <button type="submit" class="btn_green"><li style="margin-right:10px;font-size: 18pt;" class="fa fa-arrow-circle-right "></li> บันทึกและดำเนินการต่อ</button> 
    </center>
    </form>
</div>

@endsection