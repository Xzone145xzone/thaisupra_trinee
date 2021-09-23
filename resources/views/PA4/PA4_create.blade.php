@extends('layouts.app')    
@section('content')
<!-- Page content-->


<div class="container-fluid" style="padding-bottom:100px;">
    <form method="post" action="{{url('PA4_insert')}}">
        @csrf
    <div class="child">
        <div class="page_header">
            <table class="tb_header">
                <tr class="border_bottom">
                    <td colspan="3">
                        <span class="text_blue"><b><u>ส่วนที่ 4</u> แนวทางการพัฒนาและผลการพัฒนาผลลัพธ์การเรียนรู้ของผู้เรียนตามประเด็นท้าทาย</b></span>
                    </td>
                    <td colspan="2" style="text-align:right;">
                        <span class="text_blue"><b>ประเด็นท้าทาย</b></span>
                    </td>
                </tr>

            </table>
        </div>
        <div class="page_header">
            <span class="text_blue"><b>ประเด็นท้าทาย</b></span>
        </div>
        <div class="row" id="block" >

          
            <div class="col-lg-12 col-md-12 col-sm-12">
                <label style="margin-left:20px;"><b><li class="fa fa-angle-double-right" style="margin-right:10px;"></li>ประเด็นท้าทาย เรื่อง</b></label>
                <input type="text" class="form-control" id="txtiissue" name="txtissue" required>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12">
                <label style="margin-left:20px;">
                    <b><li class="fa fa-angle-double-right" style="margin-right:10px;"></li>1. สภาพปัญหาของผู้เรียนและการจัดการเรียนรู้</b>
                </label>
                <textarea id="txtidetail_1" name="txtdetail_1" required></textarea>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12">
                <label style="margin-left:20px;">
                    <b><li class="fa fa-angle-double-right" style="margin-right:10px;"></li>2. วิธีการดำเนินการให้บรรลุผล</b>
                </label>
                <textarea id="txtidetail_2" name="txtdetail_2" required></textarea>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12">
                <label style="margin-left:20px;"><b><li class="fa fa-angle-double-right" style="margin-right:10px;"></li> 3. ผลลัพธ์การพัฒนาที่คาดหวัง </b></label>
                <br>&emsp;&emsp;&emsp;&emsp;<label>3.1 เชิงปริมาณ</label>
                <textarea id="txtidetail_3" name="txtdetail_3" required></textarea>
                <br>&emsp;&emsp;&emsp;&emsp;<label>3.2 เชิงคุณภาพ</label>
                <textarea id="txtidetail_4" name="txtdetail_4" required></textarea>
            </div>
        </div>
    </div>
        
    <center>
        <button type="submit" class="btn_green"><li style="margin-right:10px;font-size: 18pt;" class="fa fa-arrow-circle-right "></li> บันทึกประเด็นท้าทาย </button> 
    </center>
    </form>
</div>

@endsection