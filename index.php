<?php
    include_once("./includes/header.php");
    if(isset($_SESSION["login"]) && $_SESSION['login'] == true) {
        header("Location:home.php");
    }
    else {
        header("Location:login.php");
    }
?>
<?php
    include_once("./includes/footer.php");
?>