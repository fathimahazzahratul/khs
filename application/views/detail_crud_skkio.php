<link rel="stylesheet" href="https://cdn.datatables.net/1.11.4/css/jquery.dataTables.min.css">
                  <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
                  <script src="https://cdn.datatables.net/1.11.4/js/jquery.dataTables.min.js"></script>

                  <!--  Button untuk copy, csv, excel -->
                  <link rel="stylesheet" href="https://cdn.datatables.net/1.11.4/css/jquery.dataTables.min.css">
                  <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.2.2/css/buttons.dataTables.min.css">

                  <!-- <script>
                    $(document).ready(function() {
                      $('#example').DataTable();
                    });
                  </script> -->


                  <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
                  <script type="text/javascript" src="https://cdn.datatables.net/1.11.4/js/jquery.dataTables.min.js"></script>
                  <script type="text/javascript" src="https://cdn.datatables.net/buttons/2.2.2/js/dataTables.buttons.min.js"></script>
                  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
                  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
                  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
                  <script type="text/javascript" src="https://cdn.datatables.net/buttons/2.2.2/js/buttons.html5.min.js"></script>
                  <script type="text/javascript" src="https://cdn.datatables.net/buttons/2.2.2/js/buttons.print.min.js"></script>
<div class="content-wrapper">
  <section class="content-header">
    <h1>
      Detail Data SKKI/O
      <small>Control panel</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
   
    </ol>
  </section>


  <section class="content">
    <div class="row">
      <div class="col-md-12">
        <section class="panel">


          <div class="panel-body table-responsive">
            <font size="2" face="Arial">
              <?php $key=$this->db->query("select * from tb_skko_i where SKKI_ID='$ID'");
              $row = $key->row();?>
              <table class="table table-striped">
                <tr>
                  <td>No</td>
                  <td><?php echo $row->SKKI_ID ?></td>
                </tr>
                <tr>
                  <td>SKKI JENIS</td>
                  <td><?php echo $row->SKKI_JENIS ?></td>
                </tr>
                <tr>
                  <td>SKKI NO</td>
                  <td><?php echo $row->SKKI_NO ?></td>
                </tr>
                <tr>
                  <td>NAMA AREA</td>
                  <td><?php echo $row->AREA_KODE ?></td>
                </tr>
                <tr>
                  <td>SKKI NILAI</td>
                  <td><?php echo $row->SKKI_NILAI ?></td>
                </tr>
                <tr>
                  <td>SKKI TERPAKAI</td>
                  <td><?php echo $row->SKKI_TERPAKAI ?></td>
                </tr>
                <tr>
                  <td>SKKI TANGGAL</td>
                  <td><?php echo $row->SKKI_TANGGAL ?></td>
                </tr>
              </table>
              <table id="example" class="table table-striped table-bordered table-responsive mb-5" cellspacing="0">
                <h5>Tabel History sebelumnya</h5>
                <!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal"><i class="fa fa-plus"></i> Tambah Data SKKI/O</button> -->
                <thead>
                  <tr>
                    <th>No</th>
                    <th>SKKI JENIS</th>
                    <th>SKKI NO</th>
                    <th>NAMA AREA</th>
                    <th>SKKI NILAI</th>
                    <th>SKKI TERPAKAI</th>
                    <th>SKKI TANGGAL</th>
                    <th>TANGGAL UPDATE</th>
                  </tr>

                </thead>

                <tbody>
                  <?php
                  $no = 1;
                  $key = $this->db->query("select tb_history_skkio_baru.*,tb_skko_i.*,tb_area.AREA_NAMA from tb_history_skkio_baru 
                  inner join tb_skko_i on tb_skko_i.SKKI_ID=tb_history_skkio_baru.SKKI_ID 
                  inner join tb_area on tb_area.AREA_KODE=tb_history_skkIO_baru.AREA_KODE
                  WHERE tb_history_skkio_baru.SKKI_ID='$ID' group by tb_history_skkio_baru.AREA_KODE");
                  // var_dump($crud_skkio);
                  foreach ($key->result() as $cs) {
                  ?>
                    <tr>
                      <td> <?php echo $no ?></td>
                      <td> <?php echo $cs->SKKI_JENIS ?></td>
                      <td> <?php echo $cs->SKKI_NO ?></td>
                      <td> <?php echo $cs->AREA_NAMA ?></td>
                      <td> <?php echo 'Rp ' . number_format($cs->SKKI_NILAI, 0, ',', '.') ?></td>
                      <td> <?php echo 'Rp ' . number_format($cs->SKKI_TERPAKAI, 0, ',', '.') ?></td>
                      <td> <?php echo $cs->SKKI_TANGGAL  ?></td>
                      <td><?php echo $cs->DATE ?></td>
                      

                    </tr>
                  <?php $no++;} ?>

                  
                  
                </tbody>
              </table>
              <br>
              <br>
              <br>
              <br>
              <br>

              <table id="history" class="table table-striped table-bordered table-responsive" cellspacing="0">
              <h5>Tabel History Terbaru</h5>
                <!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal"><i class="fa fa-plus"></i> Tambah Data SKKI/O</button> -->
                <thead>
                  <tr>
                    <th>No</th>
                    <th>SKKI JENIS</th>
                    <th>SKKI NO</th>
                    <th>NAMA AREA</th>
                    <th>SKKI NILAI</th>
                    <th>SKKI TERPAKAI</th>
                    <th>SKKI TANGGAL</th>
                    <th>TANGGAL UPDATE</th>
                  </tr>

                </thead>

                <tbody>
                  <?php
                  $no = 1;
                  $key = $this->db->query("select tb_history_skkio.*,tb_skko_i.*,tb_area.AREA_NAMA from tb_history_skkio 
                  inner join tb_skko_i on tb_skko_i.SKKI_ID=tb_history_skkio.SKKI_ID 
                  inner join tb_area on tb_area.AREA_KODE=tb_skko_i.AREA_KODE
                  WHERE tb_history_skkio.SKKI_ID='$ID'");
                  // var_dump($crud_skkio);
                  foreach ($key->result() as $cs) {
                  ?>
                    <tr>
                      <td> <?php echo $no ?></td>
                      <td> <?php echo $cs->SKKI_JENIS ?></td>
                      <td> <?php echo $cs->SKKI_NO ?></td>
                      <td> <?php echo $cs->AREA_NAMA ?></td>
                      <td> <?php echo 'Rp ' . number_format($cs->SKKI_NILAI, 0, ',', '.') ?></td>
                      <td> <?php echo 'Rp ' . number_format($cs->SKKI_TERPAKAI, 0, ',', '.') ?></td>
                      <td> <?php echo $cs->SKKI_TANGGAL  ?></td>
                      <td><?php echo $cs->DATE ?></td>
                      

                    </tr>
                  <?php $no++;} ?>

                  

                  
                </tbody>
              </table>
          </div>
        </section>
      </div>
  </section>
  <script type="text/javascript">
                    $('#example').DataTable({
                      dom: 'lBfrtip',
                      buttons: [{
                          extend: 'copy',
                          oriented: 'potrait',
                          download: 'open',
                          widthX: '90px'
                        },
                        'csv', 'excel', 'pdf', 'print'
                      ]
                    });
                  </script>
  <script type="text/javascript">
                    $('#history').DataTable({
                      dom: 'lBfrtip',
                      buttons: [{
                          extend: 'copy',
                          oriented: 'potrait',
                          download: 'open',
                          widthX: '90px'
                        },
                        'csv', 'excel', 'pdf', 'print'
                      ]
                    });
                  </script>

<!-- <div div class="content-wrapper">
    <section class="content">
        <h4><strong> <p style="text-align:center"> Detail Data SKKI/O</p></strong></h4>
        
        <table class="table" >

            <tr>
                <th>No</th>
                <td><?php echo $detail_crud_skkio->SKKI_ID ?></td>
            </tr>

            <tr>
                <th>SKKI JENIS</th>
                <td><?php echo $detail_crud_skkio->SKKI_JENIS ?></td>
            </tr>
            <tr>
                <th>SKKI NO</th>
                <td><?php echo $detail_crud_skkio->SKKI_NO ?></td>
            </tr>
            <tr>
                <th>NAMA AREA</th>
                <td><?php echo $detail_crud_skkio->AREA_KODE?></td>
            </tr>
            <tr>
                <th>SKKI NILAI</th>
                <td><?php echo 'Rp ' . number_format($detail_crud_skkio->SKKI_NILAI, 0, ',', '.')?></td>
            </tr>
            <tr>
                <th>SKKI TERPAKAI</th>
                <td><?php echo 'Rp ' . number_format($detail_crud_skkio->SKKI_TERPAKAI, 0, ',', '.')?></td>
            </tr>
            <tr>
                <th>SKKI TANGGAL</th>
                <td><?php echo $detail_crud_skkio->SKKI_TANGGAL?></td>
            </tr>

        </table>
        </section>


</div>     