<?php
include 'db.php';
include './admin_auth.php';


if(isset($_GET['deleteid'])){
    $id=$_GET['deleteid'];

    $sql="DELETE FROM js WHERE id=$id";
    $res=mysqli_query($conn,$sql);
    
    if ($res) {
            header("location:js_upload_index.php");
    }else{
        echo 'Something Went Wrong';
    }
}
?>