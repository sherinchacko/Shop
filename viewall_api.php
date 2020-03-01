<?php

    $r=array(); 

    $Servername="localhost";
    $Dbusername="root";
    $Dbpassword="";
    $Dbname="shop";
    $connection=new mysqli($Servername,$Dbusername,$Dbpassword,$Dbname);
    $Sql="SELECT `Name`,`Description`, `Price` FROM `products`";
    $result=$connection->query($Sql);
    if($result->num_rows>0)
    {
        while($row=$result->fetch_assoc())
        {
            $r["data"][]=$row;
        }
        echo json_encode($r);
    }

?>