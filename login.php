<?php

include './includes/includes.php';
$isLoginSuccessful = true;
if (isset($_POST['email']) && isset($_POST['password'])) {
    $isLoginSuccessful = login($_POST['email'], $_POST['password']);
    if ($isLoginSuccessful) {
        header('Location: index.php');
    }
}
?>
<html lang="en">
<head>
    <?php
    include './components/header.php';
    ?>
</head>
<body>
<?php
include './components/navbar.php';
?>
<div class="container content-container wrapper">

    <div class="page-header">
        <h1>Member Login</h1>
    </div>

    <div class="row">
        <div class="col-md-4 col-md-offset-4 well">
            <?php
            if ($isLoginSuccessful == false) {
                ?>
                <div class="alert alert-warning" role="alert">
                    <span class="glyphicon glyphicon-exclamation-sign"></span>
                    Invalid email or password, please try again
                </div>
            <?php
            }
            ?>
            <form role="form" method="POST" action="login.php">
                <div class="form-group">
                    <label for="email">Email address</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Enter email">
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                </div>
                <div class="checkbox">
                    <label>
                        <input type="checkbox"> Remember me
                    </label>
                </div>
				<br>
                <button type="submit" class="btn btn-primary">Login </button>
                <a href="sign-up.php" class="pull-right"> Create a new account</a>
            </form>
        </div>
    </div>
<div class="push"></div>
</div>

<?php
include './components/footer.php';
include './components/script.php';
?>
</body>
</html>