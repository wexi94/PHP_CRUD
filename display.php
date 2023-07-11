<?php

include 'connect.php';
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CRUD Operations</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
    <button type="submit" name="submit" class="btn btn-primary my-5"><a href="user.php" class="text-light">Add User</a></button>
    <table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Mobile</th>
      <th scope="col">Password</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
  <?php 
  $sql="SELECT * FROM crud";
  $result=mysqli_query($conn,$sql);
  if($result){
    while($row=mysqli_fetch_assoc($result)){
        $id=$row['ID'];
        $name=$row['Name'];
        $email=$row['Email'];
        $mobile=$row['Mobile'];
        $password=$row['Password'];
        echo '<tr>
                <th scope="row">'.$id.'</th>
                <td>'.$name.'</td>
                <td>'.$email.'</td>
                <td>'.$mobile.'</td>
                <td>'.$password.'</td>
                <td>
                    <button class="btn btn-primary"><a  class="text-light" href="update.php?updateid='.$id.'">Update</a></button>
                    <button class="btn btn-danger"><a  class="text-light" href="delete.php?deleteid='.$id.'">Delete</a></button>
                </td>              
            </tr>';
    }
  } 
  ?>
  <tbody>
  
    </tbody>
</table>




    </div>
  </body>
</html>