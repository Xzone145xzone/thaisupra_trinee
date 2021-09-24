@extends('layouts.app')    
@section('content')
<!-- Page content-->
    <head>

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <link href="{{ asset('assets/css/app.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/css/evaluation.css') }}" rel="stylesheet">
        <script type="text/javascript">

            function check(i, j, k){

            for (z = 1; z <= 5; z++){
            //$("#chk_"+i+"_"+j+"_"+z).attr('checked', false);
            $("#ele_" + i + "_" + j + "_" + z).empty();
            }

            if ($("#chk_" + i + "_" + j + "_" + k).is(':checked')){
            $("#chk_" + i + "_" + j + "_" + k).attr('checked', false);
            $("#ele_" + i + "_" + j + "_" + k).empty();
            } else{
            $("#ele_" + i + "_" + j + "_" + k).append("&#10003;");
            $("#chk_" + i + "_" + j + "_" + k).attr('checked', true);
            }
            }
            
                  
        </script>

    </head>
    <body>

        <div class="col col-md-10 col-lg-10 col-sm-12" style="padding:60px;">
            <div class="row">

                <div class="col-md-7 col-lg-7 col-sm-12" style="border: 1px solid green;padding:1em;margin: 1em;">

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
            <div class="row" style="padding-bottom: 60px;">
                <div class="col col-md-12 col-lg-12 col-sm-12" style="margin-top: 60px;">
                     <div class="table-responsive">
                    <table class="table_evaluation" style="width:100%;" border='1'>
                        <tr class="tr_header_green">
                            <th rowspan="2">ความสามารถของนักเรียน</th>
                            <th colspan="5">ระดับความสามารถของนักเรียน</th>
                        </tr>
                        <tr class="tr_header_green">
                            <th style="width: 10%;">มากที่สุด</th>
                            <th style="width: 10%;">มาก</th>
                            <th style="width: 10%;">ปานกลาง</th>
                            <th style="width: 10%;">น้อย</th>
                            <th style="width: 10%;">น้อยที่สุด</th>
                        </tr>
                        @for($i=1;$i<=5;$i++)
                        <tr class="tr_header_blue">
                            <td>ด้านการจัดการความรู้</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        @for($j=1;$j<=5;$j++)
                        <tr>
                            <td style="width: 50%;padding:1em;text-align: left;">
                                1.สร้างหรือพัฒนาหลักสูตร โดยจัดทำรายวิชาและหน่วยการเรียนรู้ให้สอดคล้องกับมาตรฐานการ
                                เรียนรู้ และตัวชี้วัดหรือผลการเรียนรู้ ตามหลักสูตร ให้ผู้เรียนได้พัฒนาสมรรถนะและการเรียน
                                รู้เต็มตามศักยภาพ
                            </td>
                            @for($k=1;$k<=5;$k++)                            
                            <td class="td_hover"  onclick="check({{$i}}, {{$j}}, {{$k}});">
                                <input type="radio" style="display: none;" id="chk_{{$i}}_{{$j}}_{{$k}}"  name="chk_{{$i}}_{{$j}}" value="{{$k}}">
                                <div id="ele_{{$i}}_{{$j}}_{{$k}}"></div>
                              
                            </td>
                            @endfor

                        </tr>
                        @endfor
                        @endfor
                    </table>
                     </div>
                </div>
            </div>
        </div>

    </body>
</html>
@endsection