<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?php echo base_url();?>public/css/bootstrap.css">
    <link href="<?php echo base_url();?>public/css/all.min.css" rel="stylesheet">
    <title>Document</title>
</head>
<style>
    body{
        background-color:#e8f1f5;
    }
    .login-box{
        min-width: 350px;
        position: absolute;
        text-align: center;
        top: 45%;
        left: 50%;
        transform: translate(-50%, -50%);
        background-color: white;
        font-size: 1.3rem;
        -moz-box-shadow: 6px 7px 11px 0px rgba(66,66,66,0.75);
        box-shadow: 6px 7px 11px 0px rgba(66,66,66,0.75);
        border-radius: 7px 7px 7px 7px;
    }
    .login-body{
        padding: 10px 30px;
    }
    .login-footer{
        padding: 10px 0;
        background-color: #EFEFEF;
        border-radius: 0 0 7px 7px;
        font-size: 1rem;
    }
    .login-footer a{
        color:#727375;
        text-decoration: none;
    }
    .login-footer a:hover{
        color:black;
        text-decoration: none;
    }
    .login-header{
        padding: 20px 40px;
    }
    .btn-success{
        background-color:#00CE81;
        border-color:#00CE81;
        border-radius: 2px;
    }
    .btn-success:hover{
        background-color:#00CE81;
        border-color:#00CE81;
    }
    input[type=email]{
        padding-left: 40px;
    }
    input[type=password]{
        padding-left: 40px;
    }
    .input-wrapper{
        position: relative;
    }
    .input-wrapper i{
        position: absolute;
        left: 0px;
        top: 0px;
        padding: 8px 12px;
        color:#aaa;
        transition: .3s;
    }
    .input-wrapper input[type=email]:focus +i, .input-wrapper input[type=password]:focus + i{
        color:dodgerBlue;
    }
    .alert{
        font-size: 1rem;
    }

    .myForm {
        min-width: 500px;
        }
    @media (max-width: 500px) {
        .myForm {
            min-width: 90%;
        }
    }
</style>
<body>
    <div class="container-fluid">
        <div class="login-box">
            <div class="login-header">
                Member Login
            </div>
            <div class="login-body">
                <form action="<?php echo base_url(); ?>login/verification" method="POST">
                    <div class="form-group input-wrapper">
                        <input type="email" name ="email" id="email" placeholder="Email" class="form-control">
                        <i class="fas fa-user "></i>
                    </div>
                    <div class="form-group input-wrapper">
                        <input type="password" name ="password" id="password" placeholder="Password" class="form-control">
                        <i class="fas fa-unlock-alt"></i>
                    </div>
                    <div class="form-group">
                        <input type="submit" name="submit" class="btn btn-success btn-lg" value="Log in" style="width:100%"/>
                    </div>
                </form>
            <?php if (isset($error_msg)){  ?>
                <div class="alert alert-danger" role="alert">
                    <?php echo $error_msg; ?>
                </div>
            <?php }#endif ?>
            </div>
            <div class="login-footer">
                <a href="#">Forgot password?</a>
            </div>
        </div>
    </div>
</body>
</html>
