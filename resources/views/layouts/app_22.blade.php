<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="csrf-token" content="{{ csrf_token() }}" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Thaisupra - PA</title>
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <link href="{{ asset('assets/css/styles.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/css/app.css') }}" rel="stylesheet">
         <link href="{{ asset('assets/css/input.css') }}" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Thai&display=swap" rel="stylesheet">

        
                <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Niramit&display=swap" rel="stylesheet">
        
<!--        <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Niramit&display=swap" rel="stylesheet">-->

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"></script>
        <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
        <script src="storage/controller/controller.js"></script>
        <script src="storage/controller/pa_1_2.js"></script>
        <script src="storage/controller/pa_1_1.js"></script>
        <script src="storage/controller/pa_1_4.js"></script>
        <script src="storage/controller/pa_1_3.js"></script>
        <script src="storage/controller/pa_4.js"></script>
        <script src="storage/controller/pa_1_5.js"></script> 
        <script src="storage/controller/pa_2_2.js"></script> 
        <script src="storage/controller/pa_3.js"></script> 
        <script src="storage/controller/templates.js"></script> 
 
        <link href="{{ asset('assets/css/evaluation.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/css/template.css') }}" rel="stylesheet">
        <script src="storage/controller/element.js"></script> 
    </head>
    <body>
        @include('layouts.extend')
        <nav class="navbar navbar-expand-lg fixed-top" id="TopNav" style="background-color: #00061B;">
            <div class="container px-4">
                <div class="navbar-brand">
                    <span  class="btn_nav"><a class="nav-link"  href="{{url('/')}}"><span class="fa fa-plus"></span></a></span>
                    <span  class="btn_nav"><a class="nav-link"  href="{{url('/')}}"><span class="fa fa-globe"></span></a></span>
                </div>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span style="color:white;" class="navbar-toggler-icon"><i class="fa fa-bars" aria-hidden="true"></i></span></button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto">
                        @if(session('uAuth'))                        
                        <li  class="btn_nav"><a class="nav-link">ภาษาไทย</a></li>
                        <li  class="btn_nav"><a class="nav-link">สนับสนุนมูลนิธิ</a></li>
                        <li  class="btn_nav"><a class="nav-link" href="{{url('logout')}}">ออกจากระบบ</a></li>
                        @else
                        <li  class="btn_nav"><a class="nav-link" href="#contact">สมัครสมาชิก</a></li>
                        <li  class="btn_nav"><a class="nav-link" href="{{url('/')}}">เข้าสู่ระบบ</a></li>
                        @endif
                    </ul>
                </div>
            </div>
        </nav>
        <div class="row" id="SecoundNav" style="padding-top:60px;">            
           
            <div class="col-lg-6 col-md-6 col-sm-12">
                <div class="d-sm-none d-md-block" style="float: left;margin-right:50px;margin-left:100px;">
                    <img src="{{ asset('logo/logo.png') }}" style="width:75px;border:0;">
                </div>
                <div style="float:left;color:white;padding-top: 20px;">
                    <b><span style="font-size: 14pt;">มูลนิธิครูดีของแผ่นดิน</span></b>    
                    <br>Foundation of Thai Suprateacher
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12" style="padding-top:20px;">
                <a class="active" href="javascript:void(0)">หน้าแรก</a>
                <a href="javascript:void(0)">เกี่ยวกับเรา</a>
                <a href="javascript:void(0)">ร่วมโครงการ</a>
                <a href="javascript:void(0)">คลังสื่อนวัตกรรม</a>
                <a href="javascript:void(0)">ติดต่อเรา</a>
            </div>
        </div>

        <div class="d-flex" id="wrapper">

            @if(session('uAuth'))
            <div class="border-end bg-white" id="sidebar-wrapper" >
                <div class="btn_sidebar_active">
                    <table border='0'>
                        <tr>
                            <td style="width:80px;">
                                <img  src="{{ asset('logo/logo.png') }}" style="width:70px;margin: 0.2em;border:0;">
                            </td>
                            <td style="padding:0em;">
                                ข้อตกลงในการพัฒนางานสำหรับครู <span style="font-size: 10pt;">(Performance Agreement){{PA_year()}}</span>
                            </td>
                        </tr>
                    </table>

                </div>
                <div class="list-group list-group-flush" style="width:250px;">
                    <div class="btn_sidebar" onclick="menu_toggle('dropdown_1');"><a><u>ส่วนที่ 1</u> ข้อมูลผู้จัดทำข้อตกลงในการพัฒนางาน <i class="fa fa-caret-down" aria-hidden="true"></i></a></div>
                    <ul id="dropdown_1" class="dropdown" style="display: none;">
                        <li><i class="fa fa-angle-double-right" aria-hidden="true"></i> <a href="{{url('PA1_1')}}">ข้อมูลทั่วไป</a></li>
                        <li><i class="fa fa-angle-double-right" aria-hidden="true"></i> <a href="{{url('PA1_2')}}">ภาระงานตามที่ กคศ.กำหนด</a></li>
                        <li><i class="fa fa-angle-double-right" aria-hidden="true"></i> <a href="{{url('PA1_3')}}">ประเภทห้องเรียนที่จัดการเรียนรู้</a></li>
                        <li><i class="fa fa-angle-double-right" aria-hidden="true"></i> <a href="{{url('PA1_4')}}">การอบรมและพัฒนาตนเอง</a></li>
                        <li><i class="fa fa-angle-double-right" aria-hidden="true"></i> <a href="{{url('PA1_5')}}">สื่อการเรียนรู้และนวัตกรรม</a></li>
                    </ul>
                    <div class="btn_sidebar" onclick="menu_toggle('dropdown_2');"><a><u>ส่วนที่ 2</u> ผลการประเมินงานตามมาตรฐานตำแหน่งและภาระงานตามที่ ก.ค.ศ.กำหนด <i class="fa fa-caret-down" aria-hidden="true"></i></a></div>
                    <ul id="dropdown_2" class="dropdown" style="display: none;">
                        <li><i class="fa fa-angle-double-right" aria-hidden="true"></i> <a href="{{url('PA2_1')}}">ผลการประเมิน</a></li>
                        <li><i class="fa fa-angle-double-right" aria-hidden="true"></i> <a href="{{url('PA2_2')}}">แผนการพัฒนาตนเอง</a></li>
                        <li><i class="fa fa-angle-double-right" aria-hidden="true"></i> <a href="{{url('PA2_3')}}">งานที่ปฏิบัติตามมาตรฐานตำแหน่ง</a></li>
                    </ul>
                    <div class="btn_sidebar"><a href="{{url('PA3')}}"><u>ส่วนที่ 3</u> การวิเคราะห์ประเด็นท้าทายในการพัฒนาผลลัพธ์การเรียนรู้ของผู้เรียน</a></div>
                    <div class="btn_sidebar"><a href="{{url('PA4')}}"><u>ส่วนที่ 4</u> แนวทางการพัฒนาและผลการพัฒนาผลลัพธ์การเรียนรู้ของผู้เรียนตามประเด็นท้าทาย</a></div>
                                      <a class="btn_sidebar" href="{{url('PA5')}}" style="text-align:center;">ภาคผนวก</a>

                </div>
            </div>
            @endif

            <div id="page-content-wrapper">
                @if(session('uAuth'))
                <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom" >
                    <div class="container">
                        <button class="btn btn-primary" id="sidebarToggle"><li class="fa fa-bars" title="toggle"></li></button>
                    </div>
                </nav>
                @endif


                @yield('content')

                <div class="modal fade" id="myModal" role="dialog">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title">!มีบางอย่างไม่ถูกต้อง</h4>
                            </div>
                            <div class="modal-body">
                                <span id="span_modal"></span>
                            </div>
                            <div class="modal-footer">
                                <button type="button" id="close" class="btn btn-primary" data-dismiss="modal" onclick="close_modal();" aria-label="Close">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"></script>
        <script src="{{ asset('assets/js/scripts.js') }}"></script>
    </body>
</html>