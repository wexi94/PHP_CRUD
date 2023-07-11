<?php 
include 'connect.php';
$id=$_GET['updateid'];
$sql="SELECT * FROM crud where id=$id";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($result);
$name=$row['Name'];
$email=$row['Email'];
$mobile=$row['Mobile'];
$password=$row['Password'];
if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $mobile=$_POST['mobile'];
    $password=$_POST['password'];

    $sql="UPDATE crud SET id=$id,name='$name',email='$email',mobile='$mobile',password='$password' WHERE id=$id";
    $result=mysqli_query($conn,$sql);
    if($result){
       //echo " Data Updated Successfully";
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
                <input type="text" class="form-control"  placeholder="Enter Your Name" name="name" autocomplete="off" value="<?php echo "$name" ?>">
            </div>
            <br>
            <div class="form-group">
                <label>Email</label>
                <input type="text" class="form-control"  placeholder="Enter Your Email" name="email" autocomplete="off" value="<?php echo "$email" ?>">
            </div>
            <br>
            <div class="form-group">
                <label>Mobile</label>
                <input type="text" class="form-control"  placeholder="Enter Your Mobile Number" name="mobile" autocomplete="off" value="<?php echo "$mobile" ?>">
            </div>
            <br>
            <div class="form-group">
                <label>Password</label>
                <input type="text" class="form-control"  placeholder="Enter Your Password" name="password" autocomplete="off" value="<?php echo "$password" ?>">
            </div>
            <br>
            <button type="submit" name="submit" class="btn btn-primary">Update</button>
        </form>
    </div>

  </body>
</html>