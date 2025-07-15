<div class="container-fluid row" style="margin-bottom: -100px;">
    <div class="col-md-2 bg-white p-5 shadow">
        <a href="<?php echo base_url('inventaris') ?>" class="text-decoration-none text-dark fs-5"><i class="fa-solid fa-inbox me-1" style="width: 20px;"></i>Barang</a><br>
        <a href="<?php echo base_url('inventaris/pinjam') ?>" class="text-decoration-none text-dark fs-5"><i class="fa-solid fa-file-lines me-1" style="width: 20px;"></i>Peminjaman</a>
    </div>
    <div class="col-md-10">
        <div class="mt-4">
            <div class="row">
                <div class="col-md-auto me-auto">
                    <h1>Inventaris</h1>
                </div>
                <div class="col-md-auto ms-auto">
                    <a href="<?php echo base_url('inventaris/tambah') ?>" class="btn btn-success">+ Tambah Data</a>
                </div>
            </div>
            <div>
                <table class="table" id="tabelku">
                    <thead>
                        <tr>
                            <th scope="col" style="background-color: #f0f0f0; text-align: center;">No</th>
                            <th scope="col" style="background-color: #f0f0f0; text-align: center;">Nama Barang</th>
                            <th scope="col" style="background-color: #f0f0f0; text-align: center;">Jumlah</th>
                            <th scope="col" style="background-color: #f0f0f0; text-align: center;">Tanggal Perolehan</th>
                            <th scope="col" style="background-color: #f0f0f0; text-align: center;">Asal Barang</th>
                            <th scope="col" style="background-color: #f0f0f0; text-align: center;">Harga Barang</th>
                            <th scope="col" style="background-color: #f0f0f0; text-align: center;">Kondisi Barang</th>
                            <th scope="col" style="background-color: #f0f0f0; text-align: center;">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($inventaris as $key => $value) : ?>
                            <tr class="text-center">
                                <td><?php echo $key += 1 ?></td>
                                <td><?php echo $value['nama_barang'] ?></td>
                                <td><?php echo $value['jumlah'] ?></td>
                                <td><?php echo date('d F Y', strtotime($value['tanggal_perolehan'])); ?></td>
                                <td><?php echo $value['asal_barang'] ?></td>
                                <td>Rp. <?php echo number_format($value['harga_barang'], 0, ',', '.'); ?></td>
                                <td><?php echo $value['kondisi_barang']; ?></td>
                                <td>
                                    <a href="<?php echo base_url('inventaris/edit/' . $value['id_inventaris']); ?>" class="btn btn-warning text-white">Edit</a>
                                    <a href="#!" onclick="confirmDelete(<?php echo $value['id_inventaris']; ?>)" class="btn btn-danger">Hapus</a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<script>
    function confirmDelete(id_inventaris) {
        Swal.fire({
            title: 'Yakin ingin menghapus?',
            text: "Data yang dihapus tidak dapat dikembalikan!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Ya, hapus!'
        }).then((result) => {
            if (result.isConfirmed) {
                window.location.href = "<?php echo base_url('inventaris/hapus/'); ?>" + id_inventaris;
            }
        });
    }
</script>