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
                <table class="table">
                    <tr>
                        <td style="width: 50%;">
                            <span class="text_blue"><b>ส่วนที่ 1 ข้อมูลผู้จัดทำแผนพัฒนาตน</b></span>
                        </td>
                        <td style="text-align:right;width: 50%;">
                            <span class="text_blue"><b>ข้อมูลทั่วไป</b></span>
                        </td>
                    </tr>
                </table>
            </div>


            <div class="row" style="border: 1px solid gainsboro;padding: 1em;">
                <div class="col col-lg-6 col-md-6 col-sm-12" >
                    <label>ชื่อ</label><br>
                    <input type="text" id="txtFirstNm" name="txtFirstNm">
                </div>
                <div class="col col-lg-6 col-md-6 col-sm-12">
                    <label>นามสกุล</label>
                    <input type="text" id="txtLastNm" name="txtLastNm">
                </div>

                <div class="col col-lg-6 col-md-6 col-sm-12">
                    <label>ตำแหน่ง</label>
                    <select id="sleposition" name="sleposition">
                        <option value="">--</option>
                    </select>
                </div>
                <div class="col col-lg-6 col-md-6 col-sm-12">
                    <label>กลุ่มสาระการเรียนรู้</label>
                    <select id="sletype" name="sletype">
                        <option value="">--</option>
                    </select>
                </div>
                <div class="col col-lg-6 col-md-6 col-sm-12">
                    <label>สัญชาติ</label>
                    <input type="text" id="txtRace" name="txtRace">
                </div>
                <div class="col col-lg-6 col-md-6 col-sm-12">
                    <label>เชื้อชาติ</label>
                    <input type="text" id="txtNation" name="txtNation">
                </div>
                <div class="col col-lg-6 col-md-6 col-sm-12">
                    <label>ศาสนา</label>
                    <select id="sleRegion" name="sleRegion">
                        <option value="">--</option>
                    </select>
                </div>
                <div class="col col-lg-12 col-md-12 col-sm-12">
                    <label>ที่อยู่</label>
                    <textarea id="txtAddress" name="txtAddress"></textarea>
                </div>
            </div>
        </div>

        <div class="child">
            <div class="page_header">
                <table class="table" border="0">
                    <tr>
                        <td style="width: 50%;">
                            <span class="text_blue"><b>ส่วนที่ 1 ข้อมูลผู้จัดทำแผนพัฒนาตน</b></span>
                        </td>
                        <td style="text-align:right;width: 50%;">
                            <span class="text_blue"><b>การศึกษา</b></span>
                        </td>
                    </tr>
                </table>
                <table style="width: 100%;" border="0">
                    <tr style="height: 70px;">
                        <td style="width: 50%;">
                        </td>
                        <td style="text-align:right;width: 50%;">
                            <a class="btn_page" >+ เพิ่มวุฒิการศึกษา</a>
                        </td>
                    </tr>
                </table>
            </div>

            <div style="margin:1em;padding: 2em;height: 200px;border: 1px solid gainsboro;">

            </div>

        </div>

        <div class="child">
            <div class="page_header">
                <table class="table" border="0">
                    <tr>
                        <td style="width: 50%;">
                            <span class="text_blue"><b>ส่วนที่ 1 ข้อมูลผู้จัดทำแผนพัฒนาตน</b></span>
                        </td>
                        <td style="text-align:right;width: 50%;">
                            <span class="text_blue"><b>ประวัติการทำงาน</b></span>
                        </td>
                    </tr>
                </table>
            </div>

            <p>การรับราชการ</p>

            <div class="row" style="border: 1px solid gainsboro;padding: 1em;">
                <div class="col col-lg-6 col-md-6 col-sm-12" >
                    <label>วันที่บรรจุ</label><br>
                    <input type="date" id="txtFirstNm" name="txtFirstNm">
                </div>
                <div class="col col-lg-6 col-md-6 col-sm-12">
                    <label>วันที่เริ่มรับราชการ</label>
                    <input type="date" id="txtLastNm" name="txtLastNm">
                </div>
                <div class="col col-lg-6 col-md-6 col-sm-12" >
                    <label>วิทยฐานะ(วันที่ดำรงตำแหน่ง)</label><br>
                    <select id="sleacademic" name="sleacademic">
                        <option value="">--</option>
                    </select>
                </div>
                <div class="col col-lg-6 col-md-6 col-sm-12" >
                    <label>อายุราชการ</label><br>
                    <input type="text" id="txt_service_life" name="txt_service_life">
                </div>

                <div class="col col-lg-6 col-md-6 col-sm-12" >
                    <label>โรงเรียน</label><br>
                    <select id="sleschool" name="sleschool">
                        <option value="">--</option>
                    </select>
                </div>
                <div class="col col-lg-6 col-md-6 col-sm-12" >
                    <label>สังกัด</label><br>
                    <select id="sleschool_type" name="sleschool_type">
                        <option value="">--</option>
                    </select>
                </div>
                <div class="col col-lg-6 col-md-6 col-sm-12">
                    <label>เงินเดือน</label>
                   <input type="text" id="txt_salary" name="txt_salary">
                </div>
            </div>
        </div>

        <div class="child">
            <div class="page_header">
                <table class="table" border="0">
                    <tr>
                        <td style="width: 50%;">
                            <span class="text_blue"><b>ส่วนที่ 1 ข้อมูลผู้จัดทำแผนพัฒนาตน</b></span>
                        </td>
                        <td style="text-align:right;width: 50%;">
                            <span class="text_blue"><b>ชั่วโมงในการปฏิบัติหน้าที่</b></span>
                        </td>
                    </tr>
                </table>
            </div>
            <table style="width: 100%;" border="0">
                <tr style="height: 70px;">
                    <td style="width: 50%;">
                    </td>
                    <td style="text-align:right;width: 50%;">
                        <a class="btn_page" >+ เพิ่ม</a>
                    </td>
                </tr>
            </table>  
            <table class="table_green">
                <tr class="tr_header">
                    <th>วิชาที่ทำการสอน</th>
                    <th>ระดับชั้น</th>
                    <th>ชั่วโมง</th>
                </tr>
                <tr style="height:40px;">
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr class="tr_footer">
                    <th colspan="2">สรุปชั่วโมงการปฏิบัติหน้าที่</th>
                    <th></th>
                </tr>
            </table>
            <table style="width: 100%;" border="0">
                    <tr style="height: 70px;">
                        <td style="width: 50%;">
                        </td>
                        <td style="text-align:right;width: 50%;">
                            <a class="btn_page" >+ เพิ่ม</a>
                        </td>
                    </tr>
             </table>  
              <table class="table_green">
                  <tr class="tr_header">
                      <th>การกำหนดนโยบาย/สนับสนุนการสอน</th>
                      <th>ชั่วโมง/สับดาห์</th>
                  </tr>
                  <tr style="height:40px;">
                      <td></td>
                      <td></td>
                  </tr>
                  <tr class="tr_footer">
                      <th>สรุปชั่วโมงการปฏิบัติหน้าที่</th>
                      <th></th>
                  </tr>
              </table>
            <table style="width: 100%;" border="0">
                <tr style="height: 70px;">
                    <td style="width: 50%;">
                    </td>
                    <td style="text-align:right;width: 50%;">
                        <a class="btn_page" >+ เพิ่ม</a>
                    </td>
                </tr>
            </table>  
             <table class="table_green">
                  <tr class="tr_header">
                      <th>วันที่</th>
                      <th>หัวข้อในการอบรม</th>
                       <th>จำนวนชั่วโมง</th>
                       <th>หน่วยงานที่จัด</th> 
                  </tr>
                  <tr style="height:40px;">
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                  </tr>             
              </table>
        </div>
        
         <div class="child">
            <div class="page_header">
                <table class="table" border="0">
                    <tr>
                        <td style="width: 50%;">
                            <span class="text_blue"><b>ส่วนที่ 1 ข้อมูลผู้จัดทำแผนพัฒนาตน</b></span>
                        </td>
                        <td style="text-align:right;width: 50%;">
                            <span class="text_blue"><b>สื่อการเรียนรู้ / นวัตกรรม</b></span>
                        </td>
                    </tr>
                </table>
                <table style="width: 100%;" border="0">
                <tr style="height: 70px;">
                    <td style="width: 50%;">
                    </td>
                    <td style="text-align:right;width: 50%;">
                        <a class="btn_page" >+ เพิ่มสื่อการเรียนรู้ / นวัตกรรม</a>
                    </td>
                </tr>
            </table>  
            </div>
               <div style="margin:1em;padding: 2em;height: 200px;border: 1px solid gainsboro;">

            </div>
        </div>
        <center>
            <a class="btn_page">ไปยังขั้นตอนต่อไป</a>
        </center>
        
    </div>
</div>
@endsection