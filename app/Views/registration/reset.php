<?= $this->extend('registration/template'); ?>
<?= $this->section('registration'); ?>
<div class="formLogin">
    <section class="sign-in">
        <div class="container">
            <div class="signin-content">
                <div class="signin-image">
                    <figure><img class="sampul" src="Assets/login/images/signup-image.jpg" alt="sing up image">
                    </figure>
                </div>

                <div class="signin-form">
                <h1 ><?=lang('Auth.resetYourPassword')?></h1>
                <div class="card-body">

                    <?= view('Myth\Auth\Views\_message_block') ?>

                    <p><?=lang('Auth.enterCodeEmailPassword')?></p>

                    <form action="<?= url_to('reset-password') ?>" method="post">
                        <?= csrf_field() ?>
                        <div class="form-group">
                        <label for="your_name"><i class="zmdi zmdi-circle"></i></label>
                        <input type="text" class="form-control <?php if (session('errors.token')) : ?>is-invalid<?php endif ?>"
                                   name="token" placeholder="<?=lang('Auth.token')?>" value="<?= old('token', $token ?? '') ?>">
                            <div class="invalid-feedback">
                                <?= session('errors.token') ?>
                            </div>
                        </div>

                        <div class="form-group">
                        <label for="your_name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                            <input type="email" class="form-control <?php if (session('errors.email')) : ?>is-invalid<?php endif ?>"
                                   name="email" aria-describedby="emailHelp" placeholder="<?=lang('Auth.email')?>" value="<?= old('email') ?>">
                            <div class="invalid-feedback">
                                <?= session('errors.email') ?>
                            </div>
                        </div>

                        <br>

                        <div class="form-group">
                        <label for="your_pass"><i class="zmdi zmdi-lock"></i></label>
                            <input type="password" class="form-control <?php if (session('errors.password')) : ?>is-invalid<?php endif ?>"
                                   name="password" placeholder="<?=lang('Auth.newPassword')?>">
                            <div class="invalid-feedback">
                                <?= session('errors.password') ?>
                            </div>
                        </div>

                        <div class="form-group">
                        <label for="your_pass"><i class="zmdi zmdi-lock"></i></label>
                            <input type="password" class="form-control <?php if (session('errors.pass_confirm')) : ?>is-invalid<?php endif ?>"
                                   name="pass_confirm" placeholder="<?=lang('Auth.newPasswordRepeat') ?>">
                            <div class="invalid-feedback">
                                <?= session('errors.pass_confirm') ?>
                            </div>
                        </div>

                        <br>

                        <button type="submit" class="btn btn-primary btn-block"><?=lang('Auth.resetPassword')?></button>
                    </form>

                </div>
            </div>

        </div>
    </section>
</div>
<?= $this->endSection() ?>