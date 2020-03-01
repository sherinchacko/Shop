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
      <a class="nav-link" href="#Product.php">Entry</a>
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
<form method="POST">
  <table class="table">
       <tr>
       <td>
       Name:
       </td>
       <td>
       <input type="text" class="form-control" name="getName">
       </td>
      </tr>
      <tr>
      <td>
      Description:
      </td>
      <td>
      <input type="text" class="form-control" name="getDes">
      </td>
      </tr>
      <tr>
      <td>
      Price:
      </td>
      <td>
      <input type="text" class="form-control" name="getPrice">
      </td>
      </tr>
      <tr>
      <td>
      </td>
      <td>
      <Button type="Submit" class="btn btn-success" name="submit">
      Submit
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
    $Name=$_POST["getName"];
    $Des=$_POST["getDes"];
    $Price=$_POST["getPrice"];

    $Servername="localhost";
    $Dbusername="root";
    $Dbpassword="";
    $Dbname="shop";
    $connection= new mysqli($Servername,$Dbusername,$Dbpassword,$Dbname);
    $Sql="INSERT INTO `Products`(`Name`, `Description`, `Price`) VALUES
    ('$Name','$Des',$Price)";
    $result=$connection->query($Sql);
    if($result===TRUE)
    {
        echo "success";
    }
    else
    {
        echo $connection->error;
    }

  }
?>