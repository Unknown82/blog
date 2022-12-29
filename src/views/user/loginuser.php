<?php
?>

<!-- START HEADER -->

<?php require __DIR__ . "./../../../elements/html/header.php" ?>

<!-- START NAVBAR -->

<?php require __DIR__ . "./../../../elements/navbar.php" ?>


<!-- Start des Inhalts -->


<br>
<br>
<br>
<br>
<br>
<div class="container row d-flex justify-content-center">
</div>


<div class="container container-register">
    <div class="row d-flex justify-content-center">
        <form method="post" class="col-6 container-register-bg" action="">
            <div class="branded-logo-container">
                <img class="img-fluid" src="https://i.guim.co.uk/img/media/a550c1d2cdc4bfc77b5cd171035d4c1d568066a5/0_206_6192_3715/master/6192.jpg?width=620&quality=85&auto=format&fit=max&s=1faa4f265b2b474720c9351b9501c62f">
                <?php //var_dump($_POST)?>
            </div>
            <br>
            <div class=" title-login-container-account">
                <h3 class="title-login-account">Login in Ihren Account</h3>
                <h6 class="register-notice">Du hast noch keinen Account? <a href="/blog/index/register">Hier Registrieren</a></h6>
            </div>
            <br>
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text"
                       class="form-control"
                       id="username"
                       aria-describedby="usernameHelp"
                       placeholder="Enter your Username"
                       name="username">


                <small id="emailHelp" class="form-text text-muted">Login mit Ihrer Email</small>
            </div>
            <br>
            <div class="form-group">
                <label for="user-password">Passwort eingeben</label>
                <input type="password"
                       class="form-control"
                       id="user-password"
                       placeholder="Password"
                       name="password">
                <small id="emailHelp" class="form-text text-muted">Login mit Ihrer Email</small>
            </div>
            <br>
            <div class="text-right">
                <div class="submit-button-container">
                    <button type="submit"
                            class="btn btn-warning login-button"
                            value="send"
                            name="loginbutton">Einlogen</button>
                </div>
                <div class="notice">
                    <p> <?php echo $notice ?></p>
                    <br>
                    <br>
                </div>
            </div>
        </form>
    </div>
</div>

<?php require __DIR__ . "./../../../elements/html/footer.php" ?>
