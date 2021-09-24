


$(document).ready(function () {
    $("#frm_pa_1_2").validate();
});

var sche = 1;
var supp = 1;
var devlp = 1;
var response = 1;

var sche_string = 'tr_sche_';
var supp_string = 'tr_supp_';
var devlp_string = 'tr_devlp_'; 
var response_string = 'tr_response_'; 



/////////////////////////////////////

function add_schedule() {
    
   
    

    $("#tbl_schedule").before('<tr id="tr_sche_' + sche + '">\n\
                    <td><select class="form-control" id="txtgroup_learn" name="txtgroup_learn[]" required style="text-align:center;">\n\
           <option value="กลุ่มสาระการเรียนรู้ภาษาไทย">กลุ่มสาระการเรียนรู้ภาษาไทย</option>\n\
           <option value="กลุ่มสาระการเรียนรู้คณิตศาสตร์">กลุ่มสาระการเรียนรู้คณิตศาสตร์</option>\n\
           <option value="กลุ่มสาระการเรียนรู้วิทยาศาสตร์">กลุ่มสาระการเรียนรู้วิทยาศาสตร์</option>\n\
           <option value="กลุ่มสาระการเรียนรู้สังคมศึกษา ศาสนา และวัฒนธรรม">กลุ่มสาระการเรียนรู้สังคมศึกษา ศาสนา และวัฒนธรรม</option>\n\
           <option value="กลุ่มสาระการเรียนรู้สุขศึกษาและพลศึกษา">กลุ่มสาระการเรียนรู้สุขศึกษาและพลศึกษา</option>\n\
           <option value="กลุ่มสาระการเรียนรู้ศิลปะ">กลุ่มสาระการเรียนรู้ศิลปะ</option>\n\
           <option value="กลุ่มสาระการเรียนรู้การงานอาชีพและเทคโนโลยี">กลุ่มสาระการเรียนรู้การงานอาชีพและเทคโนโลยี</option>\n\
           <option value="กลุ่มสาระการเรียนรู้ภาษาต่างประเทศ">กลุ่มสาระการเรียนรู้ภาษาต่างประเทศ</option>\n\
           <option value="กิจกรรมพัฒนาผู้เรียน">กิจกรรมพัฒนาผู้เรียน</option>\n\
           </select></td>\n\
        <td><input type="text" class="form-control" id="txtsubject" name="txtsubject[]" required style="text-align:center;"></td>\n\
        <td><input type="text" class="form-control" id="txtgrade" name="txtgrade[]" required style="text-align:center;"></td>\n\
        <td><input type="number" class="form-control" id="txthour_sch" name="txthour_sch[]" required style="text-align:center;"></td>\n\
        <td style="text-align:center;">\n\
        <a class="btn btn-default" onclick="cancel_row(\'' + sche_string + '\',' + sche + ');"><li class="fa fa-trash"></li></a>\n\
        </td>\n\
        </tr>');

    sche++;
}


function add_support() {

    $("#tbl_support").before('<tr id="tr_supp_' + supp + '">\n\
        <td><input type="text" class="form-control" id="txtsupport" name="txtsupport[]" required style="text-align:center;"></td>\n\
        <td><input type="number" class="form-control" id="txthour_sp" name="txthour_sp[]" required style="text-align:center;"></td>\n\
        <td style="text-align:center;">\n\
        <a class="btn btn-default" onclick="cancel_row(\'' + supp_string + '\',' + supp + ');"><li class="fa fa-trash"></li></a>\n\
        </td>\n\
        </tr>');

    supp++;
}


function add_develop() {

    $("#tbl_develop").before('<tr id="tr_devlp_' + devlp + '">\n\
        <td><input type="text" class="form-control" id="txtdevelop" name="txtdevelop[]" required style="text-align:center;"></td>\n\
        <td><input type="number" class="form-control" id="txthour_develop" name="txthour_develop[]" required style="text-align:center;"></td>\n\
        <td style="text-align:center;">\n\
        <a class="btn btn-default" onclick="cancel_row(\'' + devlp_string + '\',' + devlp + ');"><li class="fa fa-trash"></li></a>\n\
        </td>\n\
        </tr>');

    devlp++;
}


