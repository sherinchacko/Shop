<?php
$r=array();
if(isset($_POST["getName"]))
{
    $getName=$_POST["getName"];

    $Servername="localhost";
    $Dbusername="root";
    $Dbpassword="";
    $Dbname="shop";
    $connection=new mysqli($Servername,$Dbusername,$Dbpassword,$Dbname);
    $Sql="SELECT  `Description`, `Price` FROM `products` WHERE `Name`='$getName'";
    $result=$connection->query($Sql);
    if($result->num_rows>0)
    {
        while($row=$result->fetch_assoc())
        {
            $r["data"][]=$row;
        }
        echo json_encode($r);
    }
    else{
        echo "There is no data for this name!!!!!!!! ";
    }
    
}
?>