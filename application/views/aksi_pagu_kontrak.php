<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?= base_url('assets/dropify/css/') . 'dropify.css'; ?>">

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title><?php echo $title; ?></title>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/min/dropzone.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/min/basic.min.css">

</head>

<div class="content-wrapper">
    <section class="content-header">
        <h1>
            Upload Bukti
            <small>Control panel</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Upload Bukti</li>
        </ol>
    </section>

    <font size="2" face="Arial">
        <section class="content">
            <div class="row">
                <div class="col-md-12">
                    <section class="panel">
                        <div class="panel-body">
                            <form class="form-horizontal tasi-form" method="post" action="monitoring_submit.php">
                                <div class="form-group">


                                    <div class="form-group">
                                        <?php foreach ($aksi_kontrak as $ak) { ?>

                                            <label class="col-sm-2 col-sm-2 control-label">Vendor</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" name="var_no_spj" id="var_no_spj" disabled value="<?php echo $ak->VENDOR_ID ?>">
                                                <?= form_error('var_no_spj', '<small class="text-danger">', '</small>'); ?>
                                            </div>
                                        <?php } ?>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-sm-2 col-sm-2 control-label">Paket</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="var_no_surat_ptsp" id="var_no_surat_ptsp" placeholder="Nomor Surat Ke PTSP">
                                            <?= form_error('var_no_surat_ptsp', '<small class="text-danger">', '</small>'); ?>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-sm-2 col-sm-2 control-label">Pagu Kontrak</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="var_no_surat_ptsp" id="var_no_surat_ptsp" placeholder="Nomor Surat Ke PTSP">
                                            <?= form_error('var_no_surat_ptsp', '<small class="text-danger">', '</small>'); ?>
                                        </div>
                                    </div>

                                    <form action="" method="post" enctype="multipart/form-data">

                                        <div class="form-group">

                                        </div>
                                        <input type="button" class="btn btn-info" value="Kembali" onclick="history.back(-1)" />
                                        <button type="submit" class="btn btn-primary">Submit</button>

                                    </form>

                                    <script src="<?= base_url('assets/bootstrap/jquery/') . 'jquery3.js'; ?>"></script>
                                    <script src="<?= base_url('assets/bootstrap/js/') . 'bootstrap.js'; ?>"></script>
                                    <script src="<?= base_url('assets/dropify/js/') . 'dropify.js'; ?>"></script>
                                </div>
                            </form>
                        </div>
                    </section>
                </div>
            </div>
        </section><!-- /.content -->
</div>




</html>