                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                   @extends('layouts.app')    
@section('content')
<style type="text/css">

    img {
        border: 1px solid #ddd;
        border-radius: 4px;
        padding: 5px;
        width: 100%;
        margin-top: 10px;
        margin-bottom: 10px;
    }

    img:hover {
        box-shadow: 0 0 2px 1px rgba(0, 140, 186, 0.5);
    }
    
    
    
  .output{

  box-shadow: 5px 10px 8px 10px #888888;
  
  width:100%;height: 1300px;background-color: white;margin:0.5em;padding:1em;
  
  
}
    
</style>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
   
  

});


function loadpage(pages){
     //alert(page);
     //$('#output').empty();
     $('#output').fadeOut('slow');   
    // $('#output').load('{{url("Template1/page'+pages+'")}}');
    $('#output').load('Template1/page'+pages);
        $('#output').fadeIn('slow'); 
}

</script>
<!-- Page content-->
<div class="container-fluid" style="padding-bottom:100px;">
    <div class="child">
        <div class="page_header">
            <table class="tb_header">
                <tr class="border_bottom">
                    <td colspan="3">
                        <span class="text_blue"><b><u>ส่วนที่ 5</u> ภาคผนวก</b></span>
                    </td>
                    <td colspan="2" style="text-align:right;">

                    </td>
                </tr>
            </table>
        </div>
    </div>

    <div class="row" style="width:100%;height:auto;margin-bottom: 50px;">
        
       
       
        <div class="col col-md-9 col-lg-9 col-sm-12" style="float: left;">
                 
            
        <div  style="width: 100%;border: 1px solid #ccc;float: left;padding:1em;height:70px;padding: 1em;background-color:#F2F3F4;">
            <a class="btn btn-default" onclick="loadpage(1);" style="border:1px solid gray;background-color: white;">
                <li class="fa fa-globe"></li>
            </a>
            
            <a class="btn btn-default" onclick="loadpage(2);" style="border:1px solid gray;background-color: white;">
                <li class="fa fa-globe"></li>
            </a>
            
            <a class="btn btn-default" onclick="loadpage(3);" style="border:1px solid gray;background-color: white;">
                <li class="fa fa-globe"></li>
            </a>
            
            <a class="btn btn-default" onclick="loadpage(4);" style="border:1px solid gray;background-color: white;">
                <li class="fa fa-globe"></li>
            </a>
            
            <a class="btn btn-default" onclick="loadpage(5);" style="border:1px solid gray;background-color: white;">
                <li class="fa fa-globe"></li>
            </a>
            
            <a style="font-size: 16pt;border: 1px solid #d3d6d8;width: 200px;" class="btn btn-default" href="{{url('document')}}">
            <il style="font-size: 18pt;" class="fa fa-print"></il> พิมพ์เอกสาร
            </a>

        </div>
            <div style="width: 100%;border: 1px solid #ccc;float: left;padding:1em;height: 1200px;background-color:#cccccc;overflow: scroll;padding:3em;">
       
            <div id="output" class="output">
              ..
            </div>
       
        </div>
        </div>    
        <div class="col col-md-3 col-lg-3 col-sm-12" style="border: 1px solid #ccc;float: left;padding: 0.5em;height: 1270px;overflow: scroll;">
            @for($i=2;$i<=10;$i++)
            <a target="_blank">
                <img src="{{asset('template/coverpage/image/2.png')}}" alt="Paris">
            </a>
            @endfor
        </div>
    </div>

</div>

@endsection