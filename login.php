<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
    <link rel="stylesheet" href="styles.css" />
    <link rel="stylesheet" href="stylee.css" />

</head>

<body>

    <div class="container">
      <div class="forms-container">
        <div class="signin-signup">
          <form action="#" method="post"class="sign-in-form" autocomplete="off">
            <h2 class="title" >Welcome<br> <br> Please Sign in</h2>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" name="uname" class="textfiled" placeholder="Username" required >
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" name="passd" class="textfiled" placeholder="Password" required>
            </div>
            <div class="forgetpass" ><a href="" class="link" onclick="message()">Forget Password?</a></div>
            <input type="submit" name="login" value="Login" class="btn" >

          </form>
        </div>
      </div>

      <div class="panels-container">
        <div class="panel left-panel">
          <div class="content">
            <h3>Welcome</h3>
            <input type="submit" name="login" value="Register" onclick="login()" class="btn" >
          </div>
        </div>
      </div>
    </div>

    <script src="app.js"></script>
    <script>
        function message()
        {
            alert("Password yaad rakhne ka");
        }

        function login(){
          window.location.href="register.php";
        }
    </script>


</body>
</html>

<?php

        include("connection.php"); 

        if(isset($_POST['login']))
        {
            $uname=$_POST['uname'];
            $passd=$_POST['passd'];

            $query="SELECT  * FROM register_form WHERE uname='$uname' && passd='$passd'";
            $data=mysqli_query($conn,$query);

            $total=mysqli_num_rows($data);

            if($total==1){
                // session_start();
                $_SESSION['adminname']=$uname;
                header("location:index2.php");
            }

            else{
                echo " <script>alert('Incorrect Password');</script>";
            }

        }
      

?>
