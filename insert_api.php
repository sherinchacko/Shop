<?php
if(isset($_POST["getName"]))
  {
    $Name=$_POST["getName"];
    $Des=$_POST["getDes"];
    $Price=$_POST["getPrice"];

    $Servername="localhost";
    $Dbusername="root";
    $Dbpassword="";
    $Dbname="Shop";
    $connection= new mysqli($Servername,$Dbusername,$Dbpassword,$Dbname);
    $Sql="INSERT INTO `Products`(`Name`, `Description`, `Price`) VALUES
    ('$Name','$Des',$Price)";
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