$(document).ready(function () {


$("#txtissue").keyup(function(){
pa4_update_field('issue');
});


    $('#txtidetail_1').summernote({
        height: 200,
    });
    
     $('#txtidetail_2').summernote({
        height: 200,
    });
    
     $('#txtidetail_3').summernote({
        height: 200,
    });
    
     $('#txtidetail_4').summernote({
        height: 200,
    });


    $('#txtdetail_1').summernote({
        height: 200,
//        callbacks: {
//            onChange: function (e) {
//                pa4_update_field('detail_1');
//            }
//        }
    });

    $('#txtdetail_2').summernote({
        height: 200,
//        callbacks: {
//            onChange: function (e) {
//                pa4_update_field('detail_2');
//            }
//        }
    });

    $('#txtdetail_3').summernote({
        height: 200,
//        callbacks: {
//            onChange: function (e) {
//                pa4_update_field('detail_3');
//            }
//        }
    });

    $('#txtdetail_4').summernote({
        height: 200,
//        callbacks: {
//           onChange: function (e) {
//                pa4_update_field('detail_4');
//            }
//        }
    });
    
    
    $('#text_issue').click(function(){
     show_ele('issue');
    });
    
    
    $('#text_detail_1').click(function(){
     show_ele('detail_1');
    });
    
      $('#text_detail_2').click(function(){
     show_ele('detail_2');
    });
    
      $('#text_detail_3').click(function(){
     show_ele('detail_3');
    });
    
      $('#text_detail_4').click(function(){
     show_ele('detail_4');
    });
    
});



function pa4_update_field(fields) {

    var _token = $('meta[name="csrf-token"]').attr('content');
    var values = $("#txt" + fields).val();
    var ids = $("#hdnid").val();

    $.ajax({
        url: "/PA4_update_field",
        type: "POST",
        data: {
            field: fields,
            value: values,
            id: ids,
            _token: _token
        },
        success: function (data) {
            window.location.reload();
        }
    });
}