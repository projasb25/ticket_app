<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?php echo base_url();?>public/css/bootstrap.css">
    <link rel="stylesheet" href="<?php echo base_url();?>public/css/login.css">
    <link href="<?php echo base_url();?>public/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet"> 
    <title>Login</title>
</head>
<body>
    <div class="container-fluid">
        <div class="login-box">
            <div class="login-header">
                Enter your Email
            </div>
            <div class="login-body">
                <form action="<?php echo base_url(); ?>login/forgot_password" method="POST">
                    <div class="input-group mb-4">
                        <div class="input-group-prepend">
                            <div class="input-group-text"><i class="fas fa-user"></i></div>
                        </div>
                        <input type="email" class="form-control" placeholder="Email" name="email">
                    </div>
                    <div class="form-group">
                        <input type="submit" name="submit" class="btn btn-success btn-lg" value="Submit" style="width:100%"/>
                    </div>
                </form>
            <?php if (isset($error_msg)){  ?>
                <div class="alert alert-danger" role="alert">
                    <?php echo $error_msg; ?>
                </div>
            <?php }#endif ?>
            </div>
        </div>
    </div>
</body>
</html>
