<?php
if(isset($_POST["getName"]))
{
    $Todelete=$_POST["getName"];
    $Servername="localhost";
    $Dbusername="root";
    $Dbpassword="";
    $Dbname="shop";
    $connection=new mysqli($Servername,$Dbusername,$Dbpassword,$Dbname);
    $Sql="DELETE FROM `products` WHERE `Name`='$Todelete'";
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