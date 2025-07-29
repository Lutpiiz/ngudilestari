<div class="container mt-5">
    <h1 style="color: #307e32; font-size: 40px; font-weight:600;" class="text-center">Pengurus Kelompok</h1>
    <div class="row mt-5">
        <?php foreach ($anggota as $key => $value) :  ?>
            <div class="col-md-3 d-flex align-items-stretch">
                <div class="card mb-4 h-100 shadow">
                    <img src="<?php echo $this->config->item('url_anggota') . $value['foto_anggota']; ?>" class="card-img-top" alt="...">
                    <div class="card-body text-center">
                        <p class="card-text"><strong><?php echo $value['nama'] ?></strong></p>
                        <p class="card-text"><?php echo $value['jabatan'] ?></p>
                        <p class="card-text"><?php echo $value['keterangan'] ?></p>
                    </div>
                </div>
            </div>
        <?php endforeach ?>
    </div>
</div>