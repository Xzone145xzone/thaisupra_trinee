@extends('layouts.app')    
@section('content')

        <link href="{{ asset('assets/css/evaluation.css') }}" rel="stylesheet">

        <div class="container-fluid" style="padding: 1em;">
            <div class="row">

                <div class="col-md-7 col-lg-7 col-sm-12" style="border: 1px solid green;padding:1em;margin: 0 auto;">

                    <center>
                        <h2> <span class="text_blue"><b>การประเมินความต้องการพัฒนาสมรรถนะผู้เรียน</b></span></h2>
                    </center> 
                    <br>
                   
                    <table  style="width: 100%;color:#1050A2;">
                        <tr>
                            <th style="width:15%;vertical-align: top;">คำชี้แจง</th>
                            <th colspan="2" style="color: black;">
                                จากรายการความสามารถที่กำหนดให้นักเรียนเห็นว่าตนเองมีความสามารถอยู่ในระดับใด โดยใช้ลูกศรกด
                                ไปยังช่องที่ตรงกับความเห็นของท่านมากที่สุด(เมื่อกดแล้วจะมีสัญลักษณ์ 
                                ในช่องที่ตรงกับความคิดเห็นของท่านมากที่สุด)
                            </th>
                        </tr>
                        <tr>
                            <td></td>
                            <td style="width: 50%;">มีความสามารถมากที่สุด</td>
                            <td>ให้ตอบ 5</td>

                        </tr>
                        <tr>
                            <td></td>
                            <td>มีความสามารถมาก</td>
                            <td>ให้ตอบ 4</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>มีความสามารถปานกลาง</td>
                            <td>ให้ตอบ 3</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>มีความสามารถน้อย</td>
                            <td>ให้ตอบ 2</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>มีความสามารถน้อยที่สุด</td>
                            <td>ให้ตอบ 1</td>
                        </tr>

                    </table>
                   
                </div>        

            </div>
            <form method="post" action="{{url('/PA3_evaluation_answer')}}">
                 @csrf
            <div class="row" style="padding-bottom: 60px;">
                <div class="col-md-12 col-lg-12 col-sm-12" style="margin-top: 60px;">
                    <input type="hidden" id="hdneva_id" name="hdneva_id" value="{{$eva_id}}">
                    <div class="table-responsive">
                    <table class="table_evaluation"  border='1'>
                        <tr class="tr_header_green">
                            <th ></th>
                            <th rowspan="2">ความสามารถของนักเรียน</th>
                            <th colspan="5">ระดับความสามารถของนักเรียน</th>
                        </tr>
                        <tr class="tr_header_green">
                            <th colspan="2"></th>
                            <th style="width: 10%;">มากที่สุด</th>
                            <th style="width: 10%;">มาก</th>
                            <th style="width: 10%;">ปานกลาง</th>
                            <th style="width: 10%;">น้อย</th>
                            <th style="width: 10%;">น้อยที่สุด</th>
                        </tr>
                        <?php $i=0; ?>
                        @foreach($topic as $topic)
                        <tr class="tr_header_blue" style="height: 60px;">
                            <th></th>
                            <th>{{$topic->detail}}</th>
                           <th>5</th>
                           <th>4</th>
                            <th>3</th>
                            <th>2</th>
                            <th>1</th>
                        </tr>
                        <?php $j=0; ?>
                        <?php $question = $model->find_question($topic->no); ?>
                        @foreach($question as $question)
                        <tr>
                            <td style="text-align:center;vertical-align: top;">{{$question->no}}.</td>
                            <td style="width: 50%;text-align: left;vertical-align: top;">
                                {{$question->detail}}
                            </td>
                            @for($k=1;$k<=5;$k++)                            
                            <td class="td_hover"  onclick="check({{$i}}, {{$j}}, {{$k}});">
                                <input type="radio" style="display: none;" id="chk_{{$i}}_{{$j}}_{{$k}}"  name="answer[{{$topic->no}}][{{$question->no}}]" value="{{$k}}" required>
                                <div id="ele_{{$i}}_{{$j}}_{{$k}}"></div>
                               
                            </td>
                            @endfor
                          <?php $j++; ?>
                        </tr>
                       @endforeach
                         <?php $i++; ?>
                        @endforeach
                    </table>
                    </div>
                </div>
                
                
                <center><br><br><br>
                    <button class="btn btn-success" type="submit"><li style="margin-right:10px;font-size: 18pt;" class="fa fa-arrow-circle-right "></li> ส่งแบบประเมิน</button> 
                </center>
                
                
            </div>
                </form>
        </div>
@endsection