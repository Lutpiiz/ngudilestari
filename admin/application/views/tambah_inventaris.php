<div class="container-fluid row" style="margin-bottom: -100px;">
    <div class="col-md-2 bg-white p-5 shadow">
        <a href="<?php echo base_url('inventaris') ?>" class="text-decoration-none text-dark fs-5"><i class="fa-solid fa-inbox me-1" style="width: 20px;"></i>Barang</a><br>
        <a href="<?php echo base_url('inventaris/pinjam') ?>" class="text-decoration-none text-dark fs-5"><i class="fa-solid fa-file-lines me-1" style="width: 20px;"></i>Peminjaman</a>
    </div>
    <div class="col-md-10">
        <div class="mt-4">
            <h1 class="text-center">Tambah Inventaris</h1>
            <div class="my-3 px-4 py-4 m-auto" style="width: 1000px; background-color: #f0f0f0; border: solid 1px; border-color: #b8b8b8; border-radius: 10px;">
                <form action="<?php echo base_url('inventaris/tambahkan') ?>" method="post">
                    <div class="mb-3">
                        <label>Nama Barang</label>
                        <input type="text" name="nama_barang" class="form-control" value="<?php echo set_value("nama_barang") ?>" required>
                    </div>
                    <div class="mb-3">
                        <label>Asal Barang</label>
                        <select class="form-control" id="asal_barang" name="asal_barang" required>
                            <option value="Dana Kelompok Tani">Dana Kelompok Tani</option>
                            <option value="Dana Desa">Dana Desa</option>
                            <option value="Sumbangan Anggota">Sumbangan Anggota</option>
                            <option value="Bantuan Kabupaten">Bantuan Kabupaten</option>
                            <option value="Hibah Pemerintah">Hibah Pemerintah</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label>Jumlah</label>
                        <input type="number" name="jumlah" class="form-control" value="<?php echo set_value("jumlah") ?>" required>
                    </div>
                    <div class="mb-3">
                        <label>Harga Barang</label>
                        <input type="number" name="harga_barang" class="form-control" value="<?php echo set_value("harga_barang") ?>" required>
                    </div>
                    <div class="mb-3">
                        <label>Kondisi Barang</label>
                        <select class="form-control" id="kondisi_barang" name="kondisi_barang" required>
                            <option value="Baik">Baik</option>
                            <option value="Layak">Layak</option>
                            <option value="Rusak">Rusak</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label>Foto Barang</label>
                        <input type="file" name="foto_barang" class="form-control" value="<?php echo set_value("foto_barang") ?>">
                    </div>
                    <div class="mb-3">
                        <label>Tanggal Perolehan</label>
                        <input type="date" name="tanggal_perolehan" class="form-control" value="<?php echo set_value("tanggal_perolehan") ?>" required>
                    </div>
                    <div style="text-align: end;">
                        <button class="btn btn-success" type="submit" style="width: 20%;">Kirim</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>