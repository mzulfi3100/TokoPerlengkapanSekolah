<?= $this->extend('registration/template'); ?>
<?= $this->section('registration'); ?>
<div class="formLogin">
    <section class="sign-in">
        <div class="container">
            <div class="signin-content">
                <div class="signin-image">
                    <figure><img class="sampul" src="Assets/login/images/signin-image-Copy.jpg" alt="sing up image">
                    </figure>
                </div>

                <div class="signin-form">
                <h1 class="card-header"><?=lang('Auth.forgotPassword')?></h1>
                <div class="card-body">

                    <?= view('Myth\Auth\Views\_message_block') ?>

                    <p><?=lang('Auth.enterEmailForInstructions')?></p>

                    <form action="<?= url_to('forgot') ?>" method="post">
                        <?= csrf_field() ?>

                        <div class="form-group">
                        <label for="your_name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                            <input type="email" class="form-control <?php if (session('errors.email')) : ?>is-invalid<?php endif ?>"
                                   name="email" aria-describedby="emailHelp" placeholder="<?=lang('Auth.email')?>">
                            <div class="invalid-feedback">
                                <?= session('errors.email') ?>
                            </div>
                        </div>

                        <br>

                        <button type="submit" class="btn btn-primary btn-block"><?=lang('Auth.sendInstructions')?></button>
                    </form>

                </div>
            </div>

        </div>
    </section>
</div>
<?= $this->endSection(); ?>