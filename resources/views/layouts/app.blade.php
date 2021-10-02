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
        <script src="{{asset('/storage/controller/controller.js')}}"></script>
        <script src="{{asset('/storage/controller/pa_1_2.js')}}"></script>
        <script src="{{asset('/storage/controller/pa_1_1.js')}}"></script>
        <script src="{{asset('/storage/controller/pa_1_4.js')}}"></script>
        <script src="{{asset('/storage/controller/pa_1_3.js')}}"></script>
        <script src="{{asset('/storage/controller/pa_4.js')}}"></script>
        <script src="{{asset('/storage/controller/pa_1_5.js')}}"></script> 
        <script src="{{asset('/storage/controller/pa_2_2.js')}}"></script> 
        <script src="{{asset('/storage/controller/pa_3.js')}}"></script> 
         <script src="{{asset('/storage/controller/templates.js')}}"></script> 
 
        <link href="{{ asset('assets/css/evaluation.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/css/template.css') }}" rel="stylesheet">
        <script src="{{asset('/storage/controller/element.js')}}"></script> 
         <script src="{{asset('assets/polygon/polygon.js')}}"></script> 
    </head>
    <body>
      
        <nav class="navbar navbar-expand-lg fixed-top" id="TopNav" style="background-color: #00061B;">
            <div class="container px-4">
                <div class="navbar-brand">
                    <span  class="btn_nav"><a class="nav-link"  href="{{url('/')}}"><span class="fa fa-plus"></span></a></span>
                    <span  class="btn_nav"><a class="nav-link"  href="{{url('/')}}"><span class="fa fa-globe"></span></a></span>
                </div>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span style="color:white;" class="navbar-toggler-icon"><i class="fa fa-bars" aria-hidden="true"></i></span></button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    
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

      
            <div class="border-end bg-white" id="sidebar-wrapper" >
                <div class="btn_sidebar_active">
                    <table border='0'>
                        <tr>
                            <td style="width:80px;">
                                <img  src="/logo/logo.png" style="width:70px;margin: 0.2em;border:0;">
                            </td>
                            <td style="padding:0em;">
                                ข้อตกลงในการพัฒนางานสำหรับครู <span style="font-size: 10pt;">(Performance Agreement){{PA_year()}}</span>
                            </td>
                        </tr>
                    </table>

                </div>
               
            </div>
          

            <div id="page-content-wrapper">
               


                @yield('content')

            
            </div>
        </div>


        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"></script>
        <script src="{{ asset('assets/js/scripts.js') }}"></script>
    </body>
</html>