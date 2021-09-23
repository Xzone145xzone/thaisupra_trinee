<?php
   var edu = 1;
    var edu_string = 'tr_edu_';
    function add_edu() {

        $("#tbl_edu").append('<tr id="tr_edu_'+edu+'">\n\
    <td style="width:20%;">\n\
    <select class="form-control" id="txtiedu_type" name="txtiedu_type['+edu+']" required>\n\
    <option value="">----</option>\n\
    <option value="1">ป.6</option>\n\
    <option value="2">ม.6</option>\n\
    <option value="3">ปวช</option>\n\
    <option value="4">ปวส</option>\n\
    <option value="5">ปวn</option>\n\
    <option value="6">ป.ตรี</option>\n\
    <option value="8">ป.โท</option>\n\
    <option value="8">ป.เอก</option>\n\
    </select>\n\
    </td>\n\
    <td><input type="text" class="form-control" id="txtimajor" name="txtimajor['+edu+']" required></td>\n\
    <td><input type="text" class="form-control" id="txtischool" name="txtischool['+edu+']" required></td>\n\
    <td style="text-align: center;">\n\
      <a class="btn btn-info" onclick="save_row('+edu+');">save</a>\n\
      <a class="btn btn-info" onclick="cancel_row(\'' + edu_string + '\',' + edu + ');">cancel</a>\n\
    </td>\n\
    </tr>');
        edu++;
    }
    
     function save_row(rowid){
 
      
        var _token   = $('meta[name="csrf-token"]').attr('content'); 
        var schools = $("[name='txtischool["+rowid+"]'").val();
        var majors = $("[name='txtimajor["+rowid+"]'").val();
        var edu_types = $("[name='txtiedu_type["+rowid+"]'").val();

        $.ajax({
        url: "/PA_1_insert_edu",
        type:"POST",
         data:{
            school:schools,
            major:majors,
            edu_type:edu_types,
            _token: _token
        },
        success:function(data){
        window.location.reload();
        }
       });
     }
     
    
    
    function update_field(fields){
      
     
       var _token   = $('meta[name="csrf-token"]').attr('content'); 
       var  values = $("#txt"+fields).val(); 
       var ids = $("#hdnid").val();
        $.ajax({
        url: "/PA_1_update_field",
        type:"POST",
        data:{
            field:fields,
            value:values,
            id:ids,
          _token: _token
        },
        success:function(data){
         window.location.reload();
        }
       });     
    }
    
    
      function update_edu_field(ids,rowids,fields){
 
      
        var _token   = $('meta[name="csrf-token"]').attr('content'); 
        var  values = $("[name='txt"+fields+"["+rowids+"]'").val();

        $.ajax({
        url: "/PA_1_update_edu",
        type:"POST",
         data:{
            id:ids,
            field:fields,
            value:values,
          _token: _token
        },
        success:function(data){
        window.location.reload();
        }
       });
     }
     
     
     
     
     
     function delete_edu_row(ids){
         alert(ids);
         var _token = $('meta[name="csrf-token"]').attr('content');
       $.ajax({
        url: "/PA_1_delete_edu",
        type:"POST",
         data:{
            id:ids,
          _token: _token
        },
        success:function(data){
         //   alert(data);
        window.location.reload();
        }
       });
 
     
     }