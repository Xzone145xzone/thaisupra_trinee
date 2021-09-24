@extends('layouts.app')    
@section('content')
<!-- Page content-->

<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">


<style>

   
</style>

<div class="container-fluid" style="padding-bottom:100px;">
    <div class="child">
        <div class="page_header">
            <table class="tb_header">
                <tr class="border_bottom">
                    <td colspan="3">
                        <span class="blue_big"><b><u>ส่วนที่ 2</u> ผลการประเมินงานตามมาตรฐานตำแหน่งและภาระงานตามที่ ก.ค.ศ.กำหนด</b></span>
                    </td>
                    <td colspan="2" style="text-align:right;">
                        <span class="blue_big"><b>แผนการพัฒนาตนเอง</b></span>
                    </td>
                </tr>

            </table>
            @include('layouts.main2')
        </div>

        <div class="row" id="block">
          
            <br><br>
            <span class="blue_small"><b>ความต้องการและคำรับรองในการพัฒนาตนเองและวิชาชีพของผู้จัดทำแผนพัฒนาตนเอง หลักสูตรที่ควรจะได้รับการพัฒนาตนเองและวิชาชีพ</b></span>
            <br><br>
            <div class="table-responsive">
            <table border="1" class="table_green" style="margin: 0 auto;">
                <tr class="tr_header">
                    <th style="width:5%;">ลำดับ</th>
                    <th style="width:25%;text-align: center;">มาตรฐานตำแหน่งที่จะพัฒนา</th>
                    <th style="text-align: center;width:10%;">เริ่มต้น</th>
                    <th style="text-align: center;width:10%;">สิ้นสุด</th>
                    <th style="text-align: center;width:15%;">การของบประมาณ</th>
                    <th style="text-align: center;width:30%;">ประโยชน์ที่คาดว่าจะได้รับ</th>
                    <th style="width:5%;"></th> 
                </tr>  
                <?php $i=1; ?>
                @if(count($development)>0)
                @foreach($development as $development)
                <tr>
                    <td>{{$i++}}</td>  
                    <td onclick="update_develop_field({{$development->standard_id}},'standard_id','{{standard($development->standard_id)->detail}}');">{{standard($development->standard_id)->detail}}</td>   
                    <td>{{$development->start_date}}</td>  
                    <td>{{$development->end_date}}</td>  
                    <td class="text_center">{{$development->budget}}</td>  
                    <td>{{$development->benefit}}</td> 
                    <td><a href="/PA2_delete_Development/{{$development->id}}" class="btn btn-default"><li class="fa fa-trash"></li></a></td> 
                </tr>
                @endforeach 
                @else 
                <tr style="height:40px;">
                    <td colspan="7" style="text-align:center;">กรุณาเพิ่มข้อมูล</td>  
        
                </tr>
                @endif
            </table>
            </div>
        </div>
      
        <form method="post" action="{{url('PA2_Insert_Development')}}">
            @csrf 
            <div class="row" id="block">
 
                <ul class="sortable" id="sortable">
                    <li class="ui-state-default">                    

                        <div class="row">
                            <div class="col col-lg-5 col-md-5 col-sm-12">
                                <span class="ui-icon ui-icon-arrowthick-2-n-s"></span>
                                <label>มาตรฐานตำแหน่งที่จะพัฒนา</label>
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
                                <br><span class="ui-icon ui-icon-arrowthick-2-n-s"></span>
                                <label>ระยะเวลา</label>
                            </div>
                            <div class="col col-lg-6 col-md-6 col-sm-12">
                                <table border="0">
                                    <tr>
                                        <td><b>เริ่มต้น</b> <input type="date" id="txtstart_date" name="txtstart_date" class="form-control" required> </td>
                                        <td>-</td>
                                        <td><b>สิ้นสุด</b> <input type="date" id="txtend_date" name="txtend_date" class="form-control" required></td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col col-lg-5 col-md-5 col-sm-12">
                                <span class="ui-icon ui-icon-arrowthick-2-n-s"></span><label>การของบประมาณ</label>
                            </div>
                            <div class="col col-lg-6 col-md-6 col-sm-12">
                                <input type="text" id="txtbudget" name="txtbudget" class="form-control" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col col-lg-5 col-md-5 col-sm-12">
                                <span class="ui-icon ui-icon-arrowthick-2-n-s"></span><label>ประโยชน์ที่คาดว่าจะได้รับ</label>
                            </div>
                            <div class="col col-lg-6 col-md-6 col-sm-12">
                                <textarea class="form-control" id="txtbenefit" name="txtbenefit" style="height:100px;" required></textarea>
                            </div>
                        </div>
                    </li>
                </ul>

                <center>
                    <button class="btn btn-success" type="submit" style="height:50px;">
                        <li style="margin-right:5px;" class="fa fa-arrow-circle-right "></li> 
                        เพิ่ม
                    </button> 
                  
                       <a class="btn_blue" href="{{url('PA2_3')}}"><li class="fa fa-arrow-circle-right "></li> ไปยังขั้นตอนถัดไป</a> 
                 
                </center>
            </div>
        </form>
    </div>




</div>

@endsection