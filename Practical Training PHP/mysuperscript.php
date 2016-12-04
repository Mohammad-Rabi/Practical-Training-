<?php
session_start();//start session
?>
<?php
echo "haya";
include 'connection.php';


if(isset($_POST['stud_reg'])){
    $namest_r = $_POST["namer"];
    $emailst_r = $_POST['emailr'];
    $passst_r = $_POST['passr'];
    $specst_r = $_POST['specr'];
    $agest_r = $_POST['ager'];
    $regNo_r =$_POST['regNor'];
    $cityst_r = $_POST['cityr'];

    $check_email_query = "select * from student_reg WHERE email_studr='$emailst_r'";
    $res = $con->query($check_email_query);
    if ($res and $res->num_rows > 0) {


        echo "<script>alert('Email $emailst_r is already exist in our database, Please try another one!')</script>";

        exit();
        header("Location: http://localhost/reg_1.html#toregister");
    }
//insert the user into the database.
    $insert_studr = "insert into student_reg (name_studr,email_studr,pass_studr,spec_studr,age_studr,regNo_stur,city_studr) VALUE ('$namest_r','$emailst_r','$passst_r','$specst_r','$agest_r','$regNo_r','$cityst_r')";
    $res = $con->query($insert_studr);

    if ($res === TRUE) {

        echo "<script>alert('This student $namest_r sign up successfully')</script>";


        header("Location: http://localhost/reg_1.html#tologin");
        die();
    } else {
        echo "Error: " . $res . "<br>" . $con->error;

    }
    echo $insert_studr;
}
if(isset($_POST['stud_log'])){
    $emailst_l = $_POST['emaill'];
    $passst_l = $_POST['password'];


    $check_student="select * from student_reg WHERE email_studr='$emailst_l'AND pass_studr='$passst_l'";
    $res = $con->query($check_student);
    if ($res and $res->num_rows > 0) {
        $insert_studl = "insert into student_log(email_studl,pass_studl) VALUE ('$emailst_l','$passst_l')";
        $res = $con->query($insert_studl);

        if($res == TRUE){
            $_SESSION['emaill']=$emailst_l;
            header('Location: st_home.html');

        }
        echo "<script>alert('Email or password is incorrect!')</script>";


    }


}

if(isset($_POST['sup_reg'])){
      echo "sup";
    $namesup_r = $_POST['usernameregsup'];
    $emailsup_r = $_POST['emailregsup'];
    $passsup_r = $_POST['passregsup'];

    $check_email_sup= "select * from supervisor_reg WHERE email_supr='$emailsup_r'";
    $res = $con->query($check_email_sup);
    if ($res and $res->num_rows > 0) {
        echo "<script>alert('Email $emailsup_r is already exist in our database, Please try another one!')</script>";
        exit();

    }
    $insert_supr = "insert into supervisor_reg (name_supr,email_supr,pass_supr) VALUE ('$namesup_r','$emailsup_r','$passsup_r')";
    $res = $con->query($insert_supr);

    if ($res === TRUE) {
        echo "<script>alert('This supervisor $namesup_r sign up successfully')</script>";
        header("Location: http://localhost/reg_1.html#tologsup");
        die();
    } else {
        echo "Error: " . $res . "<br>" . $con->error;

    }


}
if(isset($_POST['sup_log'])){
    $emailsup_l = $_POST['emaillogsup'];
    $passsup_l = $_POST['passlogsup'];

    $check_supervisor="select * from supervisor_reg WHERE email_supr='$emailsup_l'AND pass_supr='$passsup_l'";
    $res = $con->query($check_supervisor);
    if ($res and $res->num_rows > 0) {
        $insert_supl = "insert into supervisor_log(email_supl,pass_supl) VALUE ('$emailsup_l','$passsup_l')";
        $res = $con->query($insert_supl);

        if($res == TRUE){
            $_SESSION['emaillogsup']=$emailsup_l;
            header('Location: supervisor_home.php');
        }
        echo "<script>alert('Email or password is incorrect!')</script>";


    }

    echo "yay";
}




if(isset($_POST['com_reg'])){
    $namecom_r = $_POST['usernameregcom'];
    $emailcom_r = $_POST['emailregcom'];
    $passcom_r = $_POST['passregcom'];
    $loctioncom_r = $_POST['locationregcom'];

    $check_email_com = "select * from company_reg WHERE email_comr='$emailcom_r'";
    $res = $con->query($check_email_com);
    if ($res and $res->num_rows > 0) {
        echo "<script>alert('Email $emailcom_r is already exist in our database, Please try another one!')</script>";
        exit();

    }
    $insert_comr = "insert into company_reg (name_comr,email_comr,pass_comr,location_comr) VALUE ('$namecom_r','$emailcom_r','$passcom_r','$loctioncom_r')";
    $res = $con->query($insert_comr);

    if ($res === TRUE) {
        echo "<script>alert('This supervisor $namecom_r sign up successfully')</script>";
        header("Location: http://localhost/reg_1.html#tologcom");
        die();
    } else {
        echo "Error: " . $res . "<br>" . $con->error;

    }


}
    if(isset($_POST['com_log'])){
    $emailcom_l = $_POST['emaillogcom'];
    $passcom_l = $_POST['passlogcom'];

    $check_company="select * from company_reg WHERE email_comr='$emailcom_l'AND pass_comr='$passcom_l'";
    $res = $con->query($check_company);
    if ($res and $res->num_rows > 0) {
        $insert_coml = "insert into company_log(email_coml,pass_coml) VALUE ('$emailcom_l','$passcom_l')";
        $res = $con->query($insert_coml);

        if($res == TRUE){
            $_SESSION['emaillogcom']=$emailcom_l;
            header('Location: company_info.php');
        }
        echo "<script>alert('Email or password is incorrect!')</script>";


    }
}











/**
 * Created by PhpStorm.
 * User: Haya
 * Date: 11/5/2016
 * Time: 11:40 AM
 */
?>













