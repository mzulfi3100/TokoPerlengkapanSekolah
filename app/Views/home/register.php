<!DOCTYPE html>
<html lang="en">

<head>

    <!-- Favicons -->
    <link href="/Assets/img/loading.png" rel="icon">
    <link href="/Assets/img/loading.png" rel="apple-touch-icon">

    <title>School Shop</title>
    <link href="https://fonts.googleapis.com/css?family=Karla:400,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.materialdesignicons.com/4.8.95/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="/Assets/css/login.css">
</head>

<body>
    <main class="d-flex align-items-center min-vh-100 py-3 py-md-0">
        <div class="container">
            <div class="card login-card">
                <div class="row no-gutters">

                    <div class="col-md-5">
                        <img src="/Assets/images/bgLogin.jpg" alt="login" class="login-card-img">
                    </div>
                    <div class="col-md-7">
                        <div class="card-body">
                            <div class="brand-wrapper">
                                <img src="/Assets/img/logo.png" alt="logo" class="logo">

                            </div>
                            <p class="login-card-description">Sign into your account</p>
                            <?php if (!empty(session()->getFlashdata('error'))) : ?>
                                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                    <h4>Periksa Kembali Entrian Form Anda !</h4>
                                    </hr />
                                    <?php echo session()->getFlashdata('error'); ?>
                                </div>
                            <?php endif; ?>
                            <form method="post" action="<?= base_url(); ?>/register/process">
                            <?= csrf_field(); ?>
                                <div class="form-group">
                                    <label for="text" class="sr-only">First Name</label>
                                    <input type="text" name="first" id="first" class="form-control"
                                        placeholder="First Name">
                                </div>
                                <div class="form-group">
                                    <label for="text" class="sr-only">Last Name</label>
                                    <input type="text" name="last" id="last" class="form-control"
                                        placeholder="Last Name">
                                </div>
                                <div class="form-group">
                                    <label for="email" class="sr-only">Email</label>
                                    <input type="email" name="email" id="email" class="form-control"
                                        placeholder="Email Address">
                                </div>
                                <div class="form-group mb-4">
                                    <label for="password" class="sr-only">Password</label>
                                    <input type="password" name="password" id="password" class="form-control"
                                        placeholder="Password">
                                </div>
                                <div class="form-group mb-4">
                                    <label for="password" class="sr-only">Confirm Password</label>
                                    <input type="password" name="password_conf" id="password_conf" class="form-control"
                                        placeholder="Confirm Password">
                                </div>
                                <input name="register" id="register" class="btn btn-block login-btn mb-4" type="submit"
                                    value="Register">
                            </form>
                            <p class="login-card-footer-text">Have an account? <a
                                    href="<?= base_url(); ?>/login" class="text-reset">Login</a>
                            </p>
                            <nav class="login-card-footer-nav">
                                <a href="#!">Terms of use.</a>
                                <a href="#!">Privacy policy</a>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </main>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>

</html>
