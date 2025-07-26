<div class="container">
    <div class="mt-4">
        <h1 class="text-center">Tambah Anggota</h1>
        <div class="my-3 px-4 py-4 m-auto" style="width: 1000px; background-color: #f0f0f0; border: solid 1px; border-color: #b8b8b8; border-radius: 10px;">
            <form action="<?php echo base_url('anggota/tambahkan') ?>" method="post" enctype="multipart/form-data">
                <div class="mb-3">
                    <label>Nama</label>
                    <input type="text" name="nama" class="form-control" value="<?php echo set_value("nama") ?>" required>
                </div>
                <div class="mb-3">
                    <label>No Telepon</label>
                    <input type="text" name="no_telepon" class="form-control" value="<?php echo set_value("no_telepon") ?>" required>
                </div>
                <div class="mb-3">
                    <label>Alamat</label>
                    <textarea class="form-control" name="alamat" value="<?php echo set_value("alamat") ?>" required></textarea>
                </div>
                <div class="mb-3">
                    <label>Jabatan</label>
                    <select class="form-control" name="jabatan" required>
                        <option value="Ketua">Ketua</option>
                        <option value="Wakil Ketua">Wakil Ketua</option>
                        <option value="Sekretaris">Sekretaris</option>
                        <option value="Bendahara">Bendahara</option>
                        <option value="Koordinator Program">Koordinator Program</option>
                        <option value="Koordinator Lapangan">Koordinator Lapangan</option>
                        <option value="Anggota">Anggota</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label>Keterangan</label>
                    <textarea class="form-control" name="keterangan" value="<?php echo set_value("keterangan") ?>" required></textarea>
                </div>
                <div class="mb-3">
                    <label>Foto Anggota</label>
                    <input type="file" name="foto_anggota" class="form-control" value="<?php echo set_value("foto_anggota") ?>">
                </div>
                <div style="text-align: end;">
                    <button class="btn btn-success" type="submit" style="width: 20%;">Kirim</button>
                </div>
            </form>
        </div>
    </div>
</div>