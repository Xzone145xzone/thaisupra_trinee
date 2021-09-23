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


        <table style="width: 100%;" border="0">
            <tr style="height: 70px;">
                <td style="width: 50%;">
                </td>
                <td style="text-align:right;width: 50%;">
                    <a class="btn_page" onclick="add_innovation_edit();" ><span class="fa fa-plus"></span> เพิ่มสื่อการเรียนรู้ / นวัตกรรม</a>
                </td>
            </tr>
        </table>

        <div id="div_innovation" style="margin:1em;padding: 2em;border: 1px solid gainsboro;">
            @foreach($inno as $innos)
            <div class="inno">
                <table style="width: 100%;" border="0">
                    <tr>
                        <td style="width: 90%;padding-left: 20px;"> {{$innos->innovation}} </td>
                        <td style="width: 10%;text-align: center;"><a class="btn btn-default" href="PA_1_delete_inno/{{$innos->id}}"><li class="fa fa-trash"></li></a></td>
                    </tr>
                </table>
              
               
            </div>
            @endforeach
        </div>
    </div>
    <center>
    <a class="btn_blue" href="{{url('/PA2_1')}}"><li style="margin-right:10px;font-size: 18pt;" class="fa fa-arrow-circle-right "></li> ไปยังขั้นตอนถัดไป</a> 
    </center>
    </form>
</div>

@endsection