<?= $this->session->flashdata('message'); ?>
<div class="page-head" style="padding: 5px 20px 10px;">

    <ol class="breadcrumb page-head-nav">

        <li><a href="#">
                <h4>Profil</h4>
            </a></li>

    </ol>
</div>



<div class="user-profile container-fluid">
    <!-- Awal Profile -->
    <div class="user-info-list panel panel-default">
        <!-- <div class="panel-heading panel-heading-divider">Profil Santri</div> -->
        <div class="row panel-body">
            <div class="row">
                <div class="col-md-7">
                    <div class="panel-heading panel-heading-divider">Profil Santri</div>
                    <div class="panel-body">
                        <table class="no-border no-strip skills">
                            <tbody class="no-border-x no-border-y">
                                <tr>
                                    <td class="icon"><span class="mdi mdi-account"></span></td>
                                    <td class="item"><span class="icon s7-portfolio"></span>Nama</td>

                                    <td><?= $profils['nama']; ?></td>
                                </tr>
                                <tr>
                                    <td class="icon"><span class="mdi mdi-male-female"></span></td>
                                    <td class="item"><span class="icon s7-portfolio"></span>Jenis Kelamin</td>

                                    <td><?= $profils['jenis_kelamin']; ?></td>
                                </tr>
                                <tr>
                                    <td class="icon"><span class="mdi mdi-cake"></span></td>
                                    <td class="item">Tanggal Lahir<span class="icon s7-gift"></span></td>

                                    <td><?= $profils['tanggal_lahir']; ?></td>
                                </tr>
                                <tr>
                                    <td class="icon"><span class="mdi mdi-smartphone-android"></span></td>
                                    <td class="item">Nomor Kontak<span class="icon s7-phone"></span></td>

                                    <td><?= $profils['no_telp']; ?></td>
                                </tr>
                                <tr>
                                    <td class="icon"><span class="mdi mdi-globe-alt"></span></td>
                                    <td class="item">Alamat<span class="icon s7-map-marker"></span></td>

                                    <td><?= $profils['alamat']; ?></td>
                                </tr>
                                <tr>
                                    <td class="icon"><span class="mdi mdi-pin"></span></td>
                                    <td class="item">Tempat Test<span class="icon s7-pin"></span></td>

                                    <td><?= $profils['test']; ?></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="col-md-7">
                    <div class="panel-heading panel-heading-divider">Kontak Orang Tua</div>
                    <div class="panel-body">
                        <table class="no-border no-strip skills">
                            <tbody class="no-border-x no-border-y">
                                <tr>
                                    <td class="icon"><span class="mdi mdi-face"></span></td>
                                    <td class="item">Nama Orang Tua<span class="icon s7-face"></span></td>

                                    <td><?= $profils['nama_orangtua']; ?></td>
                                </tr>
                                <tr>
                                    <td class="icon"><span class="mdi mdi-phone"></span></td>
                                    <td class="item">No Telepon Orang Tua<span class="icon s7-phone"></span></td>

                                    <td><?= $profils['no_telp_ortu']; ?></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>