function add_response() {

    $("#tbl_response").before('<tr id="tr_response_' + response + '">\n\
        <td><input type="text" class="form-control" id="txtresponse" name="txtresponse[]" required style="text-align:center;"></td>\n\
        <td><input type="number" class="form-control" id="txthour_response" name="txthour_response[]" required style="text-align:center;"></td>\n\
        <td style="text-align:center;">\n\
        <a class="btn btn-default" onclick="cancel_row(\'' + response_string + '\',' + response + ');"><li class="fa fa-trash"></li></a>\n\
        </td>\n\
        </tr>');

    response++;
}


//////////////////////////////////////////////////////////////////



function add_schedule_edit() {

    $("#tbl_schedule").before('<tr id="tr_sche_' + sche + '">\n\
        <td><select class="form-control" id="txtgroup_learn" name="txtigroup_learn[' + sche + ']" required style="text-align:center;">\n\
           <option value="กลุ่มสาระการเรียนรู้ภาษาไทย">กลุ่มสาระการเรียนรู้ภาษาไทย</option>\n\
           <option value="กลุ่มสาระการเรียนรู้คณิตศาสตร์">กลุ่มสาระการเรียนรู้คณิตศาสตร์</option>\n\
           <option value="กลุ่มสาระการเรียนรู้วิทยาศาสตร์">กลุ่มสาระการเรียนรู้วิทยาศาสตร์</option>\n\
           <option value="กลุ่มสาระการเรียนรู้สังคมศึกษา ศาสนา และวัฒนธรรม">กลุ่มสาระการเรียนรู้สังคมศึกษา ศาสนา และวัฒนธรรม</option>\n\
           <option value="กลุ่มสาระการเรียนรู้สุขศึกษาและพลศึกษา">กลุ่มสาระการเรียนรู้สุขศึกษาและพลศึกษา</option>\n\
           <option value="กลุ่มสาระการเรียนรู้ศิลปะ">กลุ่มสาระการเรียนรู้ศิลปะ</option>\n\
           <option value="กลุ่มสาระการเรียนรู้การงานอาชีพและเทคโนโลยี">กลุ่มสาระการเรียนรู้การงานอาชีพและเทคโนโลยี</option>\n\
           <option value="กลุ่มสาระการเรียนรู้ภาษาต่างประเทศ">กลุ่มสาระการเรียนรู้ภาษาต่างประเทศ</option>\n\
           <option value="กิจกรรมพัฒนาผู้เรียน">กิจกรรมพัฒนาผู้เรียน</option>\n\
           </select></td>\n\
        <td><input type="text" class="form-control" id="txtsubject" name="txtisubject[' + sche + ']" required style="text-align:center;"></td>\n\
        <td><input type="text" class="form-control" id="txtgrade" name="txtigrade[' + sche + ']" required style="text-align:center;"></td>\n\
        <td><input type="number" class="form-control" id="txthour_sch" name="txtihour_sch[' + sche + ']" required style="text-align:center;"></td>\n\
        <td style="text-align:center;">\n\
           <a class="btn_green_small" style="width:55px;" onclick="save_row_sch(' + sche + ');">save</a>\n\
           <a class="btn_green_small"  onclick="cancel_row(\'' + sche_string + '\',' + sche + ');">cancel</a>\n\
        </td>\n\
        </tr>');

    sche++;
}


