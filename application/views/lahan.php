<style>
    #map {
        height: 600px;
    }
</style>

<div class="container mt-5">
    <h1 style="color: #307e32; font-size: 40px; font-weight:600;" class="text-center">Peta Lahan</h1>
    <div class="row mt-5">
        <div class="col-md-9">
            <div id="map"></div>
        </div>
        <div class="col-md-3">
            <h3 class="text-center">Keterangan</h3>
            <?php foreach ($lahan as $key => $value) : ?>
                <div style="display: flex; align-items: center; margin-bottom: 5px;">
                    <div style="width: 20px; height: 20px; background-color: <?= $value['warna'] ?>; margin-right: 10px; border: 1px solid #000;"></div>
                    <span>Lahan Milik <?= $value['nama_lahan'] ?></span>
                </div>
            <?php endforeach ?>
        </div>
    </div>
</div>

<script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>
<script>
    var map = L.map('map').setView([-7.983081, 110.300990], 16);

    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '&copy; OpenStreetMap'
    }).addTo(map);

    <?php foreach ($lahan as $l): ?>
        var polygon = L.polygon(<?= $l['koordinat'] ?>, {
            color: '<?= $l['warna'] ?>',
            fillOpacity: 0.5
        }).addTo(map);
        polygon.bindPopup("<b><?= $l['nama_lahan'] ?></b><br><?= $l['deskripsi'] ?><br>Luas: <?= $l['luas'] ?> m²");
    <?php endforeach; ?>
</script>