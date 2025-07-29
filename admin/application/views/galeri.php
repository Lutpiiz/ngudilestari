<div class="container">
    <div class="mt-4">
        <div class="row">
            <div class="col-md-auto me-auto">
                <h1>Galeri</h1>
            </div>
            <div class="col-md-auto ms-auto">
                <a href="<?php echo base_url('galeri/tambah') ?>" class="btn btn-success">+ Tambah Data</a>
            </div>
        </div>
        <div>
            <table class="table" id="tabelku">
                <thead>
                    <tr>
                        <th scope="col" style="background-color: #f0f0f0; text-align: center;">No</th>
                        <th scope="col" style="background-color: #f0f0f0; text-align: center;">Nama</th>
                        <th scope="col" style="background-color: #f0f0f0; text-align: center;">Tanggal Kegiatan</th>
                        <th scope="col" style="background-color: #f0f0f0; text-align: center;">Deskripsi Kegiatan</th>
                        <th scope="col" style="background-color: #f0f0f0; text-align: center;">Foto Galeri</th>
                        <th scope="col" style="background-color: #f0f0f0; text-align: center;">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($galeri as $key => $value) : ?>
                        <tr class="text-center">
                            <td><?php echo $key += 1 ?></td>
                            <td><?php echo $value['nama_kegiatan'] ?></td>
                            <td><?php echo date('d F Y', strtotime($value['tanggal_kegiatan'])); ?></td>
                            <td><?php echo $value['deskripsi_kegiatan']; ?></td>
                            <td><img src="<?php echo $this->config->item('url_program') . $value['foto_kegiatan'] ?>" alt="" width="200px"></td>
                            <td>
                                <a href="<?php echo base_url('galeri/edit/' . $value['id_galeri']); ?>" class="btn btn-warning text-white">Edit</a>
                                <a href="#!" onclick="confirmDelete(<?php echo $value['id_galeri']; ?>)" class="btn btn-danger">Hapus</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<script>
    function confirmDelete(id_galeri) {
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
                window.location.href = "<?php echo base_url('galeri/hapus/'); ?>" + id_galeri;
            }
        });
    }
</script>