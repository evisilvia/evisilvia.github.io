<div class="row container-fluid center">
    <div class="col-xs-12 col-md-12">
        <div class="panel panel-default panel-border-color panel-border-color-success">
            <div class="panel-heading panel-heading-divider">
                Pendaftaran Santri
            </div>

            <div class="panel-body ">

                <?= $this->session->flashdata('message'); ?>

                <form data-parsley-validate="" novalidate="" enctype="multipart/form-data" class="form-horizontal" method="post" action=<?= base_url('pendaftaran'); ?>>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="col-sm-3 control-label" style="text-align: left;" for="nama">Nama</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="nama" name="nama">
                                </div>
                            </div>




                            <div class="form-group">
                                <label class="col-sm-3 control-label" style="text-align: left;" for="tgl_lahir">Tanggal Lahir</label>
                                <div class="col-sm-9">

                                    <div data-min-view="2" data-date-format="dd/mm/yyyy" class="input-group date datetimepicker">
                                        <input size="16" type="text" value="" class="form-control" name="tgl_lahir"><span class="input-group-addon btn btn-primary"><i class="icon-th mdi mdi-calendar"></i></span>
                                    </div>
                                </div>
                            </div>



                            <div class="form-group">
                                <label class="col-sm-3 control-label" style="text-align: left;" for="jenis_kelamin">Jenis Kelamin</label>
                                <div class="col-sm-9" class="form-control">
                                    <select class="form-control" name="jenis_kelamin">
                                        <option>Pilih</option>
                                        <option>Perempuan</option>
                                        <option>Laki-Laki</option>
                                    </select>

                                </div>
                            </div>



                            <div class="form-group">
                                <label class="col-sm-3 control-label" style="text-align: left;">Alamat</label>
                                <div class="col-sm-9">
                                    <textarea class="form-control" style="height:100px;" id="alamat" name="alamat"></textarea>
                                </div>
                            </div>
                            <div class="col-sm-3"></div>
                            <div class="col-sm-9">
                                <?php echo form_error('alamat'); ?>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-3 control-label" style="text-align: left;">Nomor Telepon</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="no_telp" name="no_telp">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-3 control-label" style="text-align: left;" for="test">Tempat Tes</label>
                                <div class="col-sm-9" class="form-control">
                                    <select class="form-control" name="test">
                                        <option>Pilih Tempat Tes</option>
                                        <option>STI Pusat</option>
                                        <option>STI Regional Bandung</option>
                                        <option>STI Regional Cianjur</option>
                                    </select>

                                </div>
                            </div>
                        </div>



                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="col-sm-3 control-label" style="text-align: left;">Nama Orang Tua</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="nama_orangtua" name="nama_orangtua">
                                </div>
                            </div>
                            <div class="col-sm-3"></div>
                            <div class="col-sm-9">
                                <?php echo form_error('no_telepon'); ?>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label" style="text-align: left;">No Telepon Orang Tua</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="no_telp_ortu">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label" style="text-align: left;">Email</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="email" name="email">
                                </div>


                            </div>


                            <div class="form-group">
                                <label class="col-sm-3 control-label" style="text-align: left;">Kata Sandi</label>
                                <div class="col-sm-9">
                                    <input type="password" class="form-control" id="password1" name="password1">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-3 control-label" style="text-align: left;">Konfirmasi Kata Sandi</label>
                                <div class=" col-sm-9">
                                    <input type="password" class="form-control" id="password2" name="password2">
                                </div>
                            </div>

                            <br>

                            <div class="form-group">
                                <div class="col-sm-12 col-sm-offset-3" style="margin-top:-18px">
                                    <!-- <p class="text-right"> -->
                                    <button type="submit" class="btn btn-space btn-primary" name="daftar">Daftar</button>
                                    <button class="btn btn-space btn-default"><a href=<?= base_url("pendaftaran"); ?>>Reset</a></button>
                                    <!-- </p> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>

            <br>
            <br>
        </div>
    </div>
</div>