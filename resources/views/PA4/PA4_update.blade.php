@extends('layouts.app')    
@section('content')



<div class="container-fluid" id="container-fluid">


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
                
                <table style="width:100%;">
                    <tr>
                        <td style="text-align: left;"><span class="text_blue"><b>ประเด็นท้าทาย</b></span> </td>
                        <td style="text-align:right;">
                            <a style="font-size: 16pt;border: 1px solid #d3d6d8;" class="btn btn-default" href="/PA4doc/{{$issue->id}}">
                                <il style="font-size: 18pt;" class="fa fa-print"></il> พิมพ์เอกสาร
                            </a>
                        </td>
                    </tr>
                </table>
                
                
                
            </div>
            <div class="row" id="block" >


                <div class="col col-lg-12 col-md-12 col-sm-12">
                    <label style="margin-left:20px;"><b><li class="fa fa-angle-double-right" style="margin-right:10px;"></li>ประเด็นท้าทาย เรื่อง</b></label>

                    <input type="hidden" id="hdnid" name="hdnid" value="{{$issue->id}}">
                    <div id="ele_issue" class="display_none">
                         <div style="text-align: right;padding: 0.3em;">
                            <a class="btn btn-primary" onclick="pa4_update_field('issue');" style="margin-right: 10px;">save</a>
                        <a class="btn btn-primary" onclick="hide_ele('issue');">cancel</a>
                        </div>
                        <input type="text" id="txtissue" name="txtissue" value="{{$issue->issue}}"  required>
                    </div>
                    <div id="text_issue" class="display_block">
                        {{$issue->issue}}
                    </div>
                </div>
                <div class="col col-lg-12 col-md-12 col-sm-12">
                    <label style="margin-left:20px;"><b><li class="fa fa-angle-double-right" style="margin-right:10px;"></li>1. สภาพปัญหาของผู้เรียนและการจัดการเรียนรู้</b></label>

                    <div id="ele_detail_1" class="display_none">
                        <div style="text-align: right;padding: 0.3em;">
                            <a class="btn btn-primary" onclick="pa4_update_field('detail_1');" style="margin-right: 10px;">save</a>
                        <a class="btn btn-primary" onclick="hide_ele('detail_1');">cancel</a>
                        </div>
                        <textarea id="txtdetail_1" name="txtdetail_1" required>{{$issue->detail_1}}</textarea>
                    
                    </div>
                    <div id="text_detail_1" class="display_block">
                        {!! $issue->detail_1 !!} 
                    </div>



                </div>
                <div class="col col-lg-12 col-md-12 col-sm-12">
                    <label style="margin-left:20px;"><b><li class="fa fa-angle-double-right" style="margin-right:10px;"></li>2. วิธีการดำเนินการให้บรรลุผล</b></label>

                    <div id="ele_detail_2" class="display_none">
                      <div style="text-align: right;padding: 0.3em;">
                            <a class="btn btn-primary" onclick="pa4_update_field('detail_2');" style="margin-right: 10px;">save</a>
                        <a class="btn btn-primary" onclick="hide_ele('detail_2');">cancel</a>
                      </div>   
                        <textarea id="txtdetail_2" name="txtdetail_2" required>{{$issue->detail_2}}</textarea>
                    </div>
                    <div id="text_detail_2" class="display_block">
                        {!! $issue->detail_2 !!} 
                    </div>
                </div>
                <div class="col col-lg-12 col-md-12 col-sm-12">
                    <label style="margin-left:20px;"><b><li class="fa fa-angle-double-right" style="margin-right:10px;"></li> 3. ผลลัพธ์การพัฒนาที่คาดหวัง </b></label>
                    <br>&emsp;&emsp;<label>3.1 เชิงปริมาณ</label>


                    <div id="ele_detail_3" class="display_none">
                         <div style="text-align: right;padding: 0.3em;">
                            <a class="btn btn-primary" onclick="pa4_update_field('detail_3');" style="margin-right: 10px;">save</a>
                        <a class="btn btn-primary" onclick="hide_ele('detail_3');">cancel</a>
                        </div>
                        <textarea id="txtdetail_3" name="txtdetail_3"  required>{{$issue->detail_3}}</textarea>
                    </div>
                    <div id="text_detail_3" class="display_block">
                        {!! $issue->detail_3 !!} 
                    </div>


                    &emsp;&emsp;<label>3.2 เชิงคุณภาพ</label>

                    <div id="ele_detail_4" class="display_none">
                         <div style="text-align: right;padding: 0.3em;">
                            <a class="btn btn-primary" onclick="pa4_update_field('detail_4');" style="margin-right: 10px;">save</a>
                        <a class="btn btn-primary" onclick="hide_ele('detail_4');">cancel</a>
                        </div>
                        <textarea id="txtdetail_4" name="txtdetail_4" required>{{$issue->detail_4}}</textarea>
                    </div>
                    <div id="text_detail_4" class="display_block">
                        {!! $issue->detail_4 !!} 
                    </div>


                </div>
            </div>
        </div>
</div>

@endsection