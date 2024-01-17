<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sign Up</title>
    <link rel="stylesheet" href="Reg.css">
    <link rel="icon" href="IMG/icons/solar-system.png">
</head>
<body>
        <!-- merna : we need to send el data to the database -->
    <div class="form" >
    <form method="post" action=" " class="form">
        <h4>Sign Up</h4>
        <div class="login"> <!-- table name : user -->
            <input type="email" name="user_email" value="" size="22"  placeholder="E-Mail"required> <!-- user_email-->
            <input type="password" name="user_password" value="" size="22"  placeholder="Password" required> <!-- user_password-->
            <input type="text" name="user_name"  value="" size="22"  placeholder="Username"required ><!-- user_name-->
            <a href="log.php">you have acount?</a>
            <button type="submit" name="submit" value="Create Account">Create Account</button>
        </div>
    </form>
    </div>
  
</body>

</html>
<?php 	
if(@$_POST['submit'] and $_POST['submit']=='Create Account' )
{
include("connection.php");
$user_email=$_POST['user_email'];
$user_name=$_POST['user_name'];
$user_password=$_POST['user_password'];


$q1="INSERT INTO `user`(`user_id`, `user_email`, `user_username`, `user_password`) VALUES ('','$user_email','$user_name','$user_password')";

if(mysqli_query($con,$q1))
{
?>
<script type="text/javascript">
alert(" account has been successfully registered");
</script>
<?php
header("location:log.php");
}

else
{
?>
<script type="text/javascript">
alert("account hasn't been registered");	
</script>	
<?php
}
}?>