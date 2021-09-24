@extends('layouts.app')    
@section('content')

<script>

</script>
<div class="container-fluid" id="container-fluid">
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


         <div style="width: 100%;text-align: right;margin:1em;">
                    <a class="btn_page" onclick="add_innovation_edit();">
                        <span class="fa fa-plus"></span> เพิ่มสื่อการเรียนรู้ / นวัตกรรม
                    </a>
         </div>
 <div id="block">
        <div id="div_innovation">
            @foreach($inno as $innos)
            <div style="width:90%;border: 1px solid gray;background-color: #ddd;padding: 1em;margin: 20px;">
                <table style="width: 80%;" border="0">
                    <tr>
                        <td style="width:90%;padding-left: 20px;"> {{$innos->innovation}} </td>
                        <td style="width:5%;text-align: center;"><a class="btn btn-default" href="PA_1_delete_inno/{{$innos->id}}"><li class="fa fa-trash"></li></a></td>
                    </tr>
                </table>
              
               
            </div>
            @endforeach
        </div>
 </div>
    </div>
    <center>
    <a class="btn_blue" href="{{url('/PA2_1')}}"><li style="margin-right:10px;font-size: 18pt;" class="fa fa-arrow-circle-right "></li> ไปยังขั้นตอนถัดไป</a> 
    </center>
    </form>
</div>

@endsection