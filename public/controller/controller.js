

$(document).ready(function () {

    $("#container-fluid").dblclick(function () {
        hide_last();
    });
});

var lastfield = "";
var val_immediate = "";

function show_ele(ele) {
    
    
    
    if (lastfield != "") {
        hide_ele(lastfield);
    }

    val_immediate = $("#txt_"+ele).val();
    
    hide_immediate(lastfield);
    $("#ele_" + ele).fadeIn();
    $("#text_" + ele).hide();
    lastfield = ele;
}


function hide_ele(ele) {
    $("#ele_" + ele).hide();
    $("#text_" + ele).fadeIn();
}
function setval_immediate(val){
    
    val_immediate = val;
}


function hide_immediate(ele) {

    $("#text_"+ele).html(val_immediate);  
    $("#ele_" + ele).hide();
    $("#text_" + ele).fadeIn();
}

function show_text(ele) {
    $("#text_" + ele).show();
}

function hide_last() {
      
      if(val_immediate!=""){
      $("#text_"+lastfield).html(val_immediate);  
      }
      
      $("#ele_" + lastfield).hide();
      $("#text_" + lastfield).show();
}


function cancel_row(ele, row) {
    
    $("#"+ele+row).fadeOut("normal", function() {
        $(this).remove();
    });
    
    //$("#"+ele+row).remove().fadeOut();
}


function show_ele_array(ele, array) {
    
    if (lastfield != "") {
        hide_ele_array(lastfield);
    }
    
    val_immediate = $("#txt"+ele+"_"+array).val();
    
    $("#ele_" + ele + "_" + array).fadeIn();
    $("#text_" + ele + "_" + array).hide();
    lastfield = ele + "_" + array;

}



function hide_ele_array(ele) {
    $("#ele_" + ele).hide();
    $("#text_" + ele).fadeIn();

}


function showinputmodal(){
      $('#myModal').modal('show'); 
             $('#span_modal').text('กรุณาระบุข้อมูลให้ครบถ้วน');
                return false;
}

function convertdate(dates){
    var data = new Date(dates);
    var d = data.getDate();
    var m = data.getMonth();
    var y = data.getFullYear();
    var thmonth = new Array ("มกราคม","กุมภาพันธ์","มีนาคม",
"เมษายน","พฤษภาคม","มิถุนายน", "กรกฎาคม","สิงหาคม","กันยายน",
"ตุลาคม","พฤศจิกายน","ธันวาคม");

    return d+" "+thmonth[m]+" "+(y+543);
}

function month(){
    
}


