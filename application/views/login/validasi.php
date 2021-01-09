<div class="main-content container-fluid">
    <div class="splash-container">
        <div class="panel panel-default panel-border-color panel-border-color-primary">
            <div class="panel-heading"><img src=<?= base_url("assets/img/logo-saung.jpeg") ?> alt="logo" width="102" height="27" class="logo-img"><span class="splash-description">Silahkan Login Terlebih Dahulu</span></div>
            <div class="panel-body">

                <?php if ($this->session->flashdata('gagal')) { ?>
                    <span style="color: red;"><?php echo $this->session->flashdata('gagal'); ?></span>
                <?php } ?>

                <?php if ($this->session->flashdata('sukses')) { ?>
                    <span style="color: green;"><?php echo $this->session->flashdata('sukses'); ?></span>
                <?php } ?>
                <form class="admin" method="post" action="<?= base_url('login/validasiproses');  ?>">
                    <div class="login-form">
                        <div class="form-group">
                            <input type="text" class="form-control form-control-user" id="kodeotp" name="kodeotp" placeholder="Masukan Kode OTP">
                        </div>

                        <div class="form-group row login-submit">
                            <div class="col-xs-6">
                                <button data-dismiss="modal" type="submit" class="btn btn-primary btn-xl" name="validasi">Verifikasi</button>
                            </div>
                        </div>

                        <p>
                            batas waktu <span id="waktu"></span><br>
                            Tidak menerima sms kode otp? <a href="<?php echo base_url('login/kirimulang') ?>">kirim ulang</a><br>
                            <a href="<?php echo base_url('login') ?>">Kembali Login</a>
                        </p>
                    </div>
                </form>
                <script>
                    var minutesToAdd = 10;
                    var currentDate = new Date();
                    var countDownDate = new Date(currentDate.getTime() + minutesToAdd * 60000);

                    var x = setInterval(function() {

                        var now = new Date().getTime();

                        var distance = countDownDate - now;

                        var days = Math.floor(distance / (1000 * 60 * 60 * 24));
                        var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                        var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
                        var seconds = Math.floor((distance % (1000 * 60)) / 1000);

                        document.getElementById("waktu").innerHTML = minutes + ":" + seconds;

                        if (distance < 0) {
                            clearInterval(x);
                            document.getElementById("waktu").innerHTML = "00:00";
                        }
                    }, 1000);
                </script>
            </div>
        </div>
        <div class="splash-footer">&copy; 2020 Saung Tahfidz Indonesia</div>
    </div>
</div>