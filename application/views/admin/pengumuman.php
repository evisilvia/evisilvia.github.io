<div class="page-head" style="padding: 5px 20px 10px;">

    <ol class="breadcrumb page-head-nav">

        <li><a href="#">
                <h4>Pengumuman</h4>
            </a></li>

    </ol>
</div>

<?php
if (validation_errors() != false) {
?>
    <div class="alert alert-danger" role="alert">
        <?php echo validation_errors(); ?>
    </div>
<?php
}
?>

<form data-parsley-validate="" novalidate="" enctype="multipart/form-data" class="form-horizontal" method="post" action=<?= base_url('admin/ubahStatus'); ?>>
    <div class="row container-fluid" style="margin-top: -5px;">
        <div class="col-sm-12">
            <div class="panel panel-default ">
                <div class="panel-heading">Pengumuman
                    <div class="tools"><button name="update" class="btn btn-space btn-primary">Simpan</button></a></div>
                </div>
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

                                <th class="text-center">Tempat Tes</th>

                                <th class="text-center">Operasi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1; ?>
                            <?php foreach ($pengumumans as $pengumuman) : ?>
                                <tr>
                                    <input type="hidden" name="id[]" value="<?= $pengumuman->id ?>">
                                    <td><?= $i ?>.</td>
                                    <td><?= $pengumuman->nama ?></td>
                                    <td><?= $pengumuman->jenis_kelamin ?></td>
                                    <td><?= $pengumuman->tanggal_lahir ?></td>
                                    <td><?= $pengumuman->alamat ?></td>
                                    <td><?= $pengumuman->test ?></td>

                                    <td class="actions">
                                        <select class="form-control" id="status" name="status[<?= $pengumuman->id ?>]">
                                            <option value="" <?php if ($pengumuman->status == "") {
                                                                    echo "selected";
                                                                } ?>>Pilih</option>
                                            <option value="Lulus" <?php if ($pengumuman->status == "Lulus") {
                                                                        echo "selected";
                                                                    } ?>>Lulus</option>
                                            <option value="Tidak Lulus" <?php if ($pengumuman->status == "Tidak Lulus") {
                                                                            echo "selected";
                                                                        } ?>>Tidak Lulus</option>
                                        </select>
                                    </td>

                                    <!-- <div class="col-md-6">
                                    <select class="form-control input-sm">
                                        <option>Pilih</option>
                                        <option>Lulus</option>
                                        <option>Tidak Lulus</option>
                                    </select>
                                </div> -->

                                </tr>
                                <?php $i++; ?>
                            <?php endforeach; ?>
                        </tbody>


                    </table>
                </div>
            </div>

        </div>
    </div>
</form>