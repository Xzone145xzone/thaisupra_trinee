

   train=1;
   train_string = 'tr_train_';
   
   
    function add_train() {
        $("#tbl_train").append('<tr id="tr_train_' + train + '">\n\
        <td style="width:25%;padding:0em;"><input type="text" style="text-align:center;width:90%;" class="form-control" id="txttrain" name="txttrain[]" required></td>\n\
        <td style="padding:0em;width:15%;"><input type="date" style="text-align:center;width:90%;" class="form-control" id="txtstart_date" name="txtstart_date[]"></td>\n\
        <td style="padding:0em;width:15%;"><input type="date" style="text-align:center;width:90%;" class="form-control" id="txtend_date" name="txtend_date[]"></td>\n\
        <td style="width:10%;padding:0em;"><input type="number" style="text-align:center;width:80%;" class="form-control" id="txthour" name="txthour[]" required></td>\n\
        <td style="width:10%;"><input type="text" style="text-align:center;" class="form-control" id="txtagency" name="txtagency[]" required></td>\n\
        <td style="text-align:center;width:20%;">\n\
        <a class="btn btn-default" onclick="cancel_row(\'' + train_string + '\',' + train + ');">\n\
        <li class="fa fa-trash"></li>\n\
        </a></td>\n\
        </tr>');
            train++;
    }



    function add_train_edit() {
        $("#tbl_train").append('<tr id="tr_train_' + train + '">\n\
        <td style="width:25%;padding:0em;"><input type="text" style="text-align:center;width:90%;" class="form-control" id="txttrain" name="txtitrain[' + train + ']" required></td>\n\
        <td style="padding:0em;width:15%;"><input type="date" style="text-align:center;width:90%;" class="form-control" id="txtstart_date" name="txtistart_date[' + train + ']" required></td>\n\
        <td style="padding:0em;width:15%;"><input type="date" style="text-align:center;width:90%;" class="form-control" id="txtend_date" name="txtiend_date[' + train + ']" required></td>\n\
        <td style="width:10%;padding:0em;"><input type="number" style="text-align:center;width:80%;" class="form-control" id="txtihour" name="txtihour[' + train + ']" required></td>\n\
        <td style="width:10%;"><input type="text" style="text-align:center;" class="form-control" id="txtiagency" name="txtiagency[' + train + ']" required></td>\n\
        <td style="text-align:center;width:20%;">\n\
           <a class="btn_green_small" style="width:55px;"  onclick="save_row_train(' + train + ');">save</a>\n\
           <a class="btn_green_small"  onclick="cancel_row(\'' + train_string + '\',' + train + ');">cancel</a>\n\
        </td>\n\
        </tr>');
            train++;
    }





function save_row_train(rowid) {

    var _token = $('meta[name="csrf-token"]').attr('content');
    var start_dates = $("[name='txtistart_date["+rowid+"]'").val();
    var end_dates = $("[name='txtiend_date["+rowid+"]'").val();
    var trains = $("[name='txtitrain["+rowid+"]'").val();
    var train_hour = $("[name='txtihour["+rowid+"]'").val();
    var agencys = $("[name='txtiagency["+rowid+"]'").val();

      if ((!(start_dates)) || (!(end_dates)) || (!(trains)) || (!(train_hour))|| (!(agencys))) {
        showinputmodal();
    } else {

    $.ajax({
        url: "/PA_1_insert_train",
        type: "POST",
        data: {
            start_date: start_dates,
            end_date: end_dates, 
            train: trains,
            train_hour: train_hour,
            agency: agencys,
            _token: _token
        },
        success: function (data) {
            window.location.reload();
        }
    });
    }
}



function delete_row_train(ids) {
 var _token = $('meta[name="csrf-token"]').attr('content');
    $.ajax({
        url: "/PA_1_delete_train",
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



function update_train_field(ids, rowids, fields) {


    var _token = $('meta[name="csrf-token"]').attr('content');
    var values = $("[name='txt" + fields + "[" + rowids + "]'").val();
 if ((!(values))) {
     alert("mp");
         return false; 
    }else{
    $.ajax({
        url: "/PA_1_update_train",
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
