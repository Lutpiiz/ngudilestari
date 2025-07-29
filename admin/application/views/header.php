<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ngudi Lestari</title>
    <link rel="stylesheet" href="<?php echo $this->config->item('url_assets') . 'css/style.css' ?>">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/2.3.2/css/dataTables.dataTables.css">
</head>

<body style="background-color: #fafafa;">
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg sticky-top" style="background-color: #307e32;">
        <div class="container">
            <a class="navbar-brand" href="<?php echo base_url('welcome') ?>"><img src="<?php echo $this->config->item('url_image') . 'logo1.png'; ?>" alt="" width="50px" class="me-3"><span style="font-weight: 600;">Admin Ngudi Lestari</span></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarText">
                <ul class="navbar-nav mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url('inventaris') ?>">Inventaris</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url('anggota') ?>">Anggota</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url('galeri') ?>">Galeri</a>
                    </li>

                </ul>
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="">Hi, Admin</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url('logout') ?>">Logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>