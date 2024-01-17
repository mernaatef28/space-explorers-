<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="log.css">
    <link rel="icon" href="IMG/icons/solar-system.png">
</head>
<body>
    <!-- merna : we need to retrive el data from the database -->
    <div class="form">
        <h4>Log In</h4>
       
        <div class="login"> <!--  fitching el data from the database table user -->
            <form method="post" action="" class="login">
                <input type="text" placeholder="Username" name="user_name" required="">  <!-- user_name-->
            <input type="password" placeholder="Password" name="user_password" required =""> <!-- user_password -->
            <button type="submit"  name="submit" value="Login">Log In</button>
        </div>
        <div class="suggests">
            <div class="remember">
                <input type="checkbox" checked>
                <span>Remember Me</span>
            </div>
            <div class="forgot">
                <a href="Reg.php">Register</a>
            </div>
        </div>
        </form>
    </div>
  
</body>

</html>
<?php 	
	
    if(isset($_POST['submit']) and $_POST['submit'] == 'Login')	
    {
    
    include 'connection.php';
    $user_name=$_POST['user_name'];
    $user_password=$_POST['user_password'];
   	 
    $query="SELECT * FROM `user` WHERE `user_username`= '$user_name' and `user_password`= '$user_password'";
    $sql=mysqli_query($con,$query);
    if($sql->num_rows>0)
    {
    session_start();	
    $_SESSION['username']= $user_name;
    
    ?>
    <script type="text/javascript">
    alert("Logged in successfully");
    
    </script>
    <?php	
    header("location:home.php");
    }
    else
    {
        ?>
        <?php
        if(isset($_POST['submit']) and $_POST['submit'] == 'Login')	
        {
        
        include 'connection.php';
        $admin_username=$_POST['user_name'];
        $admin_password=$_POST['user_password'];
        
        $query="SELECT * FROM `admin` WHERE `admin_username`= '$admin_username' and `admin_password`='$admin_password'";
        $sql=mysqli_query($con,$query);
        if($sql->num_rows>0)
        {
        session_start();	
        $_SESSION['username']= $admin_username;
        
        ?>
        <script type="text/javascript">
        alert("Logged in successfully");
        
        </script>
        <?php	
        header("location:admin\cpanel.php");
        }
        else
        {
        ?>
        
        <script type="text/javascript">
        alert("the username and password not found try again");
        
        </script>
        
        <?php
        }

        }	
    }
}
    ?>
