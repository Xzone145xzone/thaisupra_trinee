@extends('layouts.app')    
@section('content')




<div class="container-fluid" id="container-fluid">
    <div class="child">
        <div class="page_header">
            <table class="tb_header">
                <tr class="border_bottom">
                    <td colspan="2">
                        <span class="text_blue"><b><u>ส่วนที่ 1</u> ข้อมูลผู้จัดทำแผนพัฒนาตน</b></span>
                    </td>
                    <td colspan="3" style="text-align:right;">
                        <span class="text_blue"><b>การอบรมและพัฒนาตนเอง</b></span>
                    </td>
                </tr>
               
            </table>
            @include('layouts.main1')
        </div>

        <div class="row" id="block">

            <div style="width: 100%;text-align: right;margin:1em;">
                  <a class="btn_page" onclick="add_train_edit();" ><span class="fa fa-plus"></span> เพิ่มประวัติการอบรม</a>
            </div> 
             <div class="table-responsive">
             <table class="table_green" id='tbl_train'>
                   <tr class="tr_header">                   
                    <th style="width:25%;">หัวข้อในการอบรม</th>
                    <th style="width:15%;">วันเริ่มต้น</th>
                    <th style="width:15%;">วันสิ้นสุด</th> 
                    <th style="width:10%;">จำนวนชั่วโมง</th>
                    <th style="width:20%;">หน่วยงานที่จัด</th> 
                    <th style="width:20%;"></th> 
                </tr>
                   <?php
                $i = 0;
                ?>
                  @foreach($train as $trains)
                  <tr style="height:40px;">
                   <td>
                      
                     <div id="ele_train_{{$i}}" class="display_none">
                            <input type="text" class="form-control" id="txttrain" name="txttrain[{{$i}}]" style="text-align: center;" value="{{$trains->train}}" onchange="update_train_field({{$trains->id}},{{$i}}, 'train');" required>
                     </div>
                     <div id="text_train_{{$i}}" style="width:100%;text-align: center;" onclick="show_ele('train_{{$i}}');">
                            {{$trains->train}}
                     </div>      
                  </td>    
                 <td>
                     <div id="ele_start_date_{{$i}}" class="display_none">
                         <input type="date" class="form-control" id="txtstart_date" name="txtstart_date[{{$i}}]" style="text-align: center;" value="{{$trains->start_date}}" onchange="update_train_field({{$trains->id}},{{$i}}, 'start_date');" required>
                     </div>
                     <div id="text_start_date_{{$i}}" style="width:100%;text-align: center;" onclick="show_ele('start_date_{{$i}}');">
                            {{datethai($trains->start_date)}}
                     </div>           
                  </td>
                    <td>
                     <div id="ele_end_date_{{$i}}" class="display_none">
                         <input type="date" class="form-control" id="txtend_date" name="txtend_date[{{$i}}]" style="text-align: center;" value="{{$trains->start_date}}" onchange="update_train_field({{$trains->id}},{{$i}}, 'end_date');" required>
                     </div>
                     <div id="text_end_date_{{$i}}" style="width:100%;text-align: center;" onclick="show_ele('end_date_{{$i}}');">
                            {{datethai($trains->end_date)}}
                     </div>           
                  </td>
                  <td>
                     <div id="ele_train_hour_{{$i}}" class="display_none">
                           <input type="number" class="form-control" id="txttrain_hour" name="txttrain_hour[{{$i}}]" style="text-align: center;" value="{{$trains->train_hour}}" onchange="update_train_field({{$trains->id}},{{$i}}, 'train_hour');" required>
                     </div>
                     <div id="text_train_hour_{{$i}}" style="width:100%;text-align: center;" onclick="show_ele('train_hour_{{$i}}');">
                            {{$trains->train_hour}}
                     </div>      
                  </td>
                  <td>
                     <div id="ele_agency_{{$i}}" class="display_none">
                         <input type="text" class="form-control" id="txtagency" name="txtagency[{{$i}}]" style="text-align: center;" value="{{$trains->agency}}" onchange="update_train_field({{$trains->id}},{{$i}}, 'agency');" required>
                     </div>
                     <div id="text_agency_{{$i}}" style="width:100%;text-align: center;" onclick="show_ele('agency_{{$i}}');">
                            {{$trains->agency}}
                     </div>   
                  </td>
                  <td style="text-align: center;"><a class="btn btn-default" onclick="delete_row_train({{$trains->id}});" ><li class="fa fa-trash"></li></a></td>
                  </tr>  
                   <?php
                $i++;
                ?>
                  @endforeach
              </table>
             </div>
    </div>
    </div>

    <center>
        <a class="btn_blue" href="{{url('/PA1_5')}}"><li style="margin-right:10px;font-size: 18pt;" class="fa fa-arrow-circle-right "></li> ไปยังขั้นตอนถัดไป</a> 
    </center>

</div>

@endsection