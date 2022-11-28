<?php
    $title = "Workaholic - Login";
    $css = "./css/login.css";
    $js = "./js/login.js";
    include_once("./includes/header.php");
?>
<div class="container-fluid">
    <div class="row">
        <div id="menu">
            <h2 class="mt-3 text-white">Workaholic</h2>
        </div>
    </div>
    <div class="row">
        <div id="form" class="card mx-auto">
            <form>
                <div id="icon">
                    <img src="./images/vector.png" alt="" width="180px">
                </div>
                <div>
                    <label for="email" class="form-label h5 text-white">Email</label>
                    <input type="email" class="form-control" name="email" id="email" placeholder="Your email here" required>
                </div>
                <div class="mt-2">
                    <label for="password" class="form-label h5 text-white">Password</label>
                    <input type="password" class="form-control" name="password" id="password" placeholder="Now your password" required>
                    <small>Incorrect Email or Password</small>
                </div>
                <div>
                    <small><a href="./pages/forgot.html">Forgot password</a> | <a href="">Create an account</a></small>
                </div>
                <div class="mt-1" align="center">
                    <button class="btn btn-primary col-12" onclick="login()">Login</button>
                </div>
            </form>
        </div>
    </div>
</div>
<?php
    include_once("./includes/footer.php");
?>