<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOME</title>
    <script defer="defer" src="JS/bg.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="CSS/main.css">
</head>
<body>
    <div class="canvas">
        <canvas class="canvas-2"></canvas>
    </div>
    
    <div class="section">
        <div class="container">
            <div class="row full-height justify-content-center align-items-center">
                <div class="col-12 text-center align-self-center py-5">
                    <div class="section pb-5 pt-5 pt-sm-2 text-center">
                        <h6 class="mb-0 pb-3"><span>Log In </span><span>Sign Up</span></h6>
                        <input class="checkbox" type="checkbox" id="reg-log" name="reg-log"/>
                        <label for="reg-log"></label>
                        <div class="card-3d-wrap mx-auto">
                            <div class="card-3d-wrapper">
                                <div class="card-front">
                                    <div class="center-wrap">
                                        <div class="section text-center">
                                            <h4 class="mb-4 pb-3">Log In</h4>
                                            <form action="PHP/process_login.php" method="POST">
                                                <div class="form1-group">
                                                    <input type="email" name="logemail" class="form1-style" placeholder="Your Email" id="logemail" autocomplete="off">
                                                    <i class="input-icon fa fa-duotone fa-envelope"></i>
                                                </div>    
                                                <div class="form1-group mt-2">
                                                    <input type="password" name="logpass" class="form1-style" placeholder="Your Password" id="logpass" autocomplete="off">
                                                    <i class="input-icon fa fa-duotone fa-lock"></i>
                                                </div>
                                                <button type="submit" class="btn mt-4">Submit</button>
                                                <?php if(!empty($error_msg)): ?>
                                                <p><?php echo $error_msg; ?></p>
                                                <?php endif; ?>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-back">
                                    <div class="center-wrap">
                                        <div class="section text-center">
                                            <h4 class="mb-4 pb-3">Sign Up</h4>
                                            <form action="PHP/process_signup.php" method="POST">
                                                <div class="form1-group">
                                                    <input type="text" name="logname" class="form1-style" placeholder="Your Full Name" id="logname" autocomplete="off">
                                                    <i class="input-icon fa fa-duotone fa-user"></i>
                                                </div>    
                                                <div class="form1-group mt-2">
                                                    <input type="email" name="logemail" class="form1-style" placeholder="Your Email" id="logemail" autocomplete="off">
                                                    <i class="input-icon fa fa-duotone fa-envelope"></i>
                                                </div>    
                                                <div class="form1-group mt-2">
                                                    <input type="password" name="logpass" class="form1-style" placeholder="Your Password" id="logpass" autocomplete="off">
                                                    <i class="input-icon fa fa-duotone fa-lock"></i>
                                                </div>
                                                <button type="submit" class="btn mt-4">Submit</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
