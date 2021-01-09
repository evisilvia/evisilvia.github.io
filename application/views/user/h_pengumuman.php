<?= $this->session->flashdata('message'); ?>
<div class="page-head" style="padding: 5px 20px 10px;">

    <ol class="breadcrumb page-head-nav">

        <li><a href="#">
                <h4>Pengumuman</h4>
            </a></li>

    </ol>
</div>


<div class="row container-fluid center">
    <div class="col-xs-12 col-md-12">

        <div class="panel panel-default panel-border-color panel-border-color-success">
            <div class="panel-heading panel-heading-divider">
                Pengumuman
            </div>
            <div class="user-info-list panel panel-default">

                <div class="panel-body" align="center">
                    <h3>Pengumuman Kelulusan Santri Baru</h3>
                    <br>
                    <br>

                    <table id="table1" class="table table-striped table-bordered table-hover table-fw-widget ">

                        <tbody>

                            <tr>
                                <td class="item"><span class="icon s7-portfolio"></span>Nama </td>
                                <td style="padding-left: 10px;"><?= $pengumumans['nama']; ?></td>

                            </tr>
                            <tr>
                                <td>Jenis Kelamin </td>
                                <td style="padding-left: 10px;"><?= $pengumumans['jenis_kelamin']; ?></td>


                            </tr>
                            <tr>
                                <td>Alamat </td>
                                <td style="padding-left: 10px;"> <?= $pengumumans['alamat']; ?></td>

                            </tr>
                        </tbody>
                    </table>

                    <br>
                    <table id="table1" class="table table-striped table-bordered table-hover table-fw-widget text-center">
                        <thead>
                            <tr>
                                <th class="text-center">Hasil Pengumuman</th>

                            </tr>
                        </thead>
                        <tbody>
                            <tr>

                                <td>
                                    <?php if ($pengumumans['status'] == null) {
                                        echo "Belum Tersedia";
                                    } else {

                                        $pengumumans['status'];
                                    }
                                    ?>
                                </td>


                                <!-- <td> Anda dinyatakan <?= $pengumumans['status']; ?>!!!</td> -->

                            </tr>

                        </tbody>
                    </table>

                </div>
                <br>
                <br> <br> <br> <br>
                <br>
            </div>

        </div>





    </div>
</div>
</div>