<?php include_once("html_headers.php"); ?>

<!-- Top menu -->
<nav class="navbar navbar-inverse navbar-no-bg" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#top-navbar-1">
            </button>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="top-navbar-1">
            <ul class="nav navbar-nav navbar-right">
            </ul>
        </div>
    </div>
</nav>

<!-- Top content -->
<div class="top-content">

    <div class="inner-bg">
        <div class="container">
            <div class="row">
                <div class="col-sm-8 col-sm-offset-2 text">
                    <h1><strong>PC Builder</strong> Forgot Password</h1>
                </div>
            </div>
            <div class="form-horizontal">
                <div class="col-sm-6 col-sm-offset-3 form-box">
                    <div class="form-top">
                        <div class="form-top-left">
                            <h3>Login to our site</h3>

                            <p>Enter your username to retrieve your password:</p>
                        </div>
                        <div class="form-top-right">
                            <i class="fa fa-key"></i>
                        </div>
                    </div>
                    <div class="form-bottom">
                        <form role="form" action="forgot_password.php" method="post" class="forgot-password-form">

                        <div class="form-group">
                                <label class="sr-only" for="form-first-name">First name</label>
                                <input type="text" name="fname" placeholder="First name..."
                                       class="form-first-name form-control" id="fname">
                            </div>

                            <div class="form-group">
                                <label class="sr-only" for="form-username">Username</label>
                                <input type="text" name="email" placeholder="Username..."
                                       class="form-username form-control" id="form-username">
                            </div>

                            <div class="form-group">
                            <button type="submit" class="btn" onclick="window.location='../forgot_password.php'">Submit</button>
                            </div>
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