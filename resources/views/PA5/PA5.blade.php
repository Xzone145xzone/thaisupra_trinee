                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                   @extends('layouts.app')    
@section('content')

<script src="https://code.jquery.com/jquery-3.5.0.js"></script>
<script>
    $(document).ready(function(){
    loadcover(1)
    });
</script>
<style>

</style>
<div class="container-fluid" style="padding-bottom:100px;">
    <div class="child">
        <div class="page_header">
            <table class="tb_header">
                <tr class="border_bottom">
                    <td colspan="3">
                        <span class="text_blue"><b><u>????????????????????? 5</u> ?????????????????????</b></span>
                    </td>
                    <td colspan="2" style="text-align:right;">

                    </td>
                </tr>
            </table>
        </div>
    </div>

    <div class="row" style="width:100%;height:auto;margin-bottom: 50px;">
       <input type="hidden" style="width: 100px;" id="cover_number" name="cover_number">
        <div class="col-md-9 col-lg-9 col-sm-12" style="float: left;">
            <div id="template-herder-side" class="col-md-12 col-lg-12 col-sm-12">
                <div class="col-md-4 col-lg-4 col-sm-4" style="float: left;">
                   <a id="btn-tem" style="margin-right:5px;float: left;padding: 0.2em;" class="btn btn-default" onclick="loadgraphic();">
                       <il  class="fa fa-file-image-o"></il>??????????????????
                   </a>       
                </div>
                <div class="col-md-4 col-lg-4 col-sm-4" style="float: left;">
                   
                </div>
                <div class="col-md-4 col-lg-4 col-sm-4" style="float: left;text-align:right;">                    
                              
                </div>             
            </div>
            <div id="template-left-side" >
                <div id="output" class="output">
                    ..
                </div>
            </div>
        </div>    
        <div class="col-md-3 col-lg-3 col-sm-12" id="template-right-side">
            @foreach($template as $template)
            <a  onclick="loadcover({{$template->page}});">
                <img src='{{url("/storage/coverpage/$template->coverpage")}}'>
            </a>
            @endforeach
        </div>       
    </div>

</div>

@endsection