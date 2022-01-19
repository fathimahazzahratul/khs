<div class="content-wrapper">
<section class="content-header">
      <h1>
        RKAP PLN
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">RKAP PLN</li>
      </ol>
</section>
<section class="content">
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal"><i class="fa fa-plus"></i> Tambah Data Timesheet</button>
    <a class="btn btn-danger " style="float:right; margin:5px;" href="<?php echo base_url('rkap_pln/print') ?>"><i class="fa fa-print"> Print</i></a>
    
    <div class="dropdown inline" style="float:right; margin:5px;  ">
            <button class="btn btn-warning dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
            <i class="fa fa-download"></i>
            Export
            <span class="caret"></span>
            </button>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
            <li><a href="<?php echo base_url('rkap_pln/pdf_wbs') ?>">PDF</a></li>
            <li><a href="<?php echo base_url('rkap_pln/excel') ?>">Excel</a></li>
            </ul>
        </div>
<table class="table table-striped">
            <tr>
                <th>No</th>
                <th>ID Anggaran</th>
                <th>No Surat</th>
                <th>Tanggal</th>
                <th>Nama Pekerjaan</th>
                <th>Pemberi Kerja</th>
                <th>PIC</th>
                <th>Anggaran</th>
                <th colspan="2">Aksi</th>
            </tr>
            <?php 
                    $no = 1;
                        foreach ($rkap_pln as $rp):?>
            <tr>
                <td> <?php echo $no++ ?></td>
                <td> <?php echo $rp->id_anggaran ?></td>
                <td> <?php echo $rp->no_surat ?></td>
                <td> <?php echo $rp->tanggal?></td>
                <td> <?php echo $rp->penugasan_nama ?></td>
                <td> <?php echo $rp->penugasan_kerja ?></td>
                <td> <?php echo $rp->penugasan_pic ?></td>
                <td> <?php echo $rp->anggaran ?></td>
                <td><?php echo anchor('rkap_pln/detail_rkap_pln/'.$rp->id, '<div class="btn btn-success btn-sm"><i class="fa fa-search-plus"></i></div>') ?></td>
                <td onclick="javascript: return confirm('Anda yakin hapus?')"><?php echo anchor('rkap_pln/hapus/'.$rp->id, '<div class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></div>')?></td>        
                <td><?php echo anchor('rkap_pln/edit_rkap_pln/'.$rp->id, '<div class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></div>') ?></td>
            </tr>
            <?php endforeach; ?>
        </table>
    </section>
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel"> Tambah Data RKAP PLN</h4>
      </div>
      <div class="modal-body">
        <form method="post" action="<?php echo base_url().'rkap_pln/tambah_aksi'; ?>">
            <div class="form-group">
                <label>ID Anggaran</label>
                <input type="text" name="id_anggaran" class="form-control">       
            </div>
            <div class="form-group">
                <label>No Surat Penugasan</label>
                <input type="text" name="no_surat" class="form-control">       
            </div>
            <div class="form-group">
                <label>Tanggal</label>
                <input type="date" name="tanggal" class="form-control">       
            </div>
            <div class="form-group">
                <label>Nama Pekerjaan</label>
                <input type="text" name="nama_pekerjaan" class="form-control">       
            </div>
            <div class="form-group">
                <label>Pemberi Kerja</label>
                <input type="text" name="pemberi_kerja" class="form-control">       
            </div>
            <div class="form-group">
                <label>PIC</label>
                <input type="text" name="pic" class="form-control">       
            </div>
            <div class="form-group">
                <label>Anggaran</label>
                <input type="text" name="anggaran" class="form-control">       
            </div>
        <button type="reset" class="btn btn-danger" data-dismiss="modal">Reset</button>
        <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
      </div>
    </div>
  </div>
</div>
</div>