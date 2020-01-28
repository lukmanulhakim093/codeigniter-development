<div id="content-wrapper">

    <div class="container-fluid">

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="index.html"><?= $title; ?></a>
            </li>
            <li class="breadcrumb-item active"><?= $title; ?></li>
        </ol>

        <!-- Page Content -->
        <h1><?= $title; ?></h1>
        <hr>
        <a class="btn btn-outline-primary mt-2" href="<?= base_url(); ?>news/create">Post news</a>

        <!-- /.container-fluid -->