<div class="container">
    <div class="mt-4">
        <div class="row">
            <div class="col-md-auto me-auto">
                <h1>Anggota</h1>
            </div>
            <div class="col-md-auto ms-auto">
                <a href="<?php echo base_url('anggota/tambah') ?>" class="btn btn-success">+ Tambah Data</a>
            </div>
        </div>
        <div>
            <table class="table" id="tabelku">
                <thead>
                    <tr>
                        <th scope="col" style="background-color: #f0f0f0; text-align: center;">No</th>
                        <th scope="col" style="background-color: #f0f0f0; text-align: center;">Nama</th>
                        <th scope="col" style="background-color: #f0f0f0; text-align: center;">Jabatan</th>
                        <th scope="col" style="background-color: #f0f0f0; text-align: center;">No Telepon</th>
                        <th scope="col" style="background-color: #f0f0f0; text-align: center;">Alamat</th>
                        <th scope="col" style="background-color: #f0f0f0; text-align: center;">Foto Anggota</th>
                        <th scope="col" style="background-color: #f0f0f0; text-align: center;">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($anggota as $key => $value) : ?>
                        <tr class="text-center">
                            <td><?php echo $key += 1 ?></td>
                            <td><?php echo $value['nama'] ?></td>
                            <td><?php echo $value['jabatan'] ?></td>
                            <td><?php echo $value['no_telepon']; ?></td>
                            <td><?php echo $value['alamat']; ?></td>
                            <td><img src="<?php echo $this->config->item('url_anggota') . $value['foto_anggota'] ?>" alt="" width="200px"></td>
                            <td>
                                <a href="<?php echo base_url('anggota/edit/' . $value['id_anggota']); ?>" class="btn btn-warning text-white">Edit</a>
                                <a href="#!" onclick="confirmDelete(<?php echo $value['id_anggota']; ?>)" class="btn btn-danger">Hapus</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
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
                window.location.href = "<?php echo base_url('anggota/hapus/'); ?>" + id_inventaris;
            }
        });
    }
</script>