function add_support_edit() {

    $("#tbl_support").before('<tr id="tr_supp_' + supp + '">\n\
        <td><input type="text" class="form-control" id="txtsupport" name="txtisupport[' + supp + ']" required style="text-align:center;"></td>\n\
        <td><input type="number" class="form-control" id="txthour_sp" name="txtihour_sp[' + supp + ']" required style="text-align:center;"></td>\n\
        <td style="text-align:center;">\n\
         <a class="btn_green_small" style="width:55px;" onclick="save_row_sp(' + supp + ');">save</a>\n\
         <a class="btn_green_small" onclick="cancel_row(\'' + supp_string + '\',' + supp + ');">cancel</a>\n\
        </td>\n\
        </tr>');

    supp++;
}


function add_develop_edit() {

    $("#tbl_develop").before('<tr id="tr_devlp_' + devlp + '">\n\
        <td><input type="text" class="form-control" id="txtidevelop" name="txtidevelop[' + devlp + ']" required style="text-align:center;"></td>\n\
        <td><input type="number" class="form-control" id="txtihour_develop" name="txtihour_develop[' + devlp + ']" required style="text-align:center;"></td>\n\
        <td style="text-align:center;">\n\
         <a class="btn_green_small" style="width:55px;" onclick="save_row_dev(' + devlp + ');">save</a>\n\
         <a class="btn_green_small" onclick="cancel_row(\'' + devlp_string + '\',' + devlp + ');">cancel</a>\n\
        </td>\n\
        </tr>');

    devlp++;
}


function add_response_edit() {

    $("#tbl_response").before('<tr id="tr_response_' + response + '">\n\
        <td><input type="text" class="form-control" id="txtiresponse" name="txtiresponse[' + response + ']" required style="text-align:center;"></td>\n\
        <td><input type="number" class="form-control" id="txtihour_response" name="txtihour_response[' + response + ']" required style="text-align:center;"></td>\n\
        <td style="text-align:center;">\n\
          <a class="btn_green_small" style="width:55px;" onclick="save_row_response(' + response + ');">save</a>\n\
         <a class="btn_green_small" onclick="cancel_row(\'' + response_string + '\',' + response + ');">cancel</a>\n\
        </td>\n\
        </tr>');

    response++;
}
/////////////////////////////////////////
function delete_row_sch(ids) {
      var _token = $('meta[name="csrf-token"]').attr('content');
    $.ajax({
        url: "/PA_1_delete_sch",
        type: "POST",
        data: {
            id: ids,
            _token: _token
        },
        success: function (data) {
           // alert(data);
            window.location.reload();
        }
    });
}


function save_row_sch(rowid) {

    var _token = $('meta[name="csrf-token"]').attr('content');
    var group_learns = $("[name='txtigroup_learn[" + rowid + "]'").val();
    var subjects = $("[name='txtisubject[" + rowid + "]'").val();
    var grades = $("[name='txtigrade[" + rowid + "]'").val();
    var sch_hours = $("[name='txtihour_sch[" + rowid + "]'").val();


    if((!(subjects))||(!(grades))||(!(sch_hours))){
             showinputmodal();
        }else{

    $.ajax({
        url: "/PA_1_insert_sch",
        type: "POST",
        data: {
            group_learn : group_learns,
            subject: subjects,
            grade: grades,
            sch_hour: sch_hours,
            _token: _token
        },
        success: function (data) {
            window.location.reload();
        }
    });
        }
}


function update_sch_field(ids, rowids, fields) {


    var _token = $('meta[name="csrf-token"]').attr('content');
    var values = $("[name='txt" + fields + "[" + rowids + "]'").val();
    // alert(values);   
    if((!(values))){
          return; 
    }else{
        
    $.ajax({
        url: "/PA_1_update_sch",
        type: "POST",
        data: {
            id: ids,
            field: fields,
            value: values,
            _token: _token
        },
        success: function (data) {
            window.location.reload();
        }
     });
    }
}

////////////////////////////////////////////

function save_row_sp(rowid) {

    var _token = $('meta[name="csrf-token"]').attr('content');
    var supports = $("[name='txtisupport[" + rowid + "]'").val();
    var sp_hours = $("[name='txtihour_sp[" + rowid + "]'").val();
  
    if((!(supports))||(!(sp_hours))){
          showinputmodal();
        }else{

    $.ajax({
        url: "/PA_1_insert_sp",
        type: "POST",
        data: {
            support: supports,
            sp_hour: sp_hours,
            _token: _token
        },
        success: function (data) {
            window.location.reload();
        }
    });
        }
}



