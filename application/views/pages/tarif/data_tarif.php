  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <?php echo $headerTitle; ?>
        <small><?php echo $formTitle; ?></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#"><?php echo $headerTitle; ?></a></li>
        <li class="active"><?php echo $formTitle; ?></li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title"><?php echo $formTitle; ?></h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                  <tr>
                      <th  valign="center" align="center" rowspan="2">No</th>
                      <th rowspan="2">Kota</th>
                      <th rowspan="2">Layanan</th>
                      <th rowspan="2">Prioritas</th>
                      <th valign="center" align="center" colspan="2">Tarif</th>
                      <th rowspan="2">Berat Minimal (KG)</th>
                      <th colspan="2">Estimasi Waktu</th>
                      <th rowspan="2">
                          <div align="center">
                          <a  data-toggle="modal" data-target="#modal-default" class="btn btn-primary btn-xs"> <i class="fa fa-plus"></i> Tambah
                          </a>
                          </div>
                      </th>
                  </tr>
                  <tr>
                      <th>KG Pertama</th>
                      <th>KG Berikutnya</th>
                      <th>Min</th>
                      <th>Max</th> 
                  </tr>

                  </thead>
                  <tbody>                            
                      <?php
                        $no=1;
                        if(isset($data_batu)){
                           foreach($data_batu as $row){
                      ?>
                      <tr>
                       <td><?php echo $no++; ?></td>

                       <td><img src="<?php echo base_url('uploads/img/'.$row->gambar_batu)?>" height="25px" width="50px"></td>
                       <td><?php echo $row->nm_batu; ?></td>
                       <td><?php echo $row->desk_batu; ?></td>
                       <td>
                          <div align="center">
                          <a href="<?php echo base_url('batuc/manage_data_batu/'.$row->id_batu);?>" class="btn btn-default btn-xs"> <i class="fa fa-edit"></i> Ubah
                          </a>
                          <a href="<?php echo base_url('batuc/proses_hapus_batu/'.$row->id_batu);?>" class="btn btn-default btn-xs"> <i class="fa fa-trash-o"></i> Hapus
                          </a>
                          </div>
                       </td>
                      </tr>
                      <?php }
                        }
                      ?>
                  </tbody>
              </table>
            </div>
          </div>
          <!-- /.box -->
        </div>
        <!--/.col (left) -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <div class="modal fade bs-example-modal-lg" id="modal-default">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title">Tarif Normal</h4>
        </div>
        <div class="modal-body">
            <form class="form-horizontal" role="form" method="post" action="">
              <div class="box-body ">
                <div class="col-sm-6">
                  <h4>Data Wilayah</h4><hr>
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-5 control-label">Kecamatan</label>
                    <div class="col-sm-7">
                      <input type="email" class="form-control" id="inputEmail3" placeholder="Nama">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-5 control-label">Layanan</label>
                    <div class="col-sm-7">
                      <select class="form-control" id="inputEmail3" >
                        <option value="">Pilih Layanan</option>
                      </select>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-5 control-label">Prioritas</label>
                    <div class="col-sm-7">
                      <select class="form-control" id="inputEmail3" >
                        <option value="">Pilih Prioritas</option>
                      </select>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-5 control-label">Berat Minamal (KG)</label>
                    <div class="col-sm-7">
                      <input type="email" class="form-control" id="inputEmail3" placeholder="Berat Minamal (KG)">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-5 control-label">Harga KG Pertama</label>
                    <div class="col-sm-7">
                      <input type="email" class="form-control" id="inputEmail3" placeholder="Harga KG Pertama">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-5 control-label">Harga KG Berikutnya</label>
                    <div class="col-sm-7">
                      <input type="email" class="form-control" id="inputEmail3" placeholder="Harga KG Pertama">
                    </div>
                  </div>
                </div>

                <div class="col-sm-6">
                  <h4>Estimasi Lama Pengiriman</h4><hr>
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-3 control-label">ETA Min</label>
                    <div class="col-sm-9">
                      <input type="email" class="form-control" id="inputEmail3" placeholder="ETA Min">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-3 control-label">ETA Min</label>
                    <div class="col-sm-9">
                      <input type="email" class="form-control" id="inputEmail3" placeholder="ETA Max">
                    </div>
                  </div>
                </div>

              </div>
              <!-- /.box-body -->
            </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Kembali</button>
          <button type="button" class="btn btn-primary">Simpan</button>
        </div>
      </div>
      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
  </div>
  <!-- /.modal -->