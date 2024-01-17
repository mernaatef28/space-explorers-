<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
.dropbtn {
  background-color: #04AA6D;
  color: white;
  padding: 16px;
  font-size: 16px;
  border: none;
}

.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #blue ;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown-content a:hover {background-color: #ddd;}

.dropdown:hover .dropdown-content {display: block;}

.dropdown:hover .dropbtn {background-color: #3e8e41;}
.dropdown-content{
    width: 200px;
    height: 150px;
    flex-direction: column;
    backdrop-filter: blur(5px);
    border: 1px solid #72582c;
    border-radius: 30px;
    align-items: center;
}
.dropdown-content input ,button {
    margin: 10px;
    padding: 10px 15px;
    border: none;
    outline: none;
    border-radius: 60px;
    font-size: 13px;

}
.dropdown-content input {
    background-color: #ffffff2e;
    color: #fff;
    font-family: poppins;
    letter-spacing: 1px;
    text-indent: 35px;
    background-image: url(IMG/icons/user.png);
    background-repeat: no-repeat;
    background-size: 20px;
    background-position: 15px;
}
.dropdown-content input:nth-child(2) {
    background-image: url(IMG/icons/lock.png);
}
.dropdown-content input::placeholder {
    font-size: 14px;
    color: #c0b4b4;
}
.dropdown-content button {
    background-color: #d38a1c;
    color: #fff;
    font-size: 17px;
    font-family: calibri;
    text-transform: uppercase;
    cursor: pointer;
}
</style>
</head>


<header>
        <h2 class="Space">Space explorers</h2>
        <nav class="navigation">
            <a href="index.php" id="homeLink">Home</a>
            <a href="Service.php">Services</a>
            <a href="team page.php">Contact</a>
            
       
            <!-- <button class="btnlogin-popup" id="loginButton">login</button> -->
        <div class="dropdown">
            <a href="#">Logout</a>
            <div class="dropdown-content">
            <form method="post" action="" >
          	<input type="password" placeholder="passward" name="user_password" required="">  <!-- user_password-->
          
            <button type="submit"  name="submit" value="Logout">Log out</button>
        
            </form>
        </div>

        </nav>
    </header>
    <?php
    
   
    if(isset($_POST['submit']) and $_POST['submit'] == 'Logout')	
    {
     include ('connection.php');
     $user_name=$_SESSION['username'];
     $user_password=$_POST['user_password'];
   	 
    $query="SELECT * FROM `user` WHERE `user_username`= '$user_name' and `user_password`= '$user_password'";
    $sql=mysqli_query($con,$query);
    if($sql->num_rows>0)
    {
      ?>
      
      <script type="text/javascript">
      alert("Logged out successfully");
     
      </script>
      <?php  
    header("location:logout.php");
    exit;
   
    }
  }
    ?>