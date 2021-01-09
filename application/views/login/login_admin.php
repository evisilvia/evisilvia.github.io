<div class="main-content container-fluid">
    <div class="splash-container">
        <div class="panel panel-default panel-border-color panel-border-color-primary">
            <div class="panel-heading"><img src=<?= base_url("assets/img/logo-saung.jpeg") ?> alt="logo" width="102" height="27" class="logo-img"><span class="splash-description">Please enter your user information.</span></div>
            <div class="panel-body">
                <form class="admin" method="post" action="<?= base_url('login');  ?>">
                    <div class="login-form">
                        <div class="form-group">
                            <input type="text" class="form-control form-control-user" id="email" name="email" placeholder="Enter Email Address..." value="<?= set_value('email'); ?>"> <?= form_error('email', ' <small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control form-control-user" id="password" name="password" placeholder="Password">
                            <?= form_error('password', ' <small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group row login-tools">
                            <div class="col-xs-6 login-remember">
                                <div class="be-checkbox">
                                    <input type="checkbox" id="remember">
                                    <label for="remember">Remember Me</label>
                                </div>
                            </div>
                            <div class="col-xs-6 login-forgot-password"><a href="#">Forgot Password?</a></div>
                        </div>
                        <div class="form-group row login-submit">
                            <div class="col-xs-6">
                                <button data-dismiss="modal" type="submit" class="btn btn-default btn-xl"> <a href=<?= base_url("Login/registration") ?>>Register</a> </button>

                            </div>
                            <div class="col-xs-6">
                                <button data-dismiss="modal" type="submit" class="btn btn-primary btn-xl">Sign in</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="splash-footer">&copy; 2020 Saung Tahfidz Indonesia</div>
    </div>
</div>