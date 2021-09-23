@extends('layouts.app')    
@section('content')
<!-- Page content-->

<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">


<style>

    table td{
        vertical-align: top;
    }

</style>

<div class="container-fluid" style="padding-bottom:100px;">
     <form method="post" action="{{url('/PA2_Insert_Task')}}">
          @csrf 
    <div class="child">
        <div class="page_header">
            <table class="tb_header">
                <tr class="border_bottom">
                    <td colspan="3">
                        <span class="text_blue"><b><u>ส่วนที่ 2</u> ผลการประเมินงานตามมาตรฐานตำแหน่งและภาระงานตามที่ ก.ค.ศ.กำหนด</b></span>
                    </td>
                    <td colspan="2" style="text-align:right;">
                        <span class="text_blue"><b>งานที่ปฏิบัติตามมาตรฐานตำแหน่ง</b></span>
                    </td>
                </tr>            
            </table>
             @include('layouts.main2')
        </div>
        <div class="row" id="block">
             <table border="1" class="table_green" style="width:100%;margin: 0 auto;">
                <tr class="tr_header">
                    <th style="width:5%;"> </th>
                    <th style="width:20%;">ลักษณะงานที่ปฏิบัติตามมาตรฐานตำแหน่ง</th>
                    <th style="width:25%;">งาน (Tasks) </th>
                    <th style="width:25%;">ผลลัพธ์ (Outcomes) </th>
                    <th style="width:25%;">ตัวชี้วัด (Indicators) </th>
                    <th style="width:5%;"></th>
                </tr>  
                <?php $i=1; ?>
                @if(count($task)>0)
                @foreach($task as $tasks)
                <tr>
                    <td>{{$i++}}</td>
                    <td> <b>{{$tasks->standard}}</b></td>
                    <td>{{$tasks->task}}</td>
                    <td>{{$tasks->outcome}}</td>
                    <td>{{$tasks->indicator}}</td>
                    <td> <a class="btn btn-default" href='/PA2_delete_Task/{{$tasks->id}}'><li class="fa fa-trash"></li></a></td>
                   
                </tr>
                @endforeach
                @else
                <tr style="height:40px;">
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                     <td></td>
                </tr>
                @endif
                
            </table>
        </div>

        <div class="row" id="block">
           
            <ul style="list-style:none;">
                <li>                    
                   
                    <div class="row">
                
                        <div class="col col-lg-5 col-md-5 col-sm-12">
                            <span class="ui-icon ui-icon-arrowthick-2-n-s"></span>
                            <label><b>งานที่ปฏิบัติตามมาตรฐานตำแหน่ง</b></label>
                        </div>
                        <div class="col col-lg-6 col-md-6 col-sm-12">
                            <select class="form-control" id="txtstandard" name="txtstandard" required>
                               @foreach($standard as $standards)
                               <option value="{{$standards->id}}">{{$standards->detail}}</option>
                               @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col col-lg-5 col-md-5 col-sm-12">
                            <label><b>งาน (Tasks)</b> 
                            <br>ที่จะดำเนินการพัฒนาตามข้อตกลงใน 1 รอบการประเมิน 
                            </label>
                        </div>
                        <div class="col col-lg-6 col-md-6 col-sm-12">
                            <textarea class="form-control" id="txttask" name="txttask" style="height:100px;" required></textarea>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col col-lg-5 col-md-5 col-sm-12">
                            <label><b>ผลลัพธ์ (Outcomes)</b> 
                            <br>ของงานตามข้อตกลง ที่คาดหวังให้เกิดขึ้นกับผู้เรียน 
                            </label>
                        </div>
                        <div class="col col-lg-6 col-md-6 col-sm-12">
                            <textarea class="form-control" id="txtoutcome" name="txtoutcome" style="height:100px;" required></textarea>
                        </div>
                    </div>
                      <div class="row">
                        <div class="col col-lg-5 col-md-5 col-sm-12">
                        <label><b>ตัวชี้วัด (Indicators)</b> 
                            <br>ที่จะเกิดขึ้นกับผู้เรียน ที่แสดงให้เห็นถึงการเปลี่ยนแปลง
                            <br>ไปในทางที่ดีขึ้นหรือมีการพัฒนามากขึ้นหรือผลสัมฤทธิ์สูงขึ้น 
                         </label>
                        </div>
                        <div class="col col-lg-6 col-md-6 col-sm-12">
                            <textarea class="form-control" id="txtindicator" name="txtindicator" style="height:100px;" required></textarea>
                        </div>
                    </div>
                </li>
            </ul>
               
        </div>
    </div>
    <center>
        <button type='submit' class="btn btn-success" ><li style="margin-right:10px;font-size: 18pt;" class="fa fa-arrow-circle-right "></li> เพิ่มงานถัดไป</button> 
    </center>
          </form>
</div>

@endsection