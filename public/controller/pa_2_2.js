 $(function () {
        $("#sortable").sortable();
        $("#sortable").disableSelection();
    });

    var no = 2;
    var htm = "";

    function add_Item() {

        var htm = "<li class='ui-state-default' id='item_" + no + "'>\n\
             <table style='width:100%;' border='0'>\n\
             <tr>\n\
             <td style='text-align: left;'><input type='text' class='form-control' value='" + no + "'  id='txtno' name='txtno[]' style='width:10%;text-align: center;'></td>\n\
             <td style='text-align: right;'><a class='btn'><li class='fa fa-trash'></li></a></td>\n\
             </tr>\n\
             </table>\n\
             <div class='row'>\n\
             <div class='col col-lg-5 col-md-5 col-sm-12'>\n\
             <span class='ui-icon ui-icon-arrowthick-2-n-s'></span>\n\
             <label>มาตรฐานตำแหน่งที่จะพัฒนา</label>\n\
             </div>\n\
             <div class='col col-lg-6 col-md-6 col-sm-12'>\n\
             <select class='form-control' id='txtstandard' name='txtstandard[]'>\n\
             <option value='ด้านการจัดการเรียนรู้'>ด้านการจัดการเรียนรู้</option>\n\
             <option value='ด้านการส่งเสริมและสนับสนุนการจัดการเรียนรู้'>ด้านการส่งเสริมและสนับสนุนการจัดการเรียนรู้</option>\n\
             <option value='ด้านการพัฒนาตนเองและวิชาชีพ'>ด้านการพัฒนาตนเองและวิชาชีพ</option>\n\
             <option value='วินัย คุณธรรม จริยธรรม จรรยาบรรณ วิชาขีพ'>วินัย คุณธรรม จริยธรรม จรรยาบรรณ วิชาขีพ</option>\n\
             </select>\n\
             </div>\n\
             </div>\n\
             <div class='row'>\n\
             <div class='col col-lg-5 col-md-5 col-sm-12'>\n\
             <br><span class='ui-icon ui-icon-arrowthick-2-n-s'></span>\n\
             <label>ระยะเวลา</label>\n\
             </div>\n\
             <div class='col col-lg-6 col-md-6 col-sm-12'>\n\
             <table border='0'>\n\
             <tr>\n\
             <td><b>เริ่มต้น</b> <input type='date' id='txtdatestart' name='txtdatestart[]' class='form-control'></td>\n\
             <td>-</td>\n\
             <td><b>สิ้นสุด</b> <input type='date' id='txtdateend' name='txtdateend[]' class='form-control'></td>\n\
             </tr>\n\
             </table>\n\
             </div>\n\
             </div>\n\
             <div class='row'>\n\
             <div class='col col-lg-5 col-md-5 col-sm-12'>\n\
             <span class='ui-icon ui-icon-arrowthick-2-n-s'></span><label>การของบประมาณ</label>\n\
             </div>\n\
             <div class='col col-lg-6 col-md-6 col-sm-12'>\n\
             <input type='text' id='txtbudget' name='txtbudget[]' class='form-control'>\n\
             </div\n\
             </div>\n\
             <div class='row'>\n\
             <div class='col col-lg-5 col-md-5 col-sm-12'>\n\
             <span class='ui-icon ui-icon-arrowthick-2-n-s'></span><label>ประโยชน์ที่คาดว่าจะได้รับ</label>\n\
             </div>\n\
             <div class='col col-lg-6 col-md-6 col-sm-12' style='padding-left:25px;'>\n\
                <textarea class='form-control' id='txtbenefit' name='txtbenefit[]' style='width:100%;'></textarea>\n\
             </div>\n\
             </div>\n\
             </li>";
        $("#sortable").append(htm);
        no++;
    }
    
    
    function update_develop_field(id,field,detail){
        alert(id);
         alert(field);
          alert(detail);
    }