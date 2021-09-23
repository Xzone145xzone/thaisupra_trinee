@extends('layouts.app')    
@section('content')
<div class="container">

    <div class="row" style="border: 1px solid #5EB11A;margin-top: 20px;margin-bottom:50px;border-radius: 10px;padding-bottom: 100px;">

        <div style="margin-top:60px;text-align: center;margin-bottom: 70px;">
            <span class="text_blue" style="font-size: 28pt;"> ข้อตกลงในการพัฒนางานสำหรับครู </span>
            <br><span class="text_blue" style="font-size: 18pt;">Performance Agreement</span>
        </div>

        <div class="child">
            <div class="page_header">
                <table class="table" border="0">
                    <tr>
                        <td>
                            <span class="text_blue"><b>ส่วนที่ 4 แนวทางการพัฒนาและผลการพัฒนาผลลัพธ์การเรียนรู้ของผู้เรียนตามประเด็นท้าทาย</b></span>
                        </td>
                    </tr>
                </table>
            </div>
            <div class="row" id="block">
          
                <div class="col col-lg-12 col-md-12 col-sm-12">
                    <label>ประเด็นท้าทาย</label>
                    <input type="text" id="txtissue" name="txtissue">
                </div>
                <div class="col col-lg-12 col-md-12 col-sm-12">
                    <label>ความเป็นมาและความสำคัญของประเด็นท้าทาย</label>
                    <textarea id="txt_issue_happen" name="txt_issue_happen"></textarea>
                </div>
                <div class="col col-lg-12 col-md-12 col-sm-12">
                    <label>วัตถุประสงค์ของการดำเนินแก้ไข</label>
                    <textarea id="txt_issue_purpose" name="txt_issue_purpose"></textarea>
                </div>
            </div>
        </div>
        <div class="child">
            <div class="page_header">
               <span class="text_blue"><b>วิธีการดำเนินการแก้ไข</b></span>
            </div>
            
             <div class="row" id="block">
          
                <div class="col col-lg-12 col-md-12 col-sm-12">
                    <label>ประชากร / กลุ่มตัวอย่าง</label><br>
                    <input type="text" id="txtissue" name="txtissue">
                </div>
                <div class="col col-lg-12 col-md-12 col-sm-12">
                    <label>เครื่องมือที่ใช้ในการดำเนินการแก้ไข / นวัตกรรม</label>
                    <input type="text" id="txtissue" name="txtissue">
                </div>
                <div class="col col-lg-12 col-md-12 col-sm-12">
                    <label>การเก็บรวบรวมข้อมูล</label>
                     <input type="text" id="txtissue" name="txtissue">
                </div>
                <div class="col col-lg-12 col-md-12 col-sm-12">
                    <label>การวิเคราะห์ข้อมูล / สถิติที่ใช้ในการดำเนินการแก้ไข</label>
                     <input type="text" id="txtissue" name="txtissue">
                </div>
                <div class="col col-lg-12 col-md-12 col-sm-12">
                    <label>ผลการดำเนินการแก้ไข</label>
                    <textarea id="txt_issue_happen" name="txt_issue_happen"></textarea>
                </div>
                <div class="col col-lg-12 col-md-12 col-sm-12">
                    <label>อภิปราย / ผลการดำเนินการแก้ไข</label>
                    <textarea id="txt_issue_happen" name="txt_issue_happen"></textarea>
                </div> 
                <div class="col col-lg-12 col-md-12 col-sm-12">
                    <label>ข้อเสนอแนะ</label>
                    <textarea id="txt_issue_happen" name="txt_issue_happen"></textarea>
                </div>  
            </div>
            
        </div>
        <center>
            <a class="btn_page">ไปยังขั้นตอนต่อไป</a>
        </center>

    </div>

</div>
@endsection