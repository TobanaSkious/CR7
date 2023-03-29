<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="<?php echo ASSETS; ?>/css/signin.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
</head>


<body>
    <div id="form">
        <div class="container">
            <div class="col-lg-6 col-lg-offset-3 col-md-6 col-md-offset-3 col-md-8 col-md-offset-2">
                <div id="userform">
                    <ul class="nav nav-tabs nav-justified" role="tablist">
                        <li class="active"><a href="#signup" role="tab" data-toggle="tab">Sign up</a></li>
                        <li><a href="#login" role="tab" data-toggle="tab">Log in</a></li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane fade active in" id="signup">
                            <h2 class="text-uppercase text-center"> Sign Up for Free</h2>
                            <form id="signup" method="post" action="./back-end/user.php">
                                <div class="row">
                                    <div class="col-xs-12 col-sm-6">
                                        <div class="form-group">
                                            <label>First Name<span class="req">*</span> </label>
                                            <input type="text" class="form-control" name="first-name" id="first_name" required data-validation-required-message="Please enter your name." autocomplete="off" value="">
                                            <p class="help-block text-danger"></p>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-6">
                                        <div class="form-group">
                                            <label> Last Name<span class="req">*</span> </label>
                                            <input type="text" class="form-control" name="last_name" id="last_name" required data-validation-required-message="Please enter your name." autocomplete="off" value="">
                                            <p class="help-block text-danger"></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label> Your Email<span class="req">*</span> </label>
                                    <input type="email" class="form-control" name="Email" id="email" required data-validation-required-message="Please enter your email address." autocomplete="off" value="">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <label> Your Phone<span class="req">*</span> </label>
                                    <input type="tel" class="form-control" name="Phone_num" id="phone" required data-validation-required-message="Please enter your phone number." autocomplete="off" value="">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <label> Password<span class="req">*</span> </label>
                                    <input type="password" class="form-control" name="Pw" id="password" required data-validation-required-message="Please enter your password" autocomplete="off" value="">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="mrgn-30-top">
                                    <input type="submit" class="btn btn-larger btn-block" name="addUser" value="signup" />


                                </div>
                            </form>
                        </div>
                        <div class="tab-pane fade in" id="login">
                            <h2 class="text-uppercase text-center"> Log in</h2>
                            <form id="login">
                                <div class="form-group">
                                    <label> Your Email<span class="req">*</span> </label>
                                    <input type="email" class="form-control" id="email" required data-validation-required-message="Please enter your email address." autocomplete="off">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <label> Password<span class="req">*</span> </label>
                                    <input type="password" class="form-control" id="password" required data-validation-required-message="Please enter your password" autocomplete="off">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="mrgn-30-top">
                                    <button type="submit" class="btn btn-larger btn-block" />
                                    Log in
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.container -->
    </div>
    <script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <script src="js/signin.js"></script>

</body>

</html>