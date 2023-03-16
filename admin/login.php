<?php
    session_start();
    ob_start();
    include "../model/connectdb.php";
    include "../model/user.php";

    if((isset($_POST['dangnhap']))&&($_POST['dangnhap'])){
        $user=$_POST['user'];
        $pass=$_POST['pass'];
        $role=checkuser($user,$pass);
        $_SESSION['role']=$role;
        if($role==1) header('location: index.php');
        else{
            $txt_erro="Username hoặc Password không tồn tại!";
        } //header('location: login.php');
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Admin</title>
    <link rel="stylesheet" href="view/style.css">
</head>
<body>
<div class="main">
    <h2>LOGIN</h2>
    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
        <input type="text" name="user" id="">
        <input type="text" name="pass" id="">
        <input type="submit" name="dangnhap" value="ĐĂNG NHẬP">
        <?php
            if(isset($txt_erro)&&($txt_erro!="")){
                echo "<font color='red'>".$txt_erro."</font>";
            }
        ?>
    </form>
</div>
    
</body>
</html>