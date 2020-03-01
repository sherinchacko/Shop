<?php
if(isset($_POST["Submit"]))
{
    $UpDescription=$_POST["Description"];
    $UpPrice=$_POST["Price"];
    $Gotname=$_POST["Submit"];

    $Servername="localhost";
    $Dbusername="root";
    $Dbpassword="";
    $Dbname="shop";
    $connection=new mysqli($Servername,$Dbusername,$Dbpassword,$Dbname);
    $Sql="UPDATE `products` SET `Description`='$UpDescription',`Price`=$UpPrice
    WHERE `Name`='$Gotname'";
    $result=$connection->query($Sql);
    if($result===TRUE)
    {
        $r["status"]="success";
    }
    else
    {
        $r["status"]="error";
    }
    echo json_encode($r);
}
?>