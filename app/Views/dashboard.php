<div class="content">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-sm-8 text-left mb-3">
                            <h1 class="card-title">Pemetaan Covid-19 di Indonesia</h1>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-4 mb-2">
                            <div class="text-center text-white bg-info font-weight-bolder">
                                <span class="d-block text-uppercase">Total Kasus Positif</span>
                                <?php foreach ($totalPositif->getResult() as $row) { ?>
                                    <span><?= number_format($row->positif); ?></span>
                                <?php } ?>
                                <span>Kasus</span>
                            </div>
                        </div>
                        <div class="col-4 bg-success mb-2">
                            <div class="text-center text-white font-weight-bolder">
                                <span class="d-block text-uppercase">Total Kasus Sembuh</span>
                                <?php foreach ($totalSembuh->getResult() as $row) { ?>
                                    <span><?= number_format($row->sembuh); ?></span>
                                <?php } ?>
                                <span>Kasus</span>
                            </div>
                        </div>
                        <div class="col-4 mb-2">
                            <div class="text-center text-white bg-danger font-weight-bolder">
                                <span class="d-block text-uppercase">Total Kasus Meninggal</span>
                                <?php foreach ($totalMeninggal->getResult() as $row) { ?>
                                    <span><?= number_format($row->meninggal); ?></span>
                                <?php } ?>
                                <span>Kasus</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div id="mapid" style=" height: 400px;"></div>
                    <p class="text-center mt-1">Update terakhir : 09 Juni 2020 22:03:20 WIB</p>
                    <script>
                        var mymap = L.map('mapid').setView([-1.564728, 117.671526], 5);

                        L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
                            maxZoom: 18,
                            attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, ' +
                                '<a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, ' +
                                'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
                            id: 'mapbox/streets-v11',
                        }).addTo(mymap);


                        <?php foreach ($provinsi as $key => $value) { ?>

                            L.marker([<?= $value['latitude']; ?>, <?= $value['longitude']; ?>]).addTo(mymap)
                                .bindPopup('<h4 class="text-muted"><?= $value['deskripsi']; ?></h4>' +
                                    '<div class="text-info text-center">Kasus Positif : <?= $value['positif']; ?></div>' +
                                    '<div class="text-success text-center">Kasus Sembuh : <?= $value['sembuh']; ?></div>' +
                                    '<div class="text-danger text-center">Kasus Meninggal : <?= $value['meninggal']; ?></div>'
                                );
                        <?php }; ?>
                    </script>
                </div>
            </div>
        </div>
    </div>
</div>