<div class="container mt-5">
    <h1 style="color: #307e32; font-size: 40px; font-weight:600;" class="text-center">Galeri Kegiatan</h1>
    <div class="row mt-5">
        <?php foreach ($galeri as $key => $value) :  ?>
            <div class="col-4">
                <div class="card mb-4">
                    <img src="<?php echo $this->config->item('url_program') . $value['foto_kegiatan']; ?>" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text"><strong><?php echo $value['nama_kegiatan'] ?></strong></p>
                        <p class="card-text"><?php echo date('d F Y', strtotime($value['tanggal_kegiatan'])); ?></p>
                        <p class="card-text"><?php echo $value['deskripsi_kegiatan'] ?></p>
                    </div>
                </div>
            </div>
        <?php endforeach ?>
    </div>
</div>