<?php include_once("html_headers.php"); ?>

<!-- Top content -->
<div class="top-content">

    <div class="inner-bg">
        <div class="container">
            <div class="row">
                <div class="col-sm-8 col-sm-offset-2 text">
                    <h1><strong>PC Builder</strong> Login</h1>
                </div>
            </div>
            <div class="form-horizontal">
                <div class="col-sm-6 col-sm-offset-3 form-box">
                    <div class="form-top">
                        <div class="form-top-left">
                            <h3>Login to our site</h3>

                            <p>Enter your username and password to log on:</p>
                            <?php include ("bademail.php")?>
                        </div>
                        <div class="form-top-right">
                            <i class="fa fa-key"></i>
                        </div>
                    </div>
                    <div class="form-bottom">
                        <label>Username</label>
                        <form role="form" action="index.php" method="post" class="login-form">
                            <div class="form-group">
                                <label class="sr-only" for="form-username">Username</label>
                                <input type="email" name="username" placeholder="Username..."
                                       class="form-username form-control" id="form-username">
                            </div>

                            <label>Password</label>
                            <div class="form-group">
                                <label class="sr-only" for="form-password">Password</label>
                                <input type="password" name="password" placeholder="Password..."
                                       class="form-password form-control" id="form-password">
                            </div>

                            <div class="form-group">
                                <input type="hidden" name="action" value="login">
                            </div>


                            <div class="form-group">
                            <button type="submit" class="btn">Sign in!</button>
                            </div>


                            <div class="form-group">
                                <div class = "col-sm-12 col-md-6" >
                                    <button type="button" onclick="window.location='register.php'"
                                            style="background-color:#286090" class="btn">Register
                                    </button>
                                    </div>

                                <div class = "col-sm-12 col-md-6" >
                                <button  type="button" onclick="window.location='forgot_password.php'"
                                style="background-color:#c9302c" class="btn"  >Forgot Password</button>
                                </div></div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

</div>
<?php
include_once("html_footers.php");
?>
