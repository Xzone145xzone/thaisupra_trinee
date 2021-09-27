$(document).ready(function () {
    $("#select-search").select2();
    $("#frm_pa_1_1").validate();



});

var edu = 1;
var edu_string = 'tr_edu_';
function add_edu() {

    $("#tbl_edu").append('<tr id="tr_edu_' + edu + '">\n\
    <td style="width:20%;">\n\
    <select class="form-control" id="txtedu_types[]" name="txtedu_types[]" required>\n\
    <option value="">-ระดับการศึกษา-</option>\n\
    <option value="ป.6">ป.6</option>\n\
    <option value="ม.6">ม.6</option>\n\
    <option value="ประกาศนียบัตรวิชาชีพ">ประกาศนียบัตรวิชาชีพ</option>\n\
    <option value="ประกาศนียบัตรวิชาชั้นสูง">ประกาศนียบัตรวิชาชั้นสูง</option>\n\
    <option value="ประกาศนียบัตรวิชาชีพเทคนิค">ประกาศนียบัตรวิชาชีพเทคนิค</option>\n\
    <option value="ปริญญาตรี">ปริญญาตรี</option>\n\
    <option value="ปริญญาโท">ปริญญาโท</option>\n\
    <option value="ปริญญาเอก">ปริญญาเอก</option>\n\
    </select>\n\
    </td>\n\
    <td><input type="text" class="form-control" id="txtfaculty[]" name="txtfaculty[]" required></td>\n\
    <td><input type="text" class="form-control" id="txtmajor[]" name="txtmajor[]" required></td>\n\
    <td><input type="text" class="form-control" id="txtschool[]" name="txtschool[]" required></td>\n\
    <td><a class="btn btn-default" onclick="cancel_row(\'' + edu_string + '\',' + edu + ');"><li class="fa fa-trash"></li></a></td>\n\
    </tr>');
    edu++;
}

function add_edu_edit() {

    $("#tbl_edu").append('<tr id="tr_edu_' + edu + '">\n\
    <td>\n\
    <select class="form-control" id="txtiedu_type" name="txtiedu_type[' + edu + ']" required>\n\
    <option value="">-ระดับการศึกษา-</option>\n\
    <option value="ป.6">ป.6</option>\n\
    <option value="ม.6">ม.6</option>\n\
    <option value="ประกาศนียบัตรวิชาชีพ">ประกาศนียบัตรวิชาชีพ</option>\n\
    <option value="ประกาศนียบัตรวิชาชั้นสูง">ประกาศนียบัตรวิชาชั้นสูง</option>\n\
    <option value="ประกาศนียบัตรวิชาชีพเทคนิค">ประกาศนียบัตรวิชาชีพเทคนิค</option>\n\
    <option value="ปริญญาตรี">ปริญญาตรี</option>\n\
    <option value="ปริญญาโท">ปริญญาโท</option>\n\
    <option value="ปริญญาเอก">ปริญญาเอก</option>\n\
    </select>\n\
    </td>\n\
    <td><input type="text" class="form-control" id="txtifaculty" name="txtifaculty[' + edu + ']" required></td>\n\
    <td><input type="text" class="form-control" id="txtimajor" name="txtimajor[' + edu + ']" required></td>\n\
    <td><input type="text" class="form-control" id="txtischool" name="txtischool[' + edu + ']" required></td>\n\
    <td style="text-align: center;">\n\
      <a class="btn_green_small" style="width:55px;" onclick="save_edu_row(' + edu + ');">save</a>\n\
      <a class="btn_green_small" onclick="cancel_row(\'' + edu_string + '\',' + edu + ');">cancel</a>\n\
    </td>\n\
    </tr>');
    edu++;
}

function save_edu_row(rowid) {


    var _token = $('meta[name="csrf-token"]').attr('content');
    var schools = $("[name='txtischool[" + rowid + "]'").val();
    var facultys = $("[name='txtifaculty[" + rowid + "]'").val();
    var majors = $("[name='txtimajor[" + rowid + "]'").val();
    var edu_types = $("[name='txtiedu_type[" + rowid + "]'").val();

    if ((!(schools)) || (!(facultys)) || (!(majors)) || (!(edu_types))) {
        showinputmodal();
    } else {


        $.ajax({
            url: "/PA_1_insert_edu",
            type: "POST",
            data: {
                school: schools,
                faculty: facultys,
                major: majors,
                edu_type: edu_types,
                _token: _token
            },
            success: function (data) {
                window.location.reload();
            }
        });
    }
}



function update_field(fields) {


    var _token = $('meta[name="csrf-token"]').attr('content');
    var values = $("#txt" + fields).val();
    var ids = $("#hdnid").val();

    
    
    if ((!(values))) {
         return false; 
    }else{
     
        if((fields=="datestart")||(fields=="datebegin")||(fields=="dateacademic"))
        {
           var data = convertdate(values);
           setval_immediate(data);  
        }else{        
           setval_immediate(values);
        }
        
        $.ajax({
            url: "/PA_1_update_field",
            type: "POST",
            data: {
                field: fields,
                value: values,
                id: ids,
                _token: _token
            },
            success: function (data) {
          
                hide_immediate(fields); 
            }
        });
    }
}




function update_edu_field(ids, rowids, fields) {

    var _token = $('meta[name="csrf-token"]').attr('content');
    var values = $("[name='txt" + fields + "[" + rowids + "]'").val();
    
   

    if ((!(values))) {
     return; 
    }else {
       setval_immediate(values);  
        $.ajax({
            url: "/PA_1_update_edu",
            type: "POST",
            data: {
                id: ids,
                field: fields,
                value: values,
                _token: _token
            },
            success: function (data) {
               //setval_immediate(values);
               hide_immediate(fields+"_"+rowids);   
            }
        });
    }
}





function delete_edu_row(ids) {

    var _token = $('meta[name="csrf-token"]').attr('content');
    $.ajax({
        url: "/PA_1_delete_edu",
        type: "POST",
        data: {
            id: ids,
            _token: _token
        },
        success: function (data) {
            window.location.reload();
        }
    });


}