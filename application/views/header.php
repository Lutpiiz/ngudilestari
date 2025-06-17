<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ngudi Lestari</title>
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
</head>

<?php
$controller = $this->router->fetch_class(); // ambil nama controller aktif
$body_class = '';

switch ($controller) {
    case 'welcome':
        $body_color = '#499e4d';
        break;
    case 'tentang':
        $body_color = '#fafafa';
        break;
    case 'program':
        $body_color = '#499e4d';
        break;
    case 'galeri':
        $body_color = '#fafafa';
        break;
    case 'anggota':
        $body_color = '#499e4d';
        break;
    case 'kontak':
        $body_color = '#fafafa';
        break;
    default:
        $body_color = '#499e4d';
        break;
}
?>

<body style="background-color: <?= $body_color ?>;">
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg" style="background-color: #307e32;">
        <div class="container">
            <a class="navbar-brand" href="#">Kelompok Tani Ngudi Lestari</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarText">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url('welcome') ?>">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url('tentang') ?>">Tentang</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url('program') ?>">Program</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url('galeri') ?>">Galeri</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url('anggota') ?>">Anggota</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url('kontak') ?>">Kontak</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>