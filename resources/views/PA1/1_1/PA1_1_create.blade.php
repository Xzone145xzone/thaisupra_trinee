@extends('layouts.app')    
@section('content')
<!-- Page content-->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.8/css/select2.min.css" rel="stylesheet" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.8/js/select2.min.js"></script>


<div class="container-fluid">
      <form action="/PA_1_insert" method="post" id="frm_pa_1_1" > 
        @csrf 

        <div class="child">
            <div class="page_header">
                <table class="tb_header">
                    <tr class="border_bottom">
                        <td colspan="2">
                            <span class="blue_big"><b><u>ส่วนที่ 1</u> ข้อมูลผู้จัดทำแผนพัฒนาตน</b></span>
                        </td>
                        <td colspan="3" style="text-align:right;">
                            <span class="blue_big"><b>ข้อมูลทั่วไป</b></span>
                        </td>
                    </tr>
                </table>        
		@include('layouts.main1')
            </div>

            <div class="row" id="block">
                <div class="col-12 col-lg-6 col-md-6 col-sm-12 " >
                    <table class="tbl_data" border="0">
                        <tr>
                            <th>ชื่อ</th>
                            <td>
                                
                                <input type="text" value="{{uFname()}}" id="txtfirstnames" name="txtfirstnames">
                            </td>
                        </tr>
                    </table>
                </div>

                <div class="col-12 col-lg-6 col-md-6 col-sm-12">
                    <table class="tbl_data" border="0">
                        <tr>
                            <th>นามสกุล</th>
                            <td>
                                <input type="text" value="{{uLname()}}" id="txtlastnames" name="txtlastnames" required>

                            </td>
                        </tr>
                    </table>
                </div>

                <div class="col-12 col-lg-6 col-md-6 col-sm-12" >
                    <table class="tbl_data" border="0">
                        <tr>
                            <th>ตำแหน่ง</th>
                            <td>
                                <select  class="form-control" id="txtpositions" name="txtpositions" required>
                                 <option value="">-ตำแหน่ง-</option>
                                    @foreach(group_member('all') as $member)
                                    <option value="{{$member->group}}">{{$member->group}}</option>
                                     @endforeach
                                </select>
                            </td>
                        </tr>
                    </table>
                </div>

                <div class="col-12 col-lg-6 col-md-6 col-sm-12" >
                    <table class="tbl_data" border="0">
                        <tr>
                            <th>กลุ่มสาระการเรียนรู้</th>
                            <td>
                                <select  class="form-control" id="txtmajor_nm" name="txtmajor_nm" required>
                                    <option value="">-กลุ่มสาระการเรียนรู้-</option>
                                    @foreach(group_learn('all') as $learn)
                                    <option value="{{$learn->group}}">{{$learn->group}}</option>
                                    @endforeach
                                </select>
                            </td>
                        </tr>
                    </table>
                </div>

                <div class="col-12 col-lg-6 col-md-6 col-sm-12" >
                    <table class="tbl_data" border="0">
                        <tr>
                            <th>สัญชาติ</th>
                            <td>
                                <input type="text" id="txtnationals" value="ไทย" name="txtnationals" required>
                            </td>
                        </tr>
                    </table>
                </div>

                <div class="col-12 col-lg-6 col-md-6 col-sm-12" >
                    <table class="tbl_data" border="0">
                        <tr>
                            <th>เชื้อชาติ</th>
                            <td>
                                <input type="text" id="txtraces" name="txtraces" value="ไทย" required>
                            </td>
                        </tr>
                    </table>
                </div> 

                <div class="col-12 col-lg-6 col-md-6 col-sm-12" >
                    <table class="tbl_data" border="0">
                        <tr>
                            <th>ศาสนา</th>
                            <td>
                                <input type="text" id="txtreligions" name="txtreligions" required>
                            </td>
                        </tr>
                    </table>
                </div>

                <div class="col-12 col-lg-12 col-md-12 col-sm-12" >
                    <div class="col-12 col-lg-6 col-md-6 col-sm-12" >
                        <table class="tbl_data" border="0">
                            <tr>
                                <th>ที่อยู่</th>
                                <td>
                                    <textarea id="txtaddress" name="txtaddress" style="height: 120px;">{{uAddress()}}</textarea>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>   
            </div>
        </div>

        <div class="child">
            <div class="page_header">
                <table class="tb_header">
                    <tr class="border_bottom">
                        <td colspan="2">
                            <span class="blue_big"><b><u>ส่วนที่ 1</u> ข้อมูลผู้จัดทำแผนพัฒนาตน</b></span>
                        </td>
                        <td colspan="3" style="text-align:right;">
                            <span class="blue_big"><b>ประวัติการทำงาน</b></span>
                        </td>
                    </tr>
                </table>
            </div>

            <div class="row" id="block">

                <p><b><u> <span class="blue_small">การรับราชการ</span></u></b></p>
                <br>
                <div class="col-lg-6 col-md-6 col-sm-12" >
                    <table class="tbl_data" border="0">
                        <tr>
                            <th>วันที่บรรจุ</th>
                            <td>
                                <input type="date" value="" id="txtdatestarts" name="txtdatestarts" required>
                            </td>
                        </tr>
                    </table>
                </div>

                <div class="col-lg-6 col-md-6 col-sm-12">
                    <table class="tbl_data" border="0">
                        <tr>
                            <th>วันที่เริ่มรับราชการ</th>
                            <td>
                                <input type="date" value="" id="txtdatebegins" name="txtdatebegins" required>

                            </td>
                        </tr>
                    </table>
                </div>

                <div class="col-lg-12 col-md-12 col-sm-12" style="margin-top: 20px;margin-bottom:30px;">
                    <div class="col-lg-7 col-md-7 col-sm-12">
                        <table class="tbl_data" border="0">
                            <tr>
                                <th><b><span class="blue_small">อายุราชการรวม</span></b></th>
                                <td>
                                    - 
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>

            </div>


            <div class="row" id="block">

                <p><b><u> <span style="color:#1050A2;">วิทยฐานะ</span></u></b></p>
                <br>


                 <div class="col-12 col-lg-6 col-md-6 col-sm-12 " >
                    <table class="tbl_data" border="0">
                        <tr>
                            <th>วิทยฐานะ</th>
                            <td>
                                  <select  class="form-control" id="txtacademics" name="txtacademics" required>
                                    <option value="">-วิทยฐานะ-</option>
                                    @foreach(teacher_academic('all') as $academic)
                                    <option value="{{$academic->academic}}">{{$academic->academic}}</option>
                                    @endforeach
                                </select>

                            </td>
                        </tr>
                    </table>
                </div> 

                 <div class="col-12 col-lg-6 col-md-6 col-sm-12 " >
                    <table class="tbl_data" border="0">
                        <tr>
                            <th>วันที่ดำรงตำแหน่ง</th>
                            <td>
                                <input type="date" id="txtdateacademics" name="txtdateacademics">
                            </td>
                        </tr>
                    </table>
                </div> 
                 <div class="col-12 col-lg-6 col-md-6 col-sm-12 " >
                    <table class="tbl_data" border="0">
                        <tr>
                            <th>สังกัด</th>
                            <td>
                            <select  class="form-control" id="txtschool_departments" name="txtschool_departments" required>    
                            <option value="">-สังกัด-</option>
                            @foreach(group_department('all') as $department)
                            <option value="{{$department->department_nm}}">{{$department->department_nm}} ({{$department->department_bref}})</option>
                            @endforeach
                            </select>
                            </td>
                        </tr>
                    </table>
                </div> 
                 <div class="col-12 col-lg-6 col-md-6 col-sm-12 " >
                    <table class="tbl_data" border="0">
                        <tr>
                            <th>โรงเรียน</th>
                            <td>
                                <input type="text" value="" id="txtschools_st" name="txtschools_st" required>
                            </td>
                        </tr>
                    </table>
                </div> 
                 <div class="col-12 col-lg-6 col-md-6 col-sm-12 " >
                    <table class="tbl_data" border="0">
                        <tr>
                            <th>เงินเดือนปัจจุบัน</th>
                            <td>
                                <input type="number" id="txtsalarys" name="txtsalarys" required>
                            </td>
                        </tr>
                    </table>
                </div>
                <div class="col-12 col-lg-12 col-md-12 col-sm-12" style="margin-top: 20px;margin-bottom:30px;">
                    <div class="col-lg-7 col-md-7 col-sm-12">
                        <table class="tbl_data" border="0">
                            <tr>
                                <th><b><span style="color:#1050A2;">อายุราชการตั้งแต่ดำรงค์ตำแหน่ง</span></b></th>
                                <td>
                                    - 
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="child">
            <div class="page_header">
                <table class="tb_header">
                    <tr class="border_bottom">
                        <td colspan="2">
                            <span class="blue_big"><b>ส่วนที่ 1 ข้อมูลผู้จัดทำแผนพัฒนาตน</b></span>
                        </td>
                        <td colspan="3" style="text-align:right;">
                            <span class="blue_big"><b>ประวัติการศึกษา</b></span>
                        </td>
                    </tr>
                </table>
                <table style="width: 100%;" border="0">
                    <tr style="height: 70px;">
                        <td style="width: 50%;">
                        </td>
                        <td style="text-align:right;width: 50%;">
                            <a class="btn_page" onclick="add_edu();" ><li class="fa fa-plus"></li> เพิ่มวุฒิการศึกษา</a>
                        </td>
                    </tr>
                </table>
            </div>
            <div class="row" id="block" style="padding-bottom:100px;">
            <table id="tbl_edu" class="table table-striped">
                <tr>
                    <th style="width:20%;text-align: center;">วุฒิ</th>
                    <th style="width:20%;text-align: center;">คณะ</th>
                    <th style="width:20%;text-align: center;">สาขา</th>
                    <th style="width:30%;text-align: center;">สถานศึกษา</th>
                    <td style="width:10%;"></td>
                </tr>         
                <tr style="height:40px;">
                    <td colspan="5" style="text-align: center;"><b>เพิ่มวุฒิการศึกษา</b></td>
                </tr>
            </table>
                
     
             </div>     
        </div>
        

   
        <center>
            <button type="submit" class="btn_green">
                <li style="margin-right:10px;font-size: 18pt;" class="fa fa-arrow-circle-right "></li> 
                บันทึกและดำเนินการต่อ
            </button>
        </center>   
    </form>
    


    
</div>
@endsection