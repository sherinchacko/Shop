<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<nav class="navbar navbar-expand-sm bg-dark navbar-dark"> 
     <ul class="navbar-nav">
    <li class="nav-item active">
      <a class="nav-link" href="Product.php">Entry</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="search.php">Search</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="update.php">Update</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="delete.php">Delete</a>
    </li>
  </ul>
</nav>
<center>Welcome To The Update Page....</center>
<form method="POST">
<table class="table">
<tr>
<td>
Enter the Name:
</td>
<td>
<input type="text" class="form-control" name="getName">
</td>
</tr>
<tr>
<td>
</td>
<td>
<Button type="submit" class="btn btn-secondary" name="submit">
Get Deatils
</Button>
</td>
</tr>
</table>
</form>
</body>
</html>
<?php
if(isset($_POST["submit"]))
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
            $getDes=$row["Description"];
            $getPrice=$row["Price"];

            echo"<form method='POST'>
            <table class='table'>
            <tr> <td> Description </td>
            <td> <input type='text' class='form-control' value='$getDes' name='Description'> </td> </tr>
            <tr> <td> Price </td>
            <td> <input type='text' class='form-control' value='$getPrice' name='Price'> </td> </tr>
            <tr> <td> </td> <td> 
            <button type='submit' class='btn btn-primary' name='Submit' value='$getName'> 
            Update </button> </td> </tr>
            </table></form>";
        }
    }
}
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
        echo"success";
    }
    else
    {
        echo "failed";
    }
}
?>