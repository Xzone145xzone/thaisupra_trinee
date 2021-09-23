@extends('layouts.app')    
@section('content')

<style>
    
    .fa{
        margin-right:10px;
        font-size: 18pt;
    }
    
</style>

<div class="container-fluid">
    <form action="/PA1_3_insert" method="post">
        @csrf
        <div class="child">
            <div class="page_header">
                <table class="tb_header">
                    <tr class="border_bottom">
                        <td colspan="2">
                            <span class="text_blue"><b><u>ส่วนที่ 1</u> ข้อมูลผู้จัดทำแผนพัฒนาตน</b></span>
                        </td>
                        <td colspan="3" style="text-align:right;">
                            <span class="text_blue"><b>ประเภทห้องเรียนที่จัดการเรียนรู้</b></span>
                        </td>
                    </tr>

                </table>
                @include('layouts.main1')
            </div>

            <div class="row" id="block">

                <div class="block3">
                    <span class="text_blue_small"><b>ประเภทห้องเรียนที่จัดการเรียนรู้</b></span> (สามารถระบุได้มากกว่า 1 ประเภทห้องเรียนตามสภาพการจัดการเรียนรู้จริง)
                    
                    
                    
                    <ul class="class_learning">                    
                        @foreach($pa_learn_class as $pa_learn_class) 
                        @if(!empty($arr_learn_class))
                            @if(in_array($pa_learn_class->id,$arr_learn_class))
                            <li><input type="checkbox" id="arr_learn_class" name="arr_learn_class[]" value="{{$pa_learn_class->id}}" checked>{{$pa_learn_class->value}}</li>
                            @else   
                            <li><input type="checkbox" id="arr_learn_class" name="arr_learn_class[]" value="{{$pa_learn_class->id}}" >{{$pa_learn_class->value}}</li>
                            @endif
                        @else   
                        <li><input type="checkbox" id="arr_learn_class" name="arr_learn_class[]" value="{{$pa_learn_class->id}}" >{{$pa_learn_class->value}}</li>
                        @endif
                        
                        @endforeach

                    </ul>                
                </div>
            </div>
        </div>

        @if(!empty($arr_learn_class))
            @if((count($arr_learn_class)-1)>0))
            <center>
            <button type="submit" class="btn_blue" style="width:150px;"><li style="" class="fa fa-arrow-circle-right "></li> แก้ไข</button> 
            <a class="btn_green" href="{{url('/PA1_4')}}"><li class="fa fa-arrow-circle-right "></li> ไปยังขั้นตอนถัดไป</a> 
            </center>
            @else 
            <center>
            <button type="submit" class="btn_green"><li class="fa fa-arrow-circle-right "></li> บันทึกและดำเนินการต่อ</button> 
            </center>
            @endif
        @endif
    </form>
</div>

@endsection