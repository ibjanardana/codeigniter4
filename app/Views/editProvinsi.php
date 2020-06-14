<div class="content">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h2 class="ml-2">Edit Data Provinsi</h2>
                </div>
                <div class="card-body">
                    <form action="" method="post">
                        <?php foreach ($idProvinsi as $key => $value) { ?>
                            <div class="pr-md-1">
                                <div class="form-group">
                                    <label class="text-secondary ml-2 text-warning font-weight-bold" for="nama_provinsi">Nama Provinsi</label>
                                    <input type="text" name="editDeskripsi" id="nama_provinsi" class="form-control text-secondary" placeholder="Company" readonly value="<?= $value['deskripsi']; ?>">
                                </div>
                            </div>
                            <div class="pr-md-1">
                                <div class="form-group">
                                    <label class="text-secondary ml-2 text-info font-weight-bold" for="kasus_positif">Jumlah Kasus Positif</label>
                                    <input type="text" name="editPositif" id="kasus_positif" class="form-control text-secondary" placeholder="Company" value="<?= $value['positif']; ?>">
                                </div>
                            </div>
                            <div class="pr-md-1">
                                <div class="form-group">
                                    <label class="text-secondary ml-2 text-success font-weight-bold" for="kasus_sembuh">Jumlah Kasus Sembuh</label>
                                    <input type="text" name="editSembuh" id="kasus_sembuh" class="form-control text-secondary" placeholder="Company" value="<?= $value['sembuh']; ?>">
                                </div>
                            </div>
                            <div class="pr-md-1">
                                <div class="form-group">
                                    <label class="text-secondary ml-2 text-danger font-weight-bold" for="kasus_meninggal">Jumlah Kasus Meninggal</label>
                                    <input type="text" name="editMeninggal" id="kasus_meninggal" class="form-control text-secondary" placeholder="Company" value="<?= $value['meninggal']; ?>">
                                </div>
                            </div>
                        <?php } ?>
                        <div class="mb-2">
                            <button type="submit" class="btn btn-primary p-2 my-auto"><i class="tim-icons mr-1 icon-send"></i> Simpan</button>
                            <a href="<?= base_url('provinsi'); ?>" class="btn btn-info p-2 my-auto"><i class="tim-icons mr-1 icon-refresh-01"></i> Back</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>