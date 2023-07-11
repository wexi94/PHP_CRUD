<?php 

include 'connect.php';
if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $mobile=$_POST['mobile'];
    $password=$_POST['password'];

    $sql="INSERT INTO crud (Name,Email,Mobile,Password) VALUES('$name','$email','$mobile','$password')";
    $result=mysqli_query($conn,$sql);
    if($result){
       // echo "Data Inserted";
       header('location:display.php');   
    } else {    
        echo "Data Not Inserted";

    }
}
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>CRUD Operations</title>
  </head>
  <body>
    <div class="container my-5">
        <form method ="post">
            <div class="form-group">
                <label>Name</label>
                <input type="text" class="form-control"  placeholder="Enter Your Name" name="name" autocomplete="off">
            </div>
            <br>
            <div class="form-group">
                <label>Email</label>
                <input type="text" class="form-control"  placeholder="Enter Your Email" name="email" autocomplete="off">
            </div>
            <br>
            <div class="form-group">
                <label>Mobile</label>
                <input type="text" class="form-control"  placeholder="Enter Your Mobile Number" name="mobile" autocomplete="off">
            </div>
            <br>
            <div class="form-group">
                <label>Password</label>
                <input type="text" class="form-control"  placeholder="Enter Your Password" name="password" autocomplete="off">
            </div>
            <br>
            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

  </body>
</html>