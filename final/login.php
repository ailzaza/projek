<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="../assets/css/login.css">

</head>
<body>
      <div style="display:flex; align-items:center; justify-content:center; height:100vh">
        <div>
          <h1>Login.</h1>
          <form method="POST">
            

            <label for="">Enter username : </label><br>
            <input type="text" name="getusername"><br>

            <label for="">Enter password : </label><br>
            <input type="password" name="getpass"><br><br>

          
            <button type="submit" name="sub">Log in </button> <a href="index.php">Sign Up</a>
          </form>

          <?php
            if(isset($_POST['sub'])){
            require 'partials/_dbcon.php'; //Create a seperate db connection file and link it
            
            $getusername = $_POST['getusername'];
            $getpassword = $_POST['getpass'];

            $sql1 = "select * from user_details where user_name = '$getusername' and password='$getpassword';";
            $sqlres = mysqli_query($connect, $sql1);
            $hasilLogin = mysqli_fetch_assoc($sqlres);
            $countrows = mysqli_num_rows($sqlres);

            if($countrows == 0){
                echo "account not available. Please <a href='index.php'>Sign Up.</a>";
            }else{
                session_start();

                $_SESSION['loggedin'] = true;
                $_SESSION['sendusername'] = $hasilLogin['full_name'];
                header("location: dashboard.php");  //Replace dashboard.php with your next page
            }
            }
          ?>

        </div>
      </div>
</body>
</html>