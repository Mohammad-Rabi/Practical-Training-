<?php
include 'connection.php';

if(isset($_POST['save_infoComp'])) {
    $n[2]="hh";

    $n= $_POST['selSpec'];
    $p0 =$n[0];
    $p1 =$n[1];
    $p2 =$n[2];
    echo $p0;
    echo $p1;
    echo $p2;


    $name = $_POST['name'];
    $location = $_POST['locOfComp'];
    $genInfo = $_POST['genInfoOfComp'];
    $image = $_POST['imgOfComp'];
    $fax = $_POST['fax'];
    $phoneNum = $_POST['phoneNum'];
    $email = $_POST['emailc'];









    $insert_compInfo = "insert into comp_info(name_comi,loc_comi,img_comi,des_comi,spec1_comi,spec2_comi,spec3_comi,email_comi,fax_comi,phoneN_comi)VALUE('$name','$location','$image','$genInfo','$p0','$p1','$p2','$fax','$phoneNum','$email')";
    $res = $con->query($insert_compInfo );
    if ($res === TRUE) {

        echo "hyaaa";

    }
    else{
        echo "Error: " . $res . "<br>" . $con->error;
    }







}

?>



