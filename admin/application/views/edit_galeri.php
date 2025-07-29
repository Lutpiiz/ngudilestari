<div class="container">
    <div class="mt-4">
        <h1 class="text-center">Edit Galeri</h1>
        <div class="my-3 px-4 py-4 m-auto" style="width: 1000px; background-color: #f0f0f0; border: solid 1px; border-color: #b8b8b8; border-radius: 10px;">
            <form action="<?php echo base_url('galeri/simpan') ?>" method="post" enctype="multipart/form-data">
                <input type="hidden" name="id_galeri" value="<?php echo $galeri['id_galeri'] ?>">
                <div class="mb-3">
                    <label>Nama Kegiatan</label>
                    <input type="text" name="nama_kegiatan" class="form-control" value="<?php echo set_value("nama_kegiatan", $galeri['nama_kegiatan']) ?>" required>
                </div>
                <div class="mb-3">
                    <label>Tanggal Kegiatan</label>
                    <input type="date" name="tanggal_kegiatan" class="form-control" value="<?php echo set_value("tanggal_kegiatan", $galeri['tanggal_kegiatan']) ?>" required>
                </div>
                <div class="mb-3">
                    <label>Deskripsi Kegiatan</label>
                    <textarea class="form-control" name="deskripsi_kegiatan" required><?php echo set_value("deskripsi_kegiatan", $galeri['deskripsi_kegiatan']) ?></textarea>
                </div>
                <div class="mb-3">
                    <label>Foto Kegiatan</label>
                    <input type="file" name="foto_kegiatan" class="form-control" value="<?php echo set_value("foto_kegiatan", $galeri['foto_kegiatan']) ?>">
                </div>
                <div style="text-align: end;">
                    <button class="btn btn-success" type="submit" style="width: 20%;">Kirim</button>
                </div>
            </form>
        </div>
    </div>
</div>