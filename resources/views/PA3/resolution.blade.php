<html>
    <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
        <link href="{{ asset('assets/css/app.css') }}" rel="stylesheet">
    </head>
    <body>

        <div class="container">
            <div class="row">

                <div class="col-md-6 col-lg-6 col-sm-12" style="margin: 0 auto;border: 1px solid green;padding: 1em;">

                    <table class="table_page" style="width: 100%;color:#1050A2;">
                        <tr>
                            <th style="width: 70%;padding-left: 100px;">หัวข้อ</th>
                            <th style="text-align: center;">ระดับคุณภาพ</th>
                        </tr>
                        @for($i=0;$i<=4;$i++)
                        <tr>
                            <td>การจัดการตนเอง (self management)</td>
                            <td style="text-align: center;color: green;">ปานกลาง</td>
                        </tr>
                        @endfor
                    </table>
                </div>        

            </div>
           
                <div class="row" style="margin-top: 60px;">
                     <div class="table-responsive">
                    <table style="width:100%;border: 1px solid green;" border='1'>
                        <tr style="height:70px;">
                            <td rowspan="2" style="width:60%;text-align: center;">สมรรถนะสำหรับการศึกษาขั้นพื้นฐาน</td>
                            <td colspan="2" style="width:20%;text-align: center;">ระดับสมรรถนะผู้เรียน</td>
                        </tr>
                        <tr style="height:70px;">
                            <td style="width:20%;text-align: center;">นักเรียนประเมิน</td>
                            <td style="width:20%;text-align: center;">ครูประเมิน</td>
                        </tr>
                        <tr class="tr_header">
                            <th>ด้านการจัดการความรู้</th>
                            <th>3.41</th>
                            <th>4.61</th>
                        </tr>
                        @for($i=0;$i<=5;$i++)
                        <tr>
                            <td style="padding:1em;padding-left: 30px;text-align: left;">1. สร้างหรือพัฒนาหลักสูตร โดยจัดทำรายวิชาและหน่วยการเรียนรู้ให้สอดคล้องกับมาตรฐานการ
                                เรียนรู้ และตัวชี้วัดหรือผลการเรียนรู้ ตามหลักสูตร ให้ผู้เรียนได้พัฒนาสมรรถนะและการเรียน
                                รู้เต็มตามศักยภาพ</td>
                            <td style="text-align:center;">
                                3.50
                            </td>
                            <td style="text-align:center;">
                                4.61
                            </td>
                        </tr>
                        @endfor
                    </table>
                     </div>
                </div>
          
        </div>

    </body>
</html>