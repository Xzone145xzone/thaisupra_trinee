@extends('layouts.app')    
@section('content')
<!-- Page content-->



<script>

    $(document).ready(function () {
        $("#frm_pa_1_1").validate();
    });

    var edu = 1;
    var edu_string = 'tr_edu_';
    function add_edu() {

        $("#tbl_edu").append('<tr id="tr_edu_' + edu + '">\n\
    <td>\n\
    <select class="form-control" id="txtedu_types[]" name="txtedu_types[]" required>\n\
    <option value="">----</option>\n\
    <option value="1">ป.6</option>\n\
    <option value="2">ม.6</option>\n\
    <option value="3">ปวช</option>\n\
    <option value="4">ปวส</option>\n\
    <option value="5">ปวn</option>\n\
    <option value="6">ป.ตรี</option>\n\
    <option value="8">ป.โท</option>\n\
    <option value="8">ป.เอก</option>\n\
    </select>\n\
    </td>\n\
     <td><input type="text" class="form-control" id="txtfaculty[]" name="txtfaculty[]" required></td>\n\
    <td><input type="text" class="form-control" id="txtmajors[]" name="txtmajors[]" required></td>\n\
    <td><input type="text" class="form-control" id="txtschools[]" name="txtschools[]" required></td>\n\
    <td><a class="btn btn-default" onclick="cancel_row(\''+edu_string+'\','+edu+');"><li class="fa fa-trash"></li></a></td>\n\
    </tr>');
        edu++;
    }

    var sche = 1;
    var supp = 1;
    var train = 1;
    var inno = 1;

    var sche_string = 'tr_sche_';
    var supp_string = 'tr_supp_';
    var train_string = 'tr_train_';
    var innov_string = 'tr_innov_';

    function add_schedule() {

        $("#tbl_schedule").before('<tr id="tr_sche_' + sche + '">\n\
        <td><input type="text" class="form-control" id="txtsubject" name="txtsubject[]" required style="text-align:center;"></td>\n\
        <td><input type="text" class="form-control" id="txtgrade" name="txtgrade[]" required style="text-align:center;"></td>\n\
        <td><input type="number" class="form-control" id="txthour_sch" name="txthour_sch[]" required style="text-align:center;"></td>\n\
        <td style="text-align:center;">\n\
        <a class="btn btn-default" onclick="cancel_row(\'' + sche_string + '\',' + sche + ');"><li class="fa fa-trash"></li></a>\n\
        </td>\n\
        </tr>');

        sche++;
    }


    function add_support() {

        $("#tbl_support").before('<tr id="tr_supp_' + supp + '">\n\
        <td><input type="text" class="form-control" id="txtsupport" name="txtsupport[]" required style="text-align:center;"></td>\n\
        <td><input type="number" class="form-control" id="txthour_sp" name="txthour_sp[]" required style="text-align:center;"></td>\n\
        <td style="text-align:center;">\n\
        <a class="btn btn-default" onclick="cancel_row(\'' + supp_string + '\',' + supp + ');"><li class="fa fa-trash"></li></a>\n\
        </td>\n\
        </tr>');

        supp++;
    }

    function add_train() { 
        $("#tbl_train").append('<tr id="tr_train_' + train + '">\n\
        <td><input type="date" class="form-control" id="txtdate_train" name="txtdate_train[]"></td>\n\
        <td><input type="text" class="form-control" id="txt_train" name="txt_train[]" required></td>\n\
        <td><input type="text" class="form-control" id="txthour" name="txthour[]" required></td>\n\
        <td><input type="text" class="form-control" id="txtagency" name="txtagency[]" required></td>\n\
        <td><a class="btn btn-default" onclick="cancel_row(\'' + train_string + '\',' + train + ');"><li class="fa fa-trash"></li></a></td>\n\
        </tr>');
    }


function add_innovation(){
    
    $("#div_innovation").append("<div id='tr_innov_"+inno+"[]' class='ino_item'>\n\
        <table style='width:100%;'>\n\
        <tr><td style='width:10%;text-align:center;'>\n\
             <input type='text' class='form-control' style='width:50%;'>\n\
            </td>\n\
            <td style='width:80%;'>\n\
            <textarea class='form-control' id='txt_inno' name='txt_inno[]'></textarea>\n\
            </td>\n\
            <td style='width:10%;text-align:center;'>\n\
            <a class='btn btn-default' onclick='cancel_row(\'"+innov_string+"\','"+inno+"');'><li class='fa fa-trash'></li></a>\n\
             </td>\n\
         </tr>\n\
        </table>\n\
    </div>");
                inno++;
    
}

</script>

<div class="container-fluid" style="padding-bottom:100px;">
    <form action="/PA1_insert" method="post" id="frm_pa_1_1" > 
        @csrf  
        <input type = "hidden" name = "_token" value = "<?php echo csrf_token() ?>">
        <div class="child">
            <div class="page_header">
                <table class="tb_header">
                    <tr class="border_bottom">
                        <td colspan="2">
                            <span class="text_blue"><b><u>ส่วนที่ 1</u> ข้อมูลผู้จัดทำแผนพัฒนาตน</b></span>
                        </td>
                        <td colspan="3" style="text-align:right;">
                            <span class="text_blue"><b>ข้อมูลทั่วไป</b></span>
                        </td>
                    </tr>
                </table>
            </div>

            <div class="row" id="block">
                <div class="col col-lg-6 col-md-6 col-sm-12" >
                    <table class="tbl_data" border="0">
                        <tr>
                            <th>ชื่อ</th>
                            <td>
                                <input type="text" value="{{uFname()}}" id="txtfirstnames" name="txtfirstnames">
                            </td>
                        </tr>
                    </table>
                </div>

                <div class="col col-lg-6 col-md-6 col-sm-12">
                    <table class="tbl_data" border="0">
                        <tr>
                            <th>นามสกุล</th>
                            <td>
                                <input type="text" value="{{uLname()}}" id="txtlastnames" name="txtlastnames" required>

                            </td>
                        </tr>
                    </table>
                </div>

                <div class="col col-lg-6 col-md-6 col-sm-12" >
                    <table class="tbl_data" border="0">
                        <tr>
                            <th>ตำแหน่ง</th>
                            <td>
                                <input type="text" id="txtpositions" name="txtpositions" required>

                            </td>
                        </tr>
                    </table>
                </div>

                <div class="col col-lg-6 col-md-6 col-sm-12" >
                    <table class="tbl_data" border="0">
                        <tr>
                            <th>กลุ่มสาระการเรียนรู้</th>
                            <td>
                                <input type="text" id="txtmajor_nm" name="txtmajor_nm" required>
                            </td>
                        </tr>
                    </table>
                </div>

                <div class="col col-lg-6 col-md-6 col-sm-12" >
                    <table class="tbl_data" border="0">
                        <tr>
                            <th>สัญชาติ</th>
                            <td>
                                <input type="text" id="txtnationals" name="txtnationals" required>
                            </td>
                        </tr>
                    </table>
                </div>

                <div class="col col-lg-6 col-md-6 col-sm-12" >
                    <table class="tbl_data" border="0">
                        <tr>
                            <th>เชื้อชาติ</th>
                            <td>
                                <input type="text" id="txtraces" name="txtraces" required>
                            </td>
                        </tr>
                    </table>
                </div> 

                <div class="col col-lg-6 col-md-6 col-sm-12" >
                    <table class="tbl_data" border="0">
                        <tr>
                            <th>ศาสนา</th>
                            <td>
                                <input type="text" id="txtreligions" name="txtreligions" required>
                            </td>
                        </tr>
                    </table>
                </div>

                <div class="col col-lg-12 col-md-12 col-sm-12" >
                    <div class="col col-lg-6 col-md-6 col-sm-12" >
                        <table class="tbl_data" border="0">
                            <tr>
                                <th>ที่อยู่</th>
                                <td>
                                    <textarea id="txtaddress" name="txtaddress">{{uAddress()}}</textarea>
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
                            <span class="text_blue"><b><u>ส่วนที่ 1</u> ข้อมูลผู้จัดทำแผนพัฒนาตน</b></span>
                        </td>
                        <td colspan="3" style="text-align:right;">
                            <span class="text_blue"><b>ประวัติการทำงาน</b></span>
                        </td>
                    </tr>
                </table>
            </div>

            <div class="row" id="block">

                <p><b><u> <span style="color:#1050A2;">การรับราชการ</span></u></b></p>
                <br>
                <div class="col col-lg-6 col-md-6 col-sm-12" >
                    <table class="tbl_data" border="0">
                        <tr>
                            <th>วันที่บรรจุ</th>
                            <td>
                                <input type="date" value="" id="txtdatestarts" name="txtdatestarts" required>
                            </td>
                        </tr>
                    </table>
                </div>

                <div class="col col-lg-6 col-md-6 col-sm-12">
                    <table class="tbl_data" border="0">
                        <tr>
                            <th>วันที่เริ่มรับราชการ</th>
                            <td>
                                <input type="date" value="" id="txtdatebegins" name="txtdatebegins" required>

                            </td>
                        </tr>
                    </table>
                </div>

                <div class="col col-lg-12 col-md-12 col-sm-12" style="margin-top: 20px;margin-bottom:30px;">
                    <div class="col col-lg-7 col-md-7 col-sm-12">
                        <table class="tbl_data" border="0">
                            <tr>
                                <th><b><span style="color:#1050A2;">อายุราชการรวม</span></b></th>
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


                <div class="col col-lg-6 col-md-6 col-sm-12">
                    <table class="tbl_data" border="0">
                        <tr>
                            <th>วิทยฐานะ</th>
                            <td>
                                <input type="text" id="txtacademics" name="txtacademics" required>
    <!--                            <select id="sleacademic" name="sleacademic" required>
                                    <option value="">--</option>
                                </select>-->
                            </td>
                        </tr>
                    </table>
                </div> 

                <div class="col col-lg-6 col-md-6 col-sm-12">
                    <table class="tbl_data" border="0">
                        <tr>
                            <th>วันที่ดำรงตำแหน่ง</th>
                            <td>
                                <input type="date" id="txtdateacademics" name="txtdateacademics">
                            </td>
                        </tr>
                    </table>
                </div> 

                <div class="col col-lg-6 col-md-6 col-sm-12">
                    <table class="tbl_data" border="0">
                        <tr>
                            <th>โรงเรียน</th>
                            <td>
                                <input type="text" value="" id="txtschools_st" name="txtschools_st" required>
   <!--                            <select id="sleschool" name="sleschool">
                                   <option value="">--</option>
                               </select>-->
                            </td>
                        </tr>
                    </table>
                </div> 
                <div class="col col-lg-6 col-md-6 col-sm-12">
                    <table class="tbl_data" border="0">
                        <tr>
                            <th>สังกัด</th>
                            <td>
                                <input type="text" value="" id="txtschool_affs" name="txtschool_affs" required>
   <!--                            <select id="sleschool_aff" name="sleschool_aff">
                                   <option value="">--</option>
                               </select>-->
                            </td>
                        </tr>
                    </table>
                </div> 
                <div class="col col-lg-6 col-md-6 col-sm-12">
                    <table class="tbl_data" border="0">
                        <tr>
                            <th>เงินเดือนปัจจุบัน</th>
                            <td>
                                <input type="number" id="txtsalarys" name="txtsalarys" required>
                            </td>
                        </tr>
                    </table>
                </div>
                <div class="col col-lg-12 col-md-12 col-sm-12" style="margin-top: 20px;margin-bottom:30px;">
                    <div class="col col-lg-7 col-md-7 col-sm-12">
                        <table class="tbl_data" border="0">
                            <tr>
                                <th><b><span style="color:#1050A2;">อายุราชตั้งแต่ดำรงค์ตำแหน่ง</span></b></th>
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
                            <span class="text_blue"><b><u>ส่วนที่ 1</u> ข้อมูลผู้จัดทำแผนพัฒนาตน</b></span>
                        </td>
                        <td colspan="3" style="text-align:right;">
                            <span class="text_blue"><b>ประวัติการศึกษา</b></span>
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
            <div class="row" id="block">
            <table id="tbl_edu" class="table table-striped">
                <tr>
                    <th style="width:20%;text-align: center;">วุฒิ</th>
                    <th style="width:25%;text-align: center;">คณะ</th>
                    <th style="width:25%;text-align: center;">สาขา</th>
                    <th style="width:25%;text-align: center;">สถานศึกษา</th>
                    <td style="width:10%;text-align: center;"></td>
                </tr>         
                <tr style="height:40px;">
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
            </table>
        </div></div>

        <div class="child" style="padding-bottom: 50px;">
            <div class="page_header">
                <table class="tb_header">
                    <tr class="border_bottom">
                        <td colspan="2">
                            <span class="text_blue"><b><u>ส่วนที่ 1</u> ข้อมูลผู้จัดทำแผนพัฒนาตน</b></span>
                        </td>
                        <td colspan="3" style="text-align:right;">
                            <span class="text_blue"><b>ชั่วโมงในการปฏิบัติหน้าที่</b></span>
                        </td>
                    </tr>

                </table>
            </div>
            <div class="row" id="block">
                <table style="width: 100%;" border="0" >
                    <tr>
                        <td style="width: 50%;">
                            <p><b><u><span style="color:#1050A2;">วิชาที่ทำการสอน</span></u></b></p>
                        </td>
                        <td style="text-align:right;width: 50%;">
                            <a class="btn_page" onclick="add_schedule();"><span class="fa fa-plus" ></span> เพิ่ม</a>
                        </td>
                    </tr>
                </table> 

                <table class="table_green" >
                    <tr class="tr_header">
                        <th style="width:50%;">วิชาที่ทำการสอน</th>
                        <th style="width:20%;">ระดับชั้น</th>
                        <th style="width:20%;">ชั่วโมง</th>
                        <th style="width:10%;"></th>
                    </tr>
                    <tr style="height:40px;">
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr class="tr_footer" id="tbl_schedule">
                        <th colspan="2">สรุปชั่วโมงการปฏิบัติหน้าที่</th>
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
                            <p><b><u> <span style="color:#1050A2;">การกำหนดนโยบาย/สนับสนุนการสอน</span></u></b></p>
                        </td>
                        <td style="text-align:right;width: 50%;">
                            <a class="btn_page" onclick="add_support();" ><span class="fa fa-plus"></span> เพิ่ม</a>
                        </td>
                    </tr>
                </table>  
                <table class="table_green" >
                    <tr class="tr_header">
                        <th style="width: 70%;">การกำหนดนโยบาย/สนับสนุนการสอน</th>
                        <th style="width: 20%;">ชั่วโมง/สับดาห์</th>
                        <th style="width: 10%;"></th>
                    </tr>
                    <tr style="height:40px;">
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr class="tr_footer" id="tbl_support">
                        <th>สรุปชั่วโมงการปฏิบัติหน้าที่</th>
                        <th></th>
                        <th></th>
                    </tr>
                </table>
            </div>
        </div>


        <div class="child">
            <div class="page_header">
                <table class="tb_header">
                    <tr class="border_bottom">
                        <td colspan="2">
                            <span class="text_blue"><b><u>ส่วนที่ 1</u> ข้อมูลผู้จัดทำแผนพัฒนาตน</b></span>
                        </td>
                        <td colspan="3" style="text-align:right;">
                            <span class="text_blue"><b>การอบรม</b></span>
                        </td>
                    </tr>

                </table>
            </div>

            <div class="row" id="block">

                <table style="width: 100%;" border="0">
                    <tr style="height: 70px;">
                        <td style="width: 50%;">
                        </td>
                        <td style="text-align:right;width: 50%;">
                            <a class="btn_page" onclick="add_train();" ><span class="fa fa-plus"></span> เพิ่มประวัติการอบรม</a>
                        </td>
                    </tr>
                </table>  
                <table class="table_green" id='tbl_train'>
                    <tr class="tr_header">
                        <th>วันที่</th>
                        <th>หัวข้อในการอบรม</th>
                        <th>จำนวนชั่วโมง</th>
                        <th>หน่วยงานที่จัด</th> 
                        <th></th> 
                    </tr>
                    <tr style="height:40px;">
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>             
                </table>

            </div>
        </div>
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