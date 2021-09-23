@extends('layouts.app')    
@section('content')

<!-- <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
 <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
 <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>-->
  
<div class="container-fluid" id="container-fluid">

    <div class="child">
        <div class="page_header">
            <table class="tb_header">
                <tr class="border_bottom">
                    <td colspan="2">
                        <input type="hidden" id="hdnid" name="hdnid" value="{{$uProfile->id}}">
                        <span class="blue_big"><b><u>ส่วนที่ 1</u> ข้อมูลผู้จัดทำแผนพัฒนาตน</b></span>
                    </td>
                    <td colspan="3" style="text-align:right;">
                        <span class="blue_big"><b>ข้อมูลทั่วไป</b></span>
                    </td>
                </tr>
             
            </table>
        </div>
@include('layouts.main1')

        <div class="row" id="block">
          
            
           <div class="col-lg-6 col-md-6 col-sm-12" >
                <table class="tbl_data" border="0">
                    <tr>
                        <th>ชื่อ</th>
                        <td>
                            <div id="ele_fistname" class="display_none">
                                 <input type="text" value="{{$uProfile->firstname}}" id="txtfirstname" name="txtfirstname" onchange="update_field('firstname');">
                            </div>
                            <div id="text_fistname" class="display_text" onclick="show_ele('fistname');">
                                {{$uProfile->firstname}}
                            </div>
                           
                        </td>
                    </tr>
                </table>
            </div>

            <div class="col-lg-6 col-md-6 col-sm-12">
                <table class="tbl_data" border="0">
                    <tr>
                        <th>นามสกุล</th>
                        <td>
                            <div id="ele_lastname" class="display_none">
                                <input type="text" value="{{$uProfile->lastname}}" id="txtlastname" name="txtlastname" onchange="update_field('lastname');">
                            </div>
                            <div id="text_lastname" class="display_text" onclick="show_ele('lastname');">
                                {{$uProfile->lastname}}
                            </div>
                        </td>
                    </tr>
                </table>
            </div>

            <div class="col-lg-6 col-md-6 col-sm-12" >
                <table class="tbl_data" border="0">
                    <tr>
                        <th>ตำแหน่ง</th>
                        <td>
                            <div id="ele_position" class="display_none">
                            
                                <select  class="form-control" id="txtposition" name="txtposition" onchange="update_field('position');" required>
                                 <option value="">-ตำแหน่ง-</option>
                                    @foreach(group_member('all') as $member)
                                     @if($uProfile->position==$member->group)
                                     <option value="{{$member->group}}" selected>{{$member->group}}</option>
                                    @else 
                                     <option value="{{$member->group}}">{{$member->group}}</option>
                                    @endif
                                     @endforeach
                                </select>
                            </div>
                            <div id="text_position" class="display_text" onclick="show_ele('position');">
                                {{$uProfile->position}}
                            </div>
                        </td>
                    </tr>
                </table>
            </div>

            <div class="col-lg-6 col-md-6 col-sm-12" >
                <table class="tbl_data" border="0">
                    <tr>
                        <th>กลุ่มสาระการเรียนรู้</th>
                        <td>
                            <div id="ele_major" class="display_none">
                               
                                
                                <select  class="form-control" id="txtmajor" name="txtmajor" onchange="update_field('major');" required>
                                    <option value="">-กลุ่มสาระการเรียนรู้-</option>
                                    @foreach(group_learn('all') as $learn)
                                    @if($uProfile->major==$learn->group)
                                    <option value="{{$learn->group}}" selected>{{$learn->group}}</option>
                                    @else
                                    <option value="{{$learn->group}}">{{$learn->group}}</option>
                                    @endif
                                    @endforeach
                                </select>
                            </div>
                            <div id="text_major" class="display_text" onclick="show_ele('major');">
                          
                                {{$uProfile->major}}
                            </div>
                        </td>
                    </tr>
                </table>
            </div>

            <div class="col-lg-6 col-md-6 col-sm-12" >
                <table class="tbl_data" border="0">
                    <tr>
                        <th>สัญชาติ</th>
                        <td>
                            <div id="ele_national" class="display_none">
                                <input type="text" value="{{$uProfile->national}}" id="txtnational" name="txtnational" onchange="update_field('national');">

                            </div>
                            <div id="text_national" class="display_text" onclick="show_ele('national');">
                                {{$uProfile->national}}
                            </div>
                        </td>
                    </tr>
                </table>
            </div>

            <div class="col-lg-6 col-md-6 col-sm-12" >
                <table class="tbl_data" border="0">
                    <tr>
                        <th>เชื้อชาติ</th>
                        <td>
                            <div id="ele_race" class="display_none">
                                <input type="text" value="{{$uProfile->race}}" id="txtrace" name="{{$uProfile->race}}" onchange="update_field('race');">
                            </div>
                            <div id="text_race" class="display_text" onclick="show_ele('race');">
                                {{$uProfile->race}}
                            </div>
                        </td>
                    </tr>
                </table>
            </div>

            <div class="col-lg-6 col-md-6 col-sm-12" >
                <table class="tbl_data" border="0">
                    <tr>
                        <th>ศาสนา</th>
                        <td>
                            <div id="ele_religion" class="display_none">
                                <input type="text" value="{{$uProfile->religion}}" id="txtreligion" name="txtreligion" onchange="update_field('religion');">
                            </div>
                            <div id="text_religion" class="display_text" onclick="show_ele('religion');">
                                {{$uProfile->religion}}
                            </div>
                        </td>
                    </tr>
                </table>
            </div>

            <div class="col-lg-12 col-md-12 col-sm-12" >
                <div class="col-lg-6 col-md-6 col-sm-12" >
                    <table class="tbl_data" border="0">
                        <tr>
                            <th>ที่อยู่</th>
                            <td>
                                <div id="ele_address" class="display_none">
                                    <textarea id="txtaddress" name="txtaddress" onchange="update_field('address');">{{$uProfile->address}}</textarea>
                                </div>
                                <div id="text_address" class="display_text" onclick="show_ele('address');">
                                    {{$uProfile->address}}
                                </div>
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

            <p><b><u> <span style="color:#1050A2;">การรับราชการ</span></u></b></p>
            <br>
            <div class="col-lg-6 col-md-6 col-sm-12" >
                <table class="tbl_data" border="0">
                    <tr>
                        <th>วันที่บรรจุ</th>
                        <td>
                            <div id="ele_datestart" class="display_none">
                                <input type="date" value="{{$uProfile->datestart}}" id="txtdatestart" name="txtdatestart" onchange="update_field('datestart');">  
                            </div>
                            <div id="text_datestart" class="display_text" onclick="show_ele('datestart');">
                                {{datethai($uProfile->datestart)}}
                            </div>
                        </td>
                    </tr>
                </table>
            </div>

            <div class="col-lg-6 col-md-6 col-sm-12">
                <table class="tbl_data" border="0">
                    <tr>
                        <th>วันที่เริ่มรับราชการ</th>
                        <td>

                            <div id="ele_datebegin" class="display_none">
                                <input type="date" value="{{$uProfile->datebegin}}" id="txtdatebegin" name="txtdatebegin" onchange="update_field('datebegin');">  
                            </div>
                            <div id="text_datebegin" class="display_text" onclick="show_ele('datebegin');">
                                {{datethai($uProfile->datebegin)}}
                            </div>

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
                                {{calage($uProfile->datestart)}} 
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>

        <div class="row" id="block">

            <p><b><u> <span style="color:#1050A2;">วิทยฐานะ</span></u></b></p>
            <br>


            <div class="col-lg-6 col-md-6 col-sm-12">
                <table class="tbl_data" border="0">
                    <tr>
                        <th>วิทยฐานะ</th>
                        <td>
                            <div id="ele_academic" class="display_none">

                                
                                <select  class="form-control" id="txtacademic" name="txtacademic" onchange="update_field('academic');" required>
                                    <option value="">-วิทยฐานะ-</option>
                                    @foreach(teacher_academic('all') as $academic)
                                    @if($uProfile->academic==$academic->academic)
                                    <option value="{{$academic->academic}}" selected>{{$academic->academic}}</option>
                                    @else
                                    <option value="{{$academic->academic}}">{{$academic->academic}}</option>
                                    @endif
                                    @endforeach
                                </select>
                                
                            </div>
                            <div id="text_academic" class="display_text" onclick="show_ele('academic');">
                              {{$uProfile->academic}}
                            </div>
                        </td>
                    </tr>
                </table>
            </div> 

            <div class="col-lg-6 col-md-6 col-sm-12">
                <table class="tbl_data" border="0">
                    <tr>
                        <th>วันที่ดำรงตำแหน่ง</th>
                        <td>
                            <div id="ele_dateacademic" class="display_none">
                                <input type="date" id="txtdateacademic" name="txtdateacademic" value="{{$uProfile->dateacademic}}" onchange="update_field('dateacademic');">  
                            </div>
                            <div id="text_dateacademic" class="display_text" onclick="show_ele('dateacademic');">
                                {{datethai($uProfile->dateacademic)}}
                            </div>
                        </td>
                    </tr>
                </table>
            </div> 

       

            <div class="col-lg-6 col-md-6 col-sm-12">
                <table class="tbl_data" border="0">
                    <tr>
                        <th>สังกัด</th>
                        <td>
                            <div id="ele_school_department" class="display_none">
                                <select  class="form-control" id="txtschool_department" name="txtschool_department" onchange="update_field('school_department');" required>    
                            <option value="">-สังกัด-</option>
                            @foreach(group_department('all') as $department)
                            @if($uProfile->school_department==$department->department_nm)
                            <option value="{{$department->department_nm}}" selected>{{$department->department_nm}} ({{$department->department_bref}})</option>
                            @else
                            <option value="{{$department->department_nm}}">{{$department->department_nm}} ({{$department->department_bref}})</option> 
                            @endif
                            @endforeach
                            </select>

                            </div>
                            <div id="text_school_department" class="display_text" onclick="show_ele('school_department');">
                                {{$uProfile->school_department}}
                            </div>

                        </td>
                    </tr>
                </table>
            </div> 
                 <div class="col-lg-6 col-md-6 col-sm-12">
                <table class="tbl_data" border="0">
                    <tr>
                        <th>โรงเรียน</th>
                        <td>

                            <div id="ele_school" class="display_none">

                                <input type="text" id="txtschool" name="txtschool" value="{{$uProfile->school}}" onchange="update_field('school');"> 

                            </div>
                            <div id="text_school" class="display_text" onclick="show_ele('school');">
                                {{$uProfile->school}}
                            </div>


                        </td>
                    </tr>
                </table>
            </div> 

            <div class="col-lg-6 col-md-6 col-sm-12">
                <table class="tbl_data" border="0">
                    <tr>
                        <th>เงินเดือนปัจจุบัน</th>
                        <td>
                            <div id="ele_salary" class="display_none">
                                <input type="number" id="txtsalary" name="txtsalary" value="{{$uProfile->salary}}" onchange="update_field('salary');"> 
                            </div>
                            <div id="text_salary" class="display_text" onclick="show_ele('salary');">
                               {{$uProfile->salary}}
                            </div>

                        </td>
                    </tr>
                </table>
            </div>

            <div class="col-lg-12 col-md-12 col-sm-12" style="margin-top: 20px;margin-bottom:30px;">
                <div class="col-lg-7 col-md-7 col-sm-12">
                    <table class="tbl_data" border="0">
                        <tr>
                            <th><b><span class="blue_small">อายุราชการตั้งแต่ดำรงค์ตำแหน่ง</span></b></th>
                            <td>
                                12 ปี 4 เดือน 5 วัน 
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
                        <a class="btn_page" onclick="add_edu_edit();" ><li class="fa fa-plus"></li> เพิ่มวุฒิการศึกษา</a>
                    </td>
                </tr>
            </table>
        </div>

        <table id="tbl_edu" class="table_green" style="width:100%;"> 
            <tr class="tr_header">
                <th style="width:25%;">วุฒิ</th>
                <th style="width:20%;">คณะ</th>
                  <th style="width:20%;">สาขา</th>
                <th style="width:25%;">สถานศึกษา</th>
                <th style="width:10%;"></th>
            </tr>         

            <?php $i=0;?>

            @foreach($uEducation as $edu)
            <tr style="height:40px;">
                <td>
                    <div id="ele_edu_type_{{$i}}" class="display_none">                        
                    <input type="hidden" id="txtid" name="txtid[{{$i}}]" value="{{$edu->id}}">
                    <select class="form-control" id="txtedu_type_{{$i}}" name="txtedu_type[{{$i}}]" style="width:95%;" onchange="update_edu_field({{$edu->id}},{{$i}},'edu_type');">
                        <option value="">----</option>
                        @foreach($edu_type as $edu_types)
                        @if($edu_types->name==$edu->edu_type)
                        <option value="{{$edu_types->name}}" selected>{{$edu_types->name}}</option>
                        @else
                        <option value="{{$edu_types->name}}">{{$edu_types->name}}</option>
                        @endif 
                        @endforeach
                    </select>                        
                    </div>
                    
                    
                    <div id="text_edu_type_{{$i}}" class="text" style="width:100%;" onclick="show_ele_array('edu_type',{{$i}});">
                    {{($edu->edu_type)}}
                    </div>
                </td>
                <td>
                    <div id="text_faculty_{{$i}}" style="width:100%;" onclick="show_ele_array('faculty',{{$i}});">
                    {{$edu->faculty}}
                    </div>
                    <div id="ele_faculty_{{$i}}" class="display_none">      
                        <input type="text" class="form-control" id="txtfaculty_{{$i}}" name="txtfaculty[{{$i}}]" value="{{$edu->faculty}}" onchange="update_edu_field({{$edu->id}},{{$i}},'faculty');" style="width:95%;">
                    </div>
                </td>
                <td>
                    <div id="text_major_{{$i}}" style="width:100%;" onclick="show_ele_array('major',{{$i}});">
                    {{$edu->major}}
                    </div>
                    <div id="ele_major_{{$i}}" class="display_none">      
                        <input type="text" class="form-control" id="txtmajor_{{$i}}" name="txtmajor[{{$i}}]" value="{{$edu->major}}" onchange="update_edu_field({{$edu->id}},{{$i}},'major');" style="width:95%;">
                    </div>
                </td>
                <td>
                    <div id="text_school_{{$i}}" style="width:100%;" onclick="show_ele_array('school',{{$i}});">
                    {{$edu->school}}
                    </div>
                    <div id="ele_school_{{$i}}" class="display_none">      
                    <input type="text" class="form-control" id="txtschool_{{$i}}" name="txtschool[{{$i}}]" value="{{$edu->school}}" onchange="update_edu_field({{$edu->id}},{{$i}},'school');" style="width:95%;">
                    </div>
                    
                
                </td>
                <td style="text-align: center;">
                    <a class="btn btn-default" onclick="delete_edu_row({{$edu->id}});"><li class="fa fa-trash"></li></a>
                </td>
            </tr>            
            <?php $i++; ?>

            @endforeach


        </table>
    </div>

    <center>
        <a style="margin-top: 50px;" class="btn_blue" href="{{url('PA1_2')}}">
            <li style="margin-right:10px;font-size: 18pt;" class="fa fa-arrow-circle-right "></li> ไปยังขั้นตอนถัดไป
        </a>
    </center>   

</div>

@endsection