<html>

    <div class="panel">
        <center><b>ข้อตกลงในการพัฒนางานสำหรับครู
                <br>(Performance Agreement)</b></center>




        <br><b>ส่วนที่  1  ข้อมูลผู้จัดทำข้อตกลงในการพัฒนางาน</b>
        <br><br><u><b>ข้อมูลทั่วไป</b></u>
        <br><br><table style="width:90%;" border="0"> 


            <?php foreach ($uProfile as $uProfile) { ?>
                <tr><td style="width:30%;">ชื่อ-สกุล</td>
                    <td><?= $uProfile->firstname; ?> <?= $uProfile->lastname; ?></td>
                </tr>
                <tr><td>ตำแหน่ง</td>
                    <td><?= $uProfile->position; ?></td>
                </tr>
                <tr><td>กลุ่มสาระการเรียนรู้</td>
                    <td><?= $uProfile->major; ?></td>
                </tr>
                <tr><td>สัญชาติ </td>
                    <td><?= $uProfile->national; ?></td>
                </tr>
                <tr><td>เชื้อชาติ </td>
                    <td><?= $uProfile->race; ?></td>
                </tr>
                <tr><td>ศาสนา </td>
                    <td><?= $uProfile->religion; ?></td>
                </tr>
                <tr><td>ที่อยู่ </td>
                    <td><?= $uProfile->address; ?></td>
                </tr></table>
            <br>


            <b><u>ประวัติการทำงาน</u></b>
            <br><table style="width:90%;" border="0">
                <tr>
                    <td style="width:30%">วันที่เริ่มรับราชการ</td>
                    <td><?=datethai($uProfile->datestart);?></td>
                </tr>
                <tr>
                    <td style="width:30%">วันที่บรรจุ</td>
                    <td><?=datethai($uProfile->datebegin);?></td>
                </tr>
                <tr>
                    <td style="width:30%">วิทยฐานะ</td>
                    <td><?= $uProfile->academic; ?></td>
                </tr>
                <tr>
                    <td>วันที่ดำรงค์ตำแหน่ง</td>
                    <td><?= $uProfile->dateacademic; ?></td>
                </tr>
                <tr>
                    <td>เงินเดือน</td>
                    <td><?= $uProfile->salary; ?></td>
                </tr>
                <tr>
                    <td>สังกัด</td>
                    <td><?= $uProfile->school_department; ?></td>
                </tr>
                <tr>
                    <td>โรงเรียน</td>
                    <td><?= $uProfile->school; ?>/</td>
                </tr>
            </table>


        <?php } ?>


            <br><b><u>ประวัติการศึกษา</u></b>
        <table style="width:100%;" border="0">
            <tr>
                <td><b>วุฒิ</b></td>
                <td><b>คณะ</b></td>
                <td><b>สาขา</b></td>
                <td><b>สถานศึกษา</b></td>
            </tr>

            <?php foreach ($uEducation as $uEducation) { ?>    

                <tr>
                    <td><?php echo $uEducation->edu_type; ?></td>
                    <td><?php echo $uEducation->faculty; ?></td>
                    <td><?php echo $uEducation->major; ?></td>
                    <td><?php echo $uEducation->school; ?></td>
                </tr>
            <?php } ?> 
        </table> <br>


    </div>

</html>