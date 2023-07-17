<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="description" content="Vali is a responsive and free admin theme built with Bootstrap 4, SASS and PUG.js. It's fully customizable and modular.">
    <!-- Twitter meta-->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:site" content="@pratikborsadiya">
    <meta property="twitter:creator" content="@pratikborsadiya">
    <!-- Open Graph Meta-->
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Vali Admin">
    <meta property="og:title" content="Vali - Free Bootstrap 4 admin theme">
    <meta property="og:url" content="http://pratikborsadiya.in/blog/vali-admin">
    <meta property="og:image" content="http://pratikborsadiya.in/blog/vali-admin/hero-social.png">
    <meta property="og:description" content="Vali is a responsive and free admin theme built with Bootstrap 4, SASS and PUG.js. It's fully customizable and modular.">
    <title>M-Voting</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Main CSS-->
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/main.css'); ?>">
    <!-- Font-icon css-->
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body class="app sidebar-mini">
    <!-- Navbar-->
    <?php $this->load->view('admin/layout/navbar.php'); ?>
    <!-- Sidebar menu-->
    <?php $this->load->view('admin/layout/sidebar'); ?>
    <main class="app-content">
        <div class="app-title">
            <div>
                <h1><i class="fa fa-dashboard"></i> Dashboard</h1>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="tile">
                    <div class="tile-body">
                        <h1>Laporan Data Petugas</h1>
                        <?php
                        if ($this->session->flashdata('success')) { ?>
                            <div class="alert alert-success"><?php echo $this->session->flashdata('success'); ?></div>
                        <?php
                        }
                        ?>
                        <div class="table-responsive">
                            <table class="table table-hover table-bordered" id="sampleTable">
                                <thead>
                                    <tr>
                                        <th>Nomor</th>
                                        <th>Nama</th>
                                        <th>Username</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $no = 1;
                                    foreach ($petugas as $data) : ?>
                                        <tr>
                                            <td><?= $no; ?></td>
                                            <td><?= $data->nama_petugas; ?></td>
                                            <td><?= $data->username; ?></td>
                                        </tr>
                                    <?php $no++;
                                    endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                        <a href="<?= base_url('admin/petugas/cetak'); ?>" target="_blank" class="btn btn-primary">Cetak</a>
                    </div>
                </div>
            </div>

    </main>
    <?php $this->load->view('admin/layout/bottom'); ?>
</body>

</html>