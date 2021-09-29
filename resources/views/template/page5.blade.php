<html>

    <div class="panel">

    <?php $sch_hour = 0; ?>
    
   <b>วิชาที่ทำการสอน</b><br>
 
   <table style="width:100%;border-collapse: collapse;" border="1">
   <tr>
    <td><b>กลุ่มสาระ</b></td><td><b>วิชา</b></td><td><b>ระดับชั้น</b></td><td><b>ชั่วโมงที่ทำการสอน</b></td>
   </tr>
    <?php foreach($schedule_hour as $schedule_hour){ ?>       
    
    <tr>
   <td><?=$schedule_hour->group_learn;?></td>
   <td><?=$schedule_hour->subject;?></td>
   <td><?=$schedule_hour->grade;?></td>
   <td><?=$schedule_hour->sch_hour;?></td>
   </tr>
      
    <?php $sch_hour+=$schedule_hour->sch_hour; } ?>
    
   <tr>
   <td colspan="3" style="text-align:center;"><b>รวมชั่วโมงในการปฏิบัติหน้าที่</b></td>
   <td><b><?=$sch_hour;?></b></td>
   </tr>
               
  </table>
    
   
 <?php $sp_hour = 0; ?>

            <br><b>งานส่งเสริมและสนับสนุนการจัดการเรียนรู้</b><br>
           <table style="width:100%;border-collapse: collapse;" border="1">
           <tr>
           <td><b>งานส่งเสริมและสนับสนุนการจัดการเรียนรู้</b></td>
           <td><b>ชั่วโมง/สับดาห์</b></td>
           </tr>
           <?php 
            foreach ($support_hour as $support_hour) { ?>

                <tr>
                <td><?=$support_hour->support_detail;?></td>
                <td><?=$support_hour->sp_hour;?></td>
                </tr>

             <?php    $sp_hour += $support_hour->sp_hour;
            } ?>
                
           <tr>
           <td style="text-align:center;"><b>รวมชั่วโมงในการปฏิบัติหน้าที่</b></td>
           <td><b><?=$sp_hour;?></b></td>
           </tr>

           </table>


           <?php $dev_hour = 0; ?>

         <br><b>งานพัฒนาคุณภาพการจัดการศึกษาของสถานศึกษา</b><br>
              <table style="width:100%;border-collapse: collapse;" border="1">
                    <tr>
                    <td><b>งานพัฒนาคุณภาพการจัดการศึกษาของสถานศึกษา</b></td>
                    <td><b>ชั่วโมง/สับดาห์</b></td>
                    </tr>                    
           <?php foreach ($develop_hour as $develop_hour) { ?>
               <tr>
                  <td><?=$develop_hour->develops;?></td>
                  <td><?=$develop_hour->dev_hour;?></td>
                </tr>
                <?php $dev_hour += $develop_hour->dev_hour; } ?>
               <tr>
                 <td style="text-align:center;"><b>รวมชั่วโมงในการปฏิบัติหน้าที่</b></td>
                 <td><b><?=$dev_hour;?></b></td>
               </tr>
              </table>


           <?php $res_hour = 0; ?>

            <br><b>งานตอบสนองนโยบายและจุดเน้น</b><br>
            <table style="width:100%;border-collapse: collapse;" border="1">
              <tr>
                 <td><b>งานตอบสนองนโยบายและจุดเน้น</b></td>
                 <td><b>ชั่วโมง/สับดาห์</b></td>
              </tr>
              <?php
            foreach ($response_hour as $response_hour) { ?>

                <tr>
                   <td><?=$response_hour->response;?></td>
                   <td><?=$response_hour->res_hour;?></td>
                </tr>
               <?php $res_hour += $response_hour->res_hour; } ?>
            <tr>
            <td style="text-align:center;"><b>รวมชั่วโมงในการปฏิบัติหน้าที่</b></td>
            <td><b><?=$res_hour;?></b></td>
            </tr>
            </table>



            <br><b>การอบรมและพัฒนาตัวเอง</b><br>
                    <table style="width:100%;border-collapse: collapse;" border="1">
                    <tr>
                    <td><b>หัวข้อในการอบรม</b></td>
                    <td><b>วันเริ่มต้น</b></td>
                    <td><b>วันสิ้นสุด</b></td>
                    <td><b>จำนวนชั่วโมง</b></td>
                    <td><b>หน่วยงานที่จัด</b></td>
                    </tr>
                    <?php
            foreach ($train as $train) { ?>

                <tr>
                      <td><?=$train->train;?></td>
                      <td><?=$train->train_hour;?></td>
                      <td><?=$train->start_date;?></td>
                      <td><?=$train->end_date;?></td>
                      <td><?=$train->agency;?></td>
                 </tr>
            <?php } ?>

            </table>


           <br><b>สื่อการเรียนรู้และนวัตกรรม</b><br>

           <ul>

           <?php foreach ($inno as $inno) { ?>
                <li><?=$inno->innovation;?></li>
           <?php } ?>
 
            </ul>

            <br><b>ประเภทห้องเรียนที่จัดการเรียนรู้</b><br>
    </div>
</html>