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

    $location =$_POST['locOfComp'];
    $genInfo = $_POST['genInfoOfComp'];
    $image = $_POST['imgOfComp'];

    $insert_compInfo = "insert into comp_info(location,image,description,spec1,spec2,spec3)VALUE('$location','$image','$genInfo','$p0','$p1','$p2')";
    $res = $con->query($insert_compInfo );
    if ($res === TRUE) {

        echo "hyaaa";

    }
    else{
        echo "Error: " . $res . "<br>" . $con->error;
    }







}

?>



