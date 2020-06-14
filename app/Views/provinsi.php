<div class="content">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h1 class="card-title">Data Provinsi</h1>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table tablesorter" id="">
                            <thead class="text-primary">
                                <tr>
                                    <th>No</th>
                                    <th class="text-warning">Nama Provinsi</th>
                                    <th class="text-info">Kasus Positif</th>
                                    <th class="text-success">Kasus Sembuh</th>
                                    <th class="text-danger">Kasus Meninggal</th>
                                    <th class="text-primary">Opsi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 1; ?>
                                <?php foreach ($provinsi as $key => $value) { ?>
                                    <tr>
                                        <td><?= $no++; ?></td>
                                        <td><?= $value['deskripsi']; ?></td>
                                        <td><?= $value['positif']; ?></td>
                                        <td><?= $value['sembuh']; ?></td>
                                        <td><?= $value['meninggal']; ?></td>
                                        <td>
                                            <a href="" rel="tooltip" title="Detail" class="btn btn-primary p-2"><i class="tim-icons mx-auto my-auto icon-zoom-split"></i></a>
                                            <a href="<?= base_url('provinsi'); ?>/<?= $value['id_provinsi'] . '/edit' ?>" rel="tooltip" title="Edit" class="btn btn-warning p-2"><i class="tim-icons mx-auto my-auto icon-pencil"></i></a>
                                            <a href="" rel="tooltip" title="Hapus" class="btn btn-danger p-2"><i class="tim-icons mx-auto my-auto icon-trash-simple"></i></a>
                                        </td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>