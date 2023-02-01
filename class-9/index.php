<?php session_start();?>
<?php 
    if(!empty($_SESSION['login_status'])){
    header('location:dashboard.php');
    }
?>
<html>

<head>
    <title>Learn PHP SGV</title>
</head>

<body>
    <?php
    if (isset($_POST['logbtn'])) {
        $un = $_POST['username'];
        $pass = $_POST['password'];

        if ('admin' === $un || 'Moksed' === $un ) {
            if ('12345' === $pass) {
                $msg = "Login Successfull";
                $_SESSION['user'] = $un;
                $_SESSION['login_status'] = true;

                setcookie("UserName", $un, time() + 20, '/');
                setcookie("status", $un, time() + 20, '/');
                // header("location:dashboard.php");
                header("refresh:1;url=dashboard.php");
            } else {
                $err = "wrong password";
            }
        } else {
            $err = "wrong username";
        }
    }
    ?>


    <center>
        <?php
        if (!empty($msg)) {
            printf('<span style="color:green;">%1s</span>',$msg);
        }

        if (!empty($err)) {
            printf('<span style="color:red;">%1s</span>',$err);
        }
        ?>
        <form action="" method="post">
            <table>
                <tr>
                    <td>Username</td>
                    <td><input type="text" name="username"></td>
                </tr>
                <tr>
                    <td>password</td>
                    <td><input type="password" name="password"></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" value="login" name="logbtn"></td>
                </tr>
            </table>
        </form>
    </center>
</body>

</html>