    function check(i, j, k){

            for (z = 1; z <= 5; z++){
            //$("#chk_"+i+"_"+j+"_"+z).attr('checked', false);
            $("#ele_" + i + "_" + j + "_" + z).empty();
            }

            if ($("#chk_" + i + "_" + j + "_" + k).is(':checked')){
            $("#chk_" + i + "_" + j + "_" + k).attr('checked', false);
            $("#ele_" + i + "_" + j + "_" + k).empty();
            } else{
            $("#ele_" + i + "_" + j + "_" + k).append("&#10003;");
            $("#chk_" + i + "_" + j + "_" + k).attr('checked', true);
            }
            }