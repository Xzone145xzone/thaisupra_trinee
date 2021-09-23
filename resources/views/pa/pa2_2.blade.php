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
                            <span class="text_blue"><b>ส่วนที่ 2 ผลการประเมินงานตามมาตรฐานตำแหน่งและภาระงานตามที่ ก.ค.ศ.กำหนด</b></span>
                        </td>
                    </tr>
                </table>
            </div>
            <div class="row" id="block">
                <div class="col col-lg-6 col-md-6 col-sm-12" >
                    <label>อันดับความสำคัญ</label><br>
                    <input type="text" id="txtno" name="txtno">
                </div>
                <div class="col col-lg-6 col-md-6 col-sm-12">
                    <label>มาตรฐานตำแหน่งที่จะพัฒนา</label>
                     <select id="slestandard" name="slestandard">
                        <option value="">--</option>
                    </select>
                </div>
                <div class="col col-lg-6 col-md-6 col-sm-12" >
                    <label>ระยะเวลาเริ่มต้น</label><br>
                    <input type="date" id="txtdate_start" name="txtdate_start">
                </div>
                <div class="col col-lg-6 col-md-6 col-sm-12">
                    <label>ระยะเวลาสิ้นสุด</label>
                    <input type="date" id="txtdate_stop" name="txtdate_stop">
                </div>
                <div class="col col-lg-12 col-md-12 col-sm-12">
                    <label>การขอรับงบประมาณสนับสนุนจากหน่วยงาน</label>
                    <input type="text" id="txtbudget" name="txtbudget">
                </div>
                <div class="col col-lg-12 col-md-12 col-sm-12">
                    <label>ประโยชน์ที่คาดว่าจะได้รับ</label>
                    <textarea id="txtresult" name="txtresult"></textarea>
                </div>
                <div class="col col-lg-12 col-md-12 col-sm-12">
                    <label>ความต้องการและคำรับรองในการพัฒนาตนเองและวิชาชีพของผู้จัดทำแผนพัฒนาตนเองส่วนที่.....</label>
                    <textarea id="txtresult" name="txtresult"></textarea>
                </div>
                <div class="col col-lg-12 col-md-12 col-sm-12">
                    <label>หลักสูตรที่ควรจะได้รับการพัฒนาตนเองและวิชาชีพ</label>
                    <textarea id="txtresult" name="txtresult"></textarea>
                </div>
            </div>
        </div>
        <center>
            <a class="btn_page" href="{{ url('pa_3') }}">ไปยังขั้นตอนต่อไป</a>
        </center>

    </div>

</div>
@endsection