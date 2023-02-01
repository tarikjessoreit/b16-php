<?php session_start();?>
<?php 
    if(empty($_SESSION['login_status']) || $_SESSION['login_status'] != true ){
    header('location:index.php');
    }
?>
<h2>Hello <?php echo $_SESSION['user'];?> welcome to ......</h2>
<h4>Hello <?php echo $_COOKIE['UserName'];?> welcome to ......</h4>
<a href="logout.php">Logout</a>