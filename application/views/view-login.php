<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Universitas AMIKOM</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="shortcut icon" href="<?php echo site_url('assets/logoamikom.png'); ?>" type="image/x-icon">
</head>

<body>
    <section class="d-flex min-vh-100 justify-content-center align-items-center" style="background-color: blueviolet;">
        <div class="container">
            <div class="row">
                <?= $this->session->flashdata('msg'); ?>
                <?= $this->session->flashdata('message'); ?>
                <div class="col-5 mx-auto bg-light rounded-3 shadow">
                    <div class="row">
                        <div class="col">
                            <div class="m-5 text-center">
                                <h1>Login RPS</h1>
                            </div>
                            <form class="m-5" action="<?php echo
                                                        site_url('login/autentikasi'); ?>" method="POST">
                                <div class="mb-3">
                                    <!-- <label for="username" class="form-label">Username</label> -->
                                    <input type="text" class="form-control shadow" id="username" name="user_email" placeholder="Username">
                                </div>
                                <div class="mb-3">
                                    <!-- <label for="password" class="form-label">Password</label> -->
                                    <input type="password" class="form-control shadow" id="password" name="user_password" placeholder="Password">
                                </div>
                                <div class="row mb-3">
                                    <div class="col">
                                        <div class="form-check">
                                            <input class="form-check-input shadow" type="checkbox" id="remember-me">
                                            <label class="form-check-label" for="remember-me">Remember Me</label>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="text-end">
                                            <a href="#" class="text-decoration-none">Forgot Password?</a>
                                        </div>
                                    </div>
                                    <div class="text-center my-3 text-decoration-none">
                                        <input type="submit" class="btn btn-primary form-control mb-2" value="Login">
                                        <p>Belum memiliki akun? </p>
                                        <a class="btn btn-warning text-light border form-control" href="<?php echo base_url('login/register/'); ?>">Register</a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>


</body>

</html>