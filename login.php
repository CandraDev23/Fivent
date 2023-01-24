<?php

include "koneksi.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
    $username = $_POST['field_username'];
    $password = $_POST['field_pass'];

    if($username && $password != "") {
        $sql = "SELECT * FROM user_fivent WHERE username='$username' AND password='$password'";
        $result = mysqli_query($koneksi, $sql);
        $cek = mysqli_num_rows($result);
        if ($cek > 0) {
            $d = mysqli_fetch_array($result);
            $d_username = $d['username'];
            $d_password = $d['password'];
            $id = $d['id_user'];
            
            if ($username == $d_username && $password == $d_password) {
                echo "<script>
                alert('Login success')
                alert('Welcome back ' + '$username')
                window.location = 'after-LR/after-login.php?id= $id';
                </script>";
            } else {
                echo "<script>alert('Your email or password is incorrect. Please try again!')</script>";
            }
    }
    }
    else if($username == "" && $password == "") {
        echo "<script>
        alert('Enter all the required data')
        </script>";
    }
    else if($username == "") {
        echo "<script>
        alert('Enter your username')
        </script>";
    }
    else if($password == "") {
        echo "<script>
        alert('Enter your password')
        </script>";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="assets/img/icon-Fv.png" type="image/x-icon">
    <title>Fivent-login</title>
    <link rel="stylesheet" href="style.css?version=<?php echo filemtime('style.css'); ?>">
    <script src="script.js?v=script.js"></script>
</head>
<body style="background-color: #d3d3d3;">
    <section>
        <div class="wrapper-login">
            <div class="button-back-LR">
                <a href="index.php">
                    <svg width="22" height="22" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M21.0858 29.9142C21.8668 30.6953 23.1332 30.6953 23.9142 29.9142C24.6953 29.1332 24.6953 27.8668 23.9142 27.0858L21.0858 29.9142ZM12 18L10.5858 16.5858C9.80474 17.3668 9.80474 18.6332 10.5858 19.4142L12 18ZM23.9142 8.91421C24.6953 8.13316 24.6953 6.86684 23.9142 6.08579C23.1332 5.30474 21.8668 5.30474 21.0858 6.08579L23.9142 8.91421ZM23.9142 27.0858L13.4142 16.5858L10.5858 19.4142L21.0858 29.9142L23.9142 27.0858ZM13.4142 19.4142L23.9142 8.91421L21.0858 6.08579L10.5858 16.5858L13.4142 19.4142Z" fill="#404040"/>
                    </svg>                        
                    Back     
                </a>
            </div>
        </div>
        <div class="wrapper-login">
            <div class="container">
                <div class="sub-container-login">
                    <div class="button-switch">
                        <a class="login-buttonn-login" href="login.php">Login</a>
                        <a class="register-button-login" href="register.php">Register</a>
                    </div>
                    <form method="post" name="form_login">
                        <fieldset>
                            <label for="">Username</label>
                            <br>
                            <input class="field" type="text" name="field_username" id="usernamw" placeholder="Enter your username">
                            <br>
                            <label for="">Password</label>  
                            <br>
                            <input class="field field-login" type="password" name="field_pass" id="pass" placeholder="Enter your password">
                            <div class="show-forgot-pass">
                                <span>
                                    <input type="checkbox" onclick="showhidepassword()"><p>Show password</p> 
                                </span>
                                <a class="forgot-button" href="">Forgot password?</a>
                            </div>
                            <input class="login-button-check" type="submit" value="Login">
                        </fieldset>
                    </form>
                    <span class="or-area">
                        <hr size="1px" color="#D3D3D3">
                        <p>or</p>
                        <hr size="1px" color="#D3D3D3">
                    </span>
                    <div class="other-login">
                        <a href="https://accounts.google.com/?hl=id"><input type="button" value="Google"></a>
                        <div class="space-between-button"></div>
                        <a href="https://id-id.facebook.com/login/device-based/regular/login/?login_attempt=1"><input type="button" value="Facebook"></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
</html>