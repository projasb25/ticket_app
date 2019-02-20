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
                Ticket App
            </div>
            <div class="login-body">
                <form action="<?php echo base_url();?>login/verification" method="POST">
                    <div class="input-group mb-4">
                        <div class="input-group-prepend">
                            <div class="input-group-text"><i class="fas fa-user"></i></div>
                        </div>
                        <input type="email" class="form-control" placeholder="Email" name="email">
                    </div>
                    <div class="input-group mb-4">
                        <div class="input-group-prepend">
                            <div class="input-group-text"><i class="fas fa-unlock-alt"></i></div>
                        </div>
                        <input type="password" class="form-control" placeholder="Password" name="password">
                    </div>
                    <div class="form-group">
                        <input type="submit" name="submit" class="btn btn-success btn-lg" value="Login" style="width:100%"/>
                    </div>
                </form>
            <?php if (isset($msg)){  ?>
                <div class="alert alert-<?=$style?>" role="alert">
                    <?php echo $msg; ?>
                </div>
            <?php }#endif ?>
            </div>
            <div class="login-footer">
                <a href="<?=base_url()?>forgot_password">Forgot password?</a>
            </div>
        </div>
    </div>
</body>
</html>