function delete_row_sp(ids) {
 var _token = $('meta[name="csrf-token"]').attr('content');
    $.ajax({
        url: "/PA_1_delete_sp",
        type: "POST",
        data: {
            id: ids,
            _token: _token
        },
        success: function (data) {
           // alert(data);
            window.location.reload();
        }
    });
}



function update_sp_field(ids, rowids, fields) {


    var _token = $('meta[name="csrf-token"]').attr('content');
    var values = $("[name='txt" + fields + "[" + rowids + "]'").val();

    if((!(values))){
           return; 
    }else{

    $.ajax({
        url: "/PA_1_update_sp",
        type: "POST",
        data: {
            id: ids,
            field: fields,
            value: values,
            _token: _token
        },
        success: function (data) {
            window.location.reload();
        }
    });
    }
}


/////////////////////////////////

function save_row_dev(rowid) {

    var _token = $('meta[name="csrf-token"]').attr('content');
    var devlops = $("[name='txtidevelop[" + rowid + "]'").val();
    var dev_hours = $("[name='txtihour_develop[" + rowid + "]'").val();

     if((!(devlops))||(!(dev_hours))){
             showinputmodal();
        }else{

    $.ajax({
        url: "/PA_1_insert_dev",
        type: "POST",
        data: {
            develop: devlops,
            dev_hour: dev_hours,
            _token: _token
        },
        success: function (data) {
            window.location.reload();
        }
    });
        }
}

function delete_row_dev(ids) {
     var _token = $('meta[name="csrf-token"]').attr('content');
    $.ajax({
        url: "/PA_1_delete_dev",
        type: "POST",
        data: {
            id: ids,
            _token: _token
        },
        success: function (data) {
           // alert(data);
            window.location.reload();
        }
    });
}


function update_dev_field(ids, rowids, fields) {


    var _token = $('meta[name="csrf-token"]').attr('content');
    var values = $("[name='txt" + fields + "[" + rowids + "]'").val();

    if((!(values))){
       return; 
    }else{

    $.ajax({
        url: "/PA_1_update_dev",
        type: "POST",
        data: {
            id: ids,
            field: fields,
            value: values,
            _token: _token
        },
        success: function (data) {
            window.location.reload();
        }
    });
    }
}

//////////////////////////////////////////


function save_row_response(rowid) {

    var _token = $('meta[name="csrf-token"]').attr('content');
    var responses = $("[name='txtiresponse[" + rowid + "]'").val();
    var res_hours = $("[name='txtihour_response[" + rowid + "]'").val();

    if((!(responses))||(!(res_hours))){
            showinputmodal();
        }else{

    $.ajax({
        url: "/PA_1_insert_res",
        type: "POST",
        data: {
            response: responses,
            hour_response: res_hours,
            _token: _token
        },
        success: function (data) {
            window.location.reload();
        }
    });
        }
}

function delete_row_res(ids) {
     var _token = $('meta[name="csrf-token"]').attr('content');
    $.ajax({
        url: "/PA_1_delete_res",
        type: "POST",
        data: {
            id: ids,
            _token: _token
        },
        success: function (data) {
           // alert(data);
            window.location.reload();
        }
    });
}


function update_res_field(ids, rowids, fields) {


    var _token = $('meta[name="csrf-token"]').attr('content');
    var values = $("[name='txt" + fields + "[" + rowids + "]'").val();

    if((!(values))){
             return; 
    }else{

    $.ajax({
        url: "/PA_1_update_res",
        type: "POST",
        data: {
            id: ids,
            field: fields,
            value: values,
            _token: _token
        },
        success: function (data) {
            window.location.reload();
        }
    });
    }
}


