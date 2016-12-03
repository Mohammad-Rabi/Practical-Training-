<?php
include 'connection.php';
if(isset($_POST['submitcv'])){
    $name_cv =$_POST['cv_name'];
    $regno_cv = $_POST['cv_regestrationNo'];
    $collage_cv = $_POST['cv_collage'];
    $speciality_cv = $_POST['cv_speciality'];
    $cumavg_cv = $_POST['cv_cumulativeAvg'];
    $hrs_cv = $_POST['cv_hrs'];
    $phoneno_cv = $_POST['cv_phoneNoArea'];
    $areacode_cv = $_POST['cv_phoneNoPhone'];
    $emailadd_cv = $_POST['cv_emailAddress'];
    $favcom_cv = $_POST['cv_ftcom'];
    $anocom_cv = $_POST['cv_atcom'];
    $upload_cv = $_POST['cv_upload'];
    $note_cv = $_POST['cv_notes'];

    $insert_torder = "insert into pt_order(name_stu,regNo,collage,speciality,cumAvg,hrs_success,phone_no,phone_code,email_add,fav_com,ano_com,upload_file,note,flag_order) VALUE
 ('$name_cv','$regno_cv','$collage_cv','$speciality_cv','$cumavg_cv','$hrs_cv','$phoneno_cv','$areacode_cv','$emailadd_cv','$favcom_cv','
 $anocom_cv','$upload_cv','$note_cv','0')";
    $res = $con->query($insert_torder);
    if($res == TRUE){
        header('Location: st_home.html');
    }
    echo "<script>alert('Somthing is rong !')</script>";







}


echo "hola";
/**
 * Created by PhpStorm.
 * User: Haya
 * Date: 11/11/2016
 * Time: 5:07 PM
 */