<div class="main-content container-fluid">
    <div class="splash-container sign-up">
        <div class="panel panel-default panel-border-color panel-border-color-primary">
            <div class="panel-heading"><img src=<?= base_url("assets/img/logo-saung.jpeg") ?> alt="logo" width="150" class="logo-img"><span class="splash-description">Silahkan daftar akun untuk masuk!</span></div>
            <div class="panel-body">
                <form class="admin" method="post" action="<?= base_url('login/registration') ?>"><span class="splash-title xs-pb-20">Daftar</span>
                    <div class="form-group">
                        <input type="text" class="form-control form-control-user" id="name" name="name" placeholder="Full name" value="<?= set_value('name')  ?>">
                        <?= form_error('name', ' <small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control form-control-user" id="email" name="email" placeholder="Email Address" value="<?= set_value('email')  ?>">
                        <?= form_error('email', ' <small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <div class="form-group row signup-password">
                        <div class="col-xs-6">
                            <input type="password" class="form-control form-control-user" id="password1" name="password1" placeholder="Password">
                            <?= form_error('password1', ' <small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="col-xs-6">
                            <input type="password" class="form-control form-control-user" id="password2" name="password2" placeholder="Repeat Password">
                        </div>
                    </div>
                    <div class="form-group xs-pt-10">
                        <button type="submit" class="btn btn-block btn-primary btn-xl">Daftar</button>
                    </div>
                    <div class="form-group xs-pt-10">
                        <div class="be-checkbox">
                            <input type="checkbox" id="remember">
                            <label for="remember">Dengan membuat akun, anda mematuhi <a href="#">peraturan</a> kami.</label>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="splash-footer">&copy; 2020 Saung Tahfidz Indonesia</div>
    </div>
</div>