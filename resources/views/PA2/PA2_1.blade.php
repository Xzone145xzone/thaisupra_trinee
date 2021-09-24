@extends('layouts.app')    
@section('content')
<!-- Page content-->

<script src="path/to/chartjs/dist/chart.js"></script>
<style type="text/css">
    .chart {
  --scale: 100;

  /* Setup the grid */
  display: grid;
  grid-auto-columns: 1fr;
  grid-template-rows: repeat(var(--scale), minmax(0, 1fr)) 1.4rem;
  grid-column-gap: 5px;

  /* Generate background guides */
  /* (sub-pixel rounding errors make this imperfect) */
  --line-every: 10;
  background-image: linear-gradient(to bottom, #ccc 1px, transparent 1px);
  background-size: 100% calc((100% - 1.4rem) / var(--scale) * var(--line-every));
  
  /* other styles… */
  margin: 2em auto 1em;
  padding: 0 1em;
  position: relative;
  max-width: 70vw;
  height: calc(100vh - 3em);
}

.chart::after {
  background: #fff;
  bottom: 0;
  content: ' ';
  height: 1.4rem;
  left: 0;
  position: absolute;
  right: 0;
}


/* Dates… */
/* ------ */

.date {
  align-items: center;
  display: flex;
  font-weight: bold;
  grid-row-start: -2;
  justify-content: center;
  text-align: center;
  z-index: 2;
}


/* Each bar on the graph… */
/* ---------------------- */

.bar {
  grid-row: var(--start) / -2;
  
  /* Background-Color */
  background-image: linear-gradient(to right, green, yellow, orange, red);
  background-size: 1600% 100%;
  background-position: calc(var(--start) * 1%) 0;
  
  /* Other styles… */
  border-radius: 5px 5px 0 0;
  color: #000;
  list-style: none;
  position: relative;
}

.value {
  background: #fff;
  bottom: 100%;  
  display: inline-block;
  left: 50%;
  padding: 0 0.4em;
  position: absolute;
  transform: translate(-50%, -1px);
}


/* Global helpers… */
/* --------------- */

:root {
  font-size: 80%;
  font-family: sans-serif;
}

* {
  box-sizing: border-box;
}

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
                        <span class="text_blue"><b>ผลการประเมิน</b></span>
                    </td>
                </tr>
            </table>
            @include('layouts.main2')
        </div>

        
        <span class="text_blue_small">
           <b> ผลการประเมินงานตามมาตรฐานตำแหน่งและภาระงานตามที่ ก.ค.ศ. กำหนด ได้ผลงานตามาตรฐานตำแหน่ง ดังนี้ </b>
            <br><br><table style="width:60%;" border="0">
                <tr>
                    <td style="width:50%;text-align: left;">งานตามมาตรฐานตำแหน่งระดับคุณภาพดีมาก</td>
                    <td style="text-align: right;width: 10%;">5</td>
                    <td style="text-align: right;width: 10%;">มาตรฐาน</td>
                </tr>
                <tr>
                    <td style="text-align: left;">งานตามมาตรฐานตำแหน่งระดับคุณภาพดี</td>
                    <td style="text-align: right;">4</td>
                    <td style="text-align: right;width: 10%;">มาตรฐาน</td>
                </tr>
                <tr>
                    <td style="text-align: left;">งานตามมาตรฐานตำแหน่งระดับปานกลาง</td>
                    <td style="text-align: right;">3</td>
                    <td style="text-align: right;width: 10%;">มาตรฐาน</td>
                </tr>
                <tr>
                    <td style="text-align: left;">งานตามมาตรฐานตำแหน่งระดับพอใช้</td>
                    <td style="text-align: right;">2</td>
                    <td style="text-align: right;width: 10%;">มาตรฐาน</td>
                </tr>
                <tr>
                    <td style="text-align: left;">งานตามมาตรฐานตำแหน่งระดับปรับปรุง</td>
                    <td style="text-align: right;">1</td>
                    <td style="text-align: right;width: 10%;">มาตรฐาน</td>
                </tr>                
            </table>           
            <br><b>ตาราง ผลการประเมินงานตามมาตรฐานตำแหน่งและภาระงานตามที่ ก.ค.ศ. กำหนด ได้ผลงานตามมาตรฐานตำแหน่ง ดังนี้</b>
        </span>
        
        
        <div style="margin-top: 60px;">
            <div class="table-responsive">
            <table style="width:100%" border="1">
                <tr style="height:70px;">
                    <td style="width:60%;text-align: center;">งานตามมาตรฐานตำแหน่ง</td>
                    <td style="width:20%;text-align: center;">คะแนนเฉลี่ย</td>
                    <td style="width:20%;text-align: center;">ระดับคุณภาพ</td>
                </tr>
                @foreach($standard as $standards) 
                <tr class="tr_header">
                    <th>{{$standards->detail}}</th>
                    <th>3</th>
                    <th>ปานกลาง</th>
                </tr>
                
                <?php $item = $model->find_standard($standards->no); ?>
                @foreach($item as $items)
                <tr>
                <td style="padding:1em;padding-left: 30px;text-align: left;">{{$items->no}}. {{$items->detail}}</td>
                <td style="text-align:center;">
                    3.50
                </td>
                <td style="text-align:center;">
                    ปานกลาง
                </td>
               </tr>
                 @endforeach
                @endforeach
            </table>
            </div>
        </div>
        <br><br><b>หมายเหตุ</b> ข้อมูลจากผลการประเมินของมูลนิธิครูดีของแผ่นดิน ซึ่งประเมินครอบคลุมคุณลักษณะด้านครองตน ครองคน และครองงาน ด้วยข้อคำถามที่ผ่านการตรวจสอบคุณภาพแล้วจำนวน 83 ข้อ
        <br><br><b>เกณฑ์การให้คะแนน</b>
        
        <br>1.00 - 1.50 คะแนน มาตรฐานนั้นในระดับควรปรับปรุง
        <br>1.51 - 2.50 คะแนน มาตรฐานนั้นในระดับพอใช้
        <br>2.51 - 3.50 คะแนน มาตรฐานนั้นในระดับปานกลาง
        <br>3.51 - 4.50 คะแนน มาตรฐานนั้นในระดับดี
        <br>4.51 - 5.00 คะแนน มาตรฐานนั้นในระดับดีมาก
        
        
                <div class="row" id="block">

            <center>
                <span class="text_blue_small" style="">
                    งานตามมาตรฐานตำแหน่ง เรียงตามผลการประเมิน มาก - น้อย
                </span><br><br>
            </center>

            <table border="1" class="table_green" style="width:80%;margin: 0 auto;">
                <tr class="tr_header">
                    <th style="width:5%;">ลำดับ</th>
                    <th style="width:60%;text-align: center;">งานตามมาตรฐานตำแหน่ง</th>
                    <th style="width:15%;text-align: center;">คะแนนเฉลี่ย</th>
                    <th style="width:20%;text-align: center;">ระดับคุณภาพ</th>
                </tr>  
                <tr>
                    <td>1</td>
                    <td>ด้านการจัดการเรียนรู้</td>
                    <td style="text-align: center;">3.5</td>
                    <td style="text-align: center;">ดีมาก</td>
                </tr> 
                <tr>
                    <td>2</td>
                    <td>ด้านการพัฒนาตนเองและวิชาชีพ</td>
                    <td style="text-align: center;">3</td>
                    <td style="text-align: center;">ดี</td>
                </tr> 
                <tr>
                    <td>3</td>
                    <td>วินัย คุณธรรม จริยธรรม จรรยาบรรณ วิชาขีพ</td>
                    <td style="text-align: center;">2.5</td>
                    <td style="text-align: center;">พอใช้</td>
                </tr> 
                <tr>
                    <td>4</td>
                    <td>ด้านการส่งเสริมและสนับสนุนการจัดการเรียนรู้</td>
                    <td style="text-align: center;">1</td>
                    <td style="text-align: center;">ปรับปรุง</td>
                </tr> 
            </table>
        </div>
        
        
        
        <div>   
        
        <dl class="chart" style="--scale:100;width:70%;height:500px;">
  
  <dt class="date">2000</dt>
  <dd class="bar" style="--start: 56;">
    <span class="value">45%</span>
  </dd>

  <dt class="date">2001</dt> 
  <dd class="bar" style="--start: 1;">
    <span class="value">100%</span> 
  </dd>

  <dt class="date">2002</dt> 
  <dd class="bar" style="--start: 38;">
    <span class="value">63%</span> 
  </dd>

  <dt class="date">2003</dt> 
  <dd class="bar" style="--start: 90;">
    <span class="value">11%</span> 
  </dd>

  <dt class="date">2004</dt> 
  <dd class="bar" style="--start: 55;">
    <span class="value">46%</span> 
  </dd>

  <dt class="date">2005</dt> 
  <dd class="bar" style="--start: 13;">
    <span class="value">88%</span> 
  </dd>

  <dt class="date">2006</dt> 
  <dd class="bar" style="--start: 66;">
    <span class="value">35%</span> 
  </dd>

  <dt class="date">2007</dt> 
  <dd class="bar" style="--start: 96;">
    <span class="value">5%</span> 
  </dd>

  <dt class="date">2008</dt> 
  <dd class="bar" style="--start: 23;">
    <span class="value">78%</span> 
  </dd>

  <dt class="date">2009</dt> 
  <dd class="bar" style="--start: 10;">
    <span class="value">91%</span> 
  </dd>

  <dt class="date">2010</dt> 
  <dd class="bar" style="--start: 46;">
    <span class="value">55%</span> 
  </dd>

  <dt class="date">2011</dt> 
  <dd class="bar" style="--start: 85;">
    <span class="value">16%</span> 
  </dd>
  
</dl>

        </div>

    <center>
        <a class="btn_blue" href="{{url('PA2_2')}}"><li style="margin-right:10px;font-size: 18pt;" class="fa fa-arrow-circle-right "></li> แผนพัฒนาตนเอง</a> 
    </center>

</div>



@endsection