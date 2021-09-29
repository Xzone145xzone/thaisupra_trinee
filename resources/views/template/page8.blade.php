<html>

    <div class="panel">

           <b>ความต้องการและคำรับรองในการพัฒนาตนเองและวิชาชีพของผู้จัดทำแผนพัฒนาตนเอง หลักสูตรที่ควรจะได้รับการพัฒนาตนเองและวิชาชีพ</b>
          
           <br>
            <table border="1" style="margin: 0 auto;">
                <tr class="tr_header">
                    <th style="width:5%;vertical-align: top;">ลำดับ</th>
                    <th style="width:25%;text-align: center;vertical-align: top;">มาตรฐานตำแหน่งที่จะพัฒนา</th>
                    <th style="text-align: center;width:10%;vertical-align: top;">เริ่มต้น</th>
                    <th style="text-align: center;width:10%;vertical-align: top;">สิ้นสุด</th>
                    <th style="text-align: center;width:15%;vertical-align: top;">การของบประมาณ</th>
                    <th style="text-align: center;width:30%;vertical-align: top;">ประโยชน์ที่คาดว่าจะได้รับ</th>
           
                </tr>  
                <?php $i=1; ?>
                @if(count($development)>0)
                @foreach($development as $development)
                <tr>
                    <td style="text-align:center;">{{$i++}}</td>  
                    <td>{{standard($development->standard_id)->detail}}</td>   
                    <td>{{$development->start_date}}</td>  
                    <td>{{$development->end_date}}</td>  
                    <td class="text_center">{{$development->budget}}</td>  
                    <td>{{$development->benefit}}</td> 
                  
                </tr>
                @endforeach 
                @else 
                <tr style="height:40px;">
                    <td colspan="7" style="text-align:center;">ไม่มีข้อมูล</td>  
                </tr>
                @endif
            </table>

           
               <br>
              <label><b>งานที่ปฏิบัติตามมาตรฐานตำแหน่ง</b></label>
               <br>
               <table border="1" style="width:100%;margin: 0 auto;">
                <tr class="tr_header">
                    <th style="width:5%;vertical-align: top;"> </th>
                    <th style="width:20%;vertical-align: top;">งานที่ปฏิบัติตามมาตรฐานตำแหน่ง</th>
                    <th style="width:25%;vertical-align: top;">งาน (Tasks) </th>
                    <th style="width:25%;vertical-align: top;">ผลลัพธ์ (Outcomes) </th>
                    <th style="width:25%;vertical-align: top;">ตัวชี้วัด (Indicators) </th>
               
                </tr>  
                <?php $i=1; ?>
                @if(count($task)>0)
                @foreach($task as $tasks)
                <tr>
                    <td style="text-align:center;vertical-align: top;">{{$i++}}</td>
                    <td style="vertical-align: top;"> <b>{{$tasks->standard}}</b></td>
                    <td style="vertical-align: top;">{{$tasks->task}}</td>
                    <td style="vertical-align: top;">{{$tasks->outcome}}</td>
                    <td style="vertical-align: top;">{{$tasks->indicator}}</td>
                    
                   
                </tr>
                @endforeach
                @else
                <tr style="height:40px;">
                    <td colspan="6" style="text-align:center;">
                       ไม่มีข้อมูล
                    </td>
                </tr>
                @endif
                
            </table>
    </div>
</html>