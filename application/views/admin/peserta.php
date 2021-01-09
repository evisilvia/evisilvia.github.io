<div class="page-head" style="padding: 5px 20px 10px;">

    <ol class="breadcrumb page-head-nav">

        <li><a href="#">
                <h4>Peserta</h4>
            </a></li>

    </ol>
</div>


<div class="row container-fluid" style="margin-top: -5px;">
    <div class="col-sm-12">
        <div class="panel panel-default ">
            <div class="panel-heading">Peserta

            </div>
            <div class="panel panel-default" style="
    margin-top: -26px;
">
                <div class="panel-body">
                    <table id="table1" class="table table-striped table-bordered table-hover table-fw-widget text-center">
                        <thead>
                            <tr>
                                <th class="text-center">No</th>
                                <!-- <th class="text-center">Foto </th> -->
                                <th class="text-center">Nama</th>
                                <th class="text-center">Jenis Kelamin</th>
                                <th class="text-center">Tanggal Lahir</th>
                                <th class="text-center">Alamat</th>
                                <th class="text-center">Tempat Test</th>
                                <th class="text-center">Operasi</th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php $i = 1; ?>
                            <?php foreach ($pesertas as $peserta) : ?>
                                <tr>
                                    <td><?= $i ?>.</td>
                                    <td><?= $peserta->nama ?></td>
                                    <td><?= $peserta->jenis_kelamin ?></td>
                                    <td><?= $peserta->tanggal_lahir ?></td>
                                    <td><?= $peserta->alamat ?></td>
                                    <td><?= $peserta->test ?></td>

                                    <td class="actions">
                                        <a href="<?= base_url('admin/detail_peserta/') . $peserta->id ?>" class="icon"><i class="mdi mdi-eye"></i></a>

                                    </td>
                                </tr>
                                <?php $i++; ?>
                            <?php endforeach; ?>
                        </tbody>


                    </table>
                </div>
            </div>

        </div>