<html>

    <div class="panel">


         <div style="margin-top:10px;">
       
            <table style="width:100%" border="1">
                <tr style="height:50px;">
                    <td style="width:60%;text-align: center;">งานตามมาตรฐานตำแหน่ง</td>
                    <td style="width:20%;text-align: center;">คะแนนเฉลี่ย</td>
                    <td style="width:20%;text-align: center;">ระดับคุณภาพ</td>
                </tr>
                @foreach($standard2 as $standards) 
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
      
        <br><br><b>หมายเหตุ</b> ข้อมูลจากผลการประเมินของมูลนิธิครูดีของแผ่นดิน ซึ่งประเมินครอบคลุมคุณลักษณะด้านครองตน ครองคน และครองงาน ด้วยข้อคำถามที่ผ่านการตรวจสอบคุณภาพแล้วจำนวน 83 ข้อ
        <br><br><b>เกณฑ์การให้คะแนน</b>
        
        <br>1.00 - 1.50 คะแนน มาตรฐานนั้นในระดับควรปรับปรุง
        <br>1.51 - 2.50 คะแนน มาตรฐานนั้นในระดับพอใช้
        <br>2.51 - 3.50 คะแนน มาตรฐานนั้นในระดับปานกลาง
        <br>3.51 - 4.50 คะแนน มาตรฐานนั้นในระดับดี
        <br>4.51 - 5.00 คะแนน มาตรฐานนั้นในระดับดีมาก
        



    </div>

</html>