<?= $this->extend('registration/template'); ?>
<?= $this->section('registration'); ?>
<link rel="stylesheet" href="Assets/login/css/images.css">

<div class="formRegister">

    <!-- Sign up form -->
    <section class="signup">
        <div class="container">
            <div class="signup-content">
                <div class="signup-form">
                    <h2 class="form-title"><?= lang('Auth.register') ?></h2>
                    <?= view('Myth\Auth\Views\_message_block') ?>

                    <form action="<?= url_to('register') ?>" method="post" class="register-form" id="register-form">
                        <?= csrf_field() ?>

                        <!-- <form method="POST" class="register-form" id="register-form"> -->
                        <div class="form-group">
                            <label for="username"><i class="zmdi zmdi-account material-icons-name"></i></label>
                            <input type="text"
                                class="form-control <?php if (session('errors.username')) : ?>is-invalid<?php endif ?>"
                                name="username" id="username" placeholder="<?= lang('Auth.username') ?>"
                                value="<?= old('username') ?>" />
                        </div>

                        <div class="form-group">
                            <label for="email"><i class="zmdi zmdi-email"></i></label>
                            <input type="email"
                                class="form-control <?php if (session('errors.email')) : ?>is-invalid<?php endif ?>"
                                name="email" id="email" placeholder="<?= lang('Auth.email') ?>"
                                value="<?= old('email') ?>" />

                        </div>

                        <!-- <div class="form-group">
                            <label for="phone number"><i class="zmdi zmdi-phone"></i></label>
                            <input type="number" name="number" id="number" placeholder="Phone Number" />
                        </div> -->

                        <div class="form-group">
                            <label for="pass"><i class="zmdi zmdi-lock"></i></label>
                            <input type="password"
                                class="form-control <?php if (session('errors.password')) : ?>is-invalid<?php endif ?>"
                                name="password" id="pass" placeholder="<?= lang('Auth.password') ?>"
                                autocomplete="off" />
                        </div>

                        <div class="form-group">
                            <label for="re-pass"><i class="zmdi zmdi-lock-outline"></i></label>
                            <input type="password"
                                class="form-control <?php if (session('errors.pass_confirm')) : ?>is-invalid<?php endif ?>"
                                name="pass_confirm" id="re_pass" placeholder="<?= lang('Auth.repeatPassword') ?>"
                                autocomplete="off" />
                        </div>

                        <!-- <div class="form-group">
                            <input type="checkbox" name="agree-term" id="agree-term" class="agree-term" />
                            <label for="agree-term" class="label-agree-term"><span><span></span></span>I agree all
                                statements in <a href="#" class="term-service">Terms of service</a></label>
                        </div> -->
                        <div class="form-group form-button">
                            <input type="submit" name="signup" id="signup" class="form-submit" value="Register" />
                        </div>
                    </form>
                </div>
                <div class="signup-image">
                    <figure><img class="sampul" src="Assets/login/images/signup-images.jpg" alt="sing up image">
                    </figure>

                    <a href="<?= base_url('login') ?>" class="signup-image-link">I am already member</a>
                </div>
            </div>
        </div>
    </section>

</div>
<?= $this->endSection(); ?>
