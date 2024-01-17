<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <title>Document</title>
    <link rel="stylesheet" href="..\homee.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
<style>
    body {
    background-image: url(wallpaperflare.com_wallpaper.jpg);
    background-size: cover;
    height: 97vh;
    display: flex;
    justify-content: center;
    align-items: center;
}
.container{
    backdrop-filter: blur(5px);
    border: 1px solid #72582c;
}
.jumbotron{
    backdrop-filter: blur(5px);
    background-color: transparent;
    
}
.card{
    backdrop-filter: blur(5px);
    background-color: transparent;
    color: white;
}  

</style>
</head>

<?php include 'header.php';?>

<body>
    <div class="container">
        <div class="jumbotron" style="backdrop-filter: blur(5px)">
        <div class="card ">
        <div class="card-header">
           <h5 > user list </h5>
        </div>
        <div class="card-body">
            <h5 class="card-title">you can update the data of the user here </h5>
            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
            <div class="row">
                <div class="col-md-12 text-right ">
                <a href="add.php" class="btn btn-success btn-mx-2 badge-pill " style="width: 80px; "> ADD </a> 

                </div>
            </div>
            <table class="table table-hover table-bordered table-dark">
                    <caption>List of users</caption>
                    <thead>
                        <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Email</th>
                        <th scope="col">Username</th>
                        <th scope="col" >Password</th>
                        <th scope="col" >state </th>
                        <th scope="col" class="text-right">actions </th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            include ('connection.php');   
                            $query= "SELECT * FROM `user`" ;
                            $sql = mysqli_query($con , $query) ;
                            if ($sql->num_rows>0)
                            {
                                 foreach($sql as $sqlitems)
                                 {
                                    ?>
                                    <tr>
                                    <th scope="row">1</th>
                                    <td><?= $sqlitems['user_id'] ?></td>
                                    <td><?= $sqlitems['user_email'] ?></td>
                                    <td><?= $sqlitems['user_username'] ?></td>
                                    <td><?= $sqlitems['user_password'] ?></td>
                                    <td><?= $sqlitems['user_state']==1 ? 'active' :'banned'?></td>
                                    <td class="text-right">
                                    <a href="edit.php?id=<?= $sqlitems['user_id'] ?>" class="btn btn-primary btn-sm">EDIT</a> 
                                    <a  href="delete.php?id=<?= $sqlitems['user_id'] ?>" class="btn btn-danger btn-sm mx-2">DELETE</a>
                                    </td>
                                    </tr>

                                    <?php
                                 }
                            }
                            else
                            {
                                ?>
                                <tr>
                                    <td colspan="7">no record found </td>
                                </tr>
                                <?php
                            }
                        ?>
                        
        
                    </tbody>
                 </table>
                </div>
             </div>
        </div>
    </div>
</div>
</body>
</html>