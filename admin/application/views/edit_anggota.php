<div class="container">
    <div class="mt-4">
        <h1 class="text-center">Edit Anggota</h1>
        <div class="my-3 px-4 py-4 m-auto" style="width: 1000px; background-color: #f0f0f0; border: solid 1px; border-color: #b8b8b8; border-radius: 10px;">
            <form action="<?php echo base_url('anggota/simpan') ?>" method="post">
                <input type="hidden" name="id_anggota" value="<?php echo $anggota['id_anggota'] ?>">
                <div class="mb-3">
                    <label>Nama</label>
                    <input type="text" name="nama" class="form-control" value="<?php echo set_value("nama", $anggota['nama']) ?>" required>
                </div>
                <div class="mb-3">
                    <label>No Telepon</label>
                    <input type="text" name="no_telepon" class="form-control" value="<?php echo set_value("no_telepon", $anggota['no_telepon']) ?>" required>
                </div>
                <div class="mb-3">
                    <label>Alamat</label>
                    <textarea class="form-control" name="alamat" required><?php echo set_value("alamat", $anggota['alamat']) ?></textarea>
                </div>
                <div class="mb-3">
                    <label>Jabatan</label>
                    <?php $selected = set_value('jabatan', $anggota['jabatan']); ?>
                    <select class="form-control" name="jabatan" required>
                        <option value="Ketua" <?php echo $selected == 'Ketua' ? 'selected' : '' ?>>Ketua</option>
                        <option value="Wakil Ketua" <?php echo $selected == 'Wakil Ketua' ? 'selected' : '' ?>>Wakil Ketua</option>
                        <option value="Sekretaris" <?php echo $selected == 'Sekretaris' ? 'selected' : '' ?>>Sekretaris</option>
                        <option value="Bendahara" <?php echo $selected == 'Bendahara' ? 'selected' : '' ?>>Bendahara</option>
                        <option value="Koordinator Program" <?php echo $selected == 'Koordinator Program' ? 'selected' : '' ?>>Koordinator Program</option>
                        <option value="Koordinator Lapangan" <?php echo $selected == 'Koordinator Lapangan' ? 'selected' : '' ?>>Koordinator Lapangan</option>
                        <option value="Anggota" <?php echo $selected == 'Anggota' ? 'selected' : '' ?>>Anggota</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label>Keterangan</label>
                    <textarea class="form-control" name="keterangan" required><?php echo set_value("keterangan", $anggota['keterangan']) ?></textarea>
                </div>
                <div class="mb-3">
                    <label>Foto Anggota</label>
                    <input type="file" name="foto_anggota" class="form-control">
                </div>
                <div style="text-align: end;">
                    <button class="btn btn-success" type="submit" style="width: 20%;">Kirim</button>
                </div>
            </form>
        </div>
    </div>
</div>