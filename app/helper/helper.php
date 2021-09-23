<?php

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\DB;
use App\PA;
use App\user_edu_type;
use App\User_Profile;
use App\user_education;
use App\pa_schedule_hour;
use App\pa_support_hour;
use App\pa_develop_hour;
use App\pa_response_hour;
use App\pa_standard;
use App\pa_train_hour;
use App\pa_innovation;
use App\pa_learn_class;
use App\group_member;
use App\group_learn;
use App\teacher_academic;
use App\group_department;

function PA_year() {

    $year = DB::table('PA_year')->where('active', 1)->first();
    return $year->year;
}

function uId() {
    return session('uID');
}

function uAuth() {
    return session('uAuth');
}

function uFname() {
    return session('uFname');
}

function uLname() {
    return session('uLname');
}

function uLevel() {
    return session('uLevel');
}

function uAddress() {
    return session('uAddress');
}

function edu_nm($id) {

    $edu_nm = user_edu_type::find($id);
    return $edu_nm->name;
}

function group_department($id) {

    $department;
    if ($id == 'all') {
        $department = group_department::all();
    } else {
        $department = group_department::find($id);
    }
    return $department;
}

function standard($id) {
    $standard;
    if ($id == 'all') {
        $standard = pa_standard::where('root', 0)
                        ->orderBy('no', 'asc')->get();
    } else {
        $standard = pa_standard::where('root', 0)
                        ->where('id', $id)->first();
    }
    return $standard;
}

function group_learn($id) {
    $learn;
    if ($id == 'all') {
        $learn = group_learn::all();
    } else {
        $learn = group_learn::find($id);
    }
    return $learn;
}

function group_member($id) {
    $member;
    if ($id == 'all') {
        $member = group_member::all();
    } else {
        $member = group_member::find($id);
    }


    return $member;
}

function teacher_academic($id) {
    $academic;
    if ($id == 'all') {
        $academic = teacher_academic::all();
    } else {
        $academic = teacher_academic::find($id);
    }


    return $academic;
}

function datethai($date) {

    $date = explode("-", $date);

    $day = $date[2];
    $month = $date[1];
    $year = $date[0] + 543;

    return $day."  ". month($month)."  ".$year;
}

function month($months) {
    $month = "";
    switch ($months) {
        case '01' : $month = "มกราคม";
            break;
        case '02' : $month = "กุมภาพันธ์";
            break;
        case '03' : $month = "มีนาคม";
            break;
        case '04' : $month = "เมษายน";
            break;
        case '05' : $month = "พฤษภาคม";
            break;
        case '06' : $month = "มิถุนายน";
            break;
        case '07' : $month = "กรกฎาคม";
            break;
        case '08' : $month = "สิงหาคม";
            break;
        case '09' : $month = "กันยายน";
            break;
        case '10' : $month = "ตุลาคม";
            break;
        case '11' : $month = "พฤศจิกายน";
            break;
        case '12' : $month = "ธันวาคม";
            break;
    }
    return $month;
}

function calage($birthdate){
  $today = date('d-m-Y');
  
    list($bday,$bmonth,$byear) = explode('-',$birthdate);
    list($tday,$tmonth,$tyear) = explode('-',$today);

    if($byear < 1970){
      $yearad = 1970 - $byear;
      $byear = 1970;
    }else{
      $yearad = 0;
    }

    $mbirth = mktime(0,0,0, $bmonth,$bday,$byear);
    $mtoday = mktime(0,0,0, $tmonth,$tday,$tyear);

    $mage = ($mtoday - $mbirth);
    $wyear = (date('Y', $mage)-1970+$yearad);
    $wmonth = (date('m', $mage)-1);
    $wday = (date('d', $mage)-1);

    $ystr = ($wyear > 1 ? " Years" : " Year");
    $mstr = ($wmonth > 1 ? " Months" : " Month");
    $dstr = ($wday > 1 ? " Days" : " Days");

    if($wyear > 0 && $wmonth > 0 && $wday > 0) {
      $agestr = $wyear.$ystr." ".$wmonth.$mstr." ".$wday.$dstr;
     }else if($wyear == 0 && $wmonth == 0 && $wday > 0) {
       $agestr = $wday.$dstr;
     }else if($wyear > 0 && $wmonth > 0 && $wday == 0) {
       $agestr = $wyear.$ystr." ".$wmonth.$mstr;
     }else if($wyear == 0 && $wmonth > 0 && $wday > 0) {
       $agestr = $wmonth.$mstr." ".$wday.$dstr;
     }else if($wyear > 0 && $wmonth == 0 && $wday > 0) {
       $agestr = $wyear.$ystr." ".$wday.$dstr;
     }else if($wyear == 0 && $wmonth > 0 && $wday == 0) {
       $agestr = $wmonth.$mstr;
     }else {
       $agestr ="";
     }

      return $agestr;
    }
 
 //$birthday = “07/08/1985?;
 //print “วันเกิด  $birthday <BR>”;
 //print “อายุของคุณคือ “.calage($birthday);
   //      }