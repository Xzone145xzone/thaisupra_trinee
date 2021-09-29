<html>

    <div class="panel">

        <b>ส่วนที่ 2 ผลการประเมินงานตามมาตรฐานตำแหน่งและภาระงานตามที่ ก.ค.ศ. กำหนด</b>
  
              
           <b>ผลการประเมินงานตามมาตรฐานตำแหน่งและภาระงานตามที่ ก.ค.ศ.กำหนดได้ผลงานตามาตรฐานตำแหน่ง ดังนี้</b>
            <br><br><table style="width:80%;" border="0">
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
    
        
         <div style="margin-top:10px;">
       
            <table style="width:100%" border="1">
                <tr style="height:50px;">
                    <td style="width:60%;text-align: center;">งานตามมาตรฐานตำแหน่ง</td>
                    <td style="width:20%;text-align: center;">คะแนนเฉลี่ย</td>
                    <td style="width:20%;text-align: center;">ระดับคุณภาพ</td>
                </tr>
                @foreach($standard1 as $standards) 
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

</html>