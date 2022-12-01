<?php

session_start();

$error="";
if(array_key_exists("submit", $_POST))
{

    include'data1.php';

    if(!$_POST['email']){
        $error[] ="An email address is required";
    }
    if(!$_POST['password']){
        $error[] ="A password is required";
    }
    if($error !=""){
        $error[] ="there are errors";
    }
    else
    {
        //  $you = "SELECT * FROM login first_name";
        $query = "SELECT * FROM minisrer WHERE email = '".mysqli_real_escape_string($link,$_POST['email'])."'";
        $result = mysqli_query($link,$query);
        $row = mysqli_fetch_array($result);
        if(@$row['email'] != $_POST['email'])
        {
            $error = ":There are errors in your form:<br>";
            $error = "Sorry please your Email was not found in our database please try again!!";
        }
        if(isset($row)){
            if($row['password'] == $_POST['password']){
            $name = $row['name'];
            $status = $row['status'];
            $PP = $row['password'];
            $_SESSION['user'] = $name;
            $_SESSION['status'] = $status;
                if($row['status'] == 'User')
                {
                    header("location: file.php");
                }elseif($row['status'] == 'Admin')
                {
                    $_session['password'] = $PP;
                    header("location: files.php");
                    
                }
            
            }else{
                $error = ":There are errors in your form:<br>";
                $error = "Your password is wrong please try again!!";
            }
        }

    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Document</title>
</head>
<style>
    body{
       
       
        background-image: url("assets/4.png");
        background-size: cover ;
        
    }
    img[src='assets/banniere.png']{
        object-fit: cover;
        border-radius: 5px;
    }
</style>
<body>
    <div class="container-fluid">
        <div class="row h-100 align-items-center justify-content-center" style="min-height: 100vh;">
            <div class="col-12 col-sm-8 col-md-6 col-lg-5 col-xl-4">
                <div class="bg-white rounded p-4 p-sm-5 my-4 mx-3">
                    <div class="mb-3 nk rounded" style="display: flex; justify-content:center;">
                        <a href="index.php" class="">
                        <img src="assets/banniere.png" alt="Logo" style="width:378px; height:80px;">
                        </a>
                        <!-- <h3>Sign In</h3> -->
                    </div>
                    <form action="" method="POST">
                        <div class="form-floating mb-3">
                           <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com" name="email">
                                                           <label for="floatingInput">Email address</label>
                        </div>
                        <div class="form-floating mb-4">
                            <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="password">
                            <label for="floatingPassword">Password</label>
                        </div>
                        <div class="d-flex align-items-center justify-content-between mb-4">
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1">Check me out</label>
                            </div>
                            <a href="">Forgot Password</a>
                        </div>
                        <button type="submit" name="submit" class="btn btn-success py-3 w-100 mb-4">Sign In</button>
                        <div class = "error"><?php if ($error!="")
                                {
                                    echo '<div class="alert alert-danger" role="alert">'.$error.'</div>';
                                }?></div>
                    </form>
                    <p class="text-center mb-0">Don't have an Account? <a href="" class="text-danger">Sign Up</a></p>
                </div>
            </div>
        </div>
    </div>
    <!-- Sign In End -->
</div>
</body>
</html>