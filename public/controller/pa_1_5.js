
var inno =1;
var inno_str="inno_row_";
function add_innovation(){
    
    $("#div_innovation").append('<div id="inno_row_'+inno+'" class="inno">\n\
      <table style="width:100%;">\n\
      <tr>\n\
      <td style="width:90%;"><textarea class="form-control" id="txt_inno" name="txt_inno[]" required></textarea>\n\</td>\n\
      <td style="width:10%;text-align:center;">\n\
      <a class="btn btn-default" style="border:1px solid gray;" onclick="cancel_row_inno(\''+inno_str+'\','+inno+');"><li class="fa fa-trash"></li></a>\n\
      </td>\n\
      </tr>\n\
      </table>\n\
    </div>');
    inno++;
}

 
function add_innovation_edit(){
    
    $("#div_innovation").append('<div id="inno_row_'+inno+'" class="width:90%;border: 1px solid gray;background-color: #ddd;padding: 1em;margin: 20px;">\n\
      <table style="width:100%;">\n\
      <tr>\n\
      <td style="width:90%;"><textarea class="form-control" id="txtiinno" name="txtiinno['+inno+']" required></textarea>\n\</td>\n\
      <td style="width:10%;text-align:center;">\n\
      <a onclick="save_inno_row('+inno+');" class="btn btn-default" style="border:1px solid gray;">sa</a>\n\
      <a class="btn btn-default" style="border:1px solid gray;" onclick="cancel_row(\''+inno_str+'\','+inno+');"><li class="fa fa-trash"></li></a>\n\
      </td>\n\
      </tr>\n\
      </table>\n\
    </div>');
    inno++;
}


 function save_inno_row(rowid){
 
      
        var _token   = $('meta[name="csrf-token"]').attr('content'); 
        var inno = $("[name='txtiinno["+rowid+"]'").val();

        $.ajax({
        url: "/PA_1_insert_inno",
        type:"POST",
         data:{
            inno:inno,
            _token: _token
        },
        success:function(data){
        window.location.reload();
        }
       });
     }
