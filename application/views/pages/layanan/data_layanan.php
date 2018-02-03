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
                      <th>No</th>
                      <th>Nama</th>
                      <th>Keterangan</th>
                      <th>
                          <div align="center">
                          <a  data-toggle="modal" data-target="#modal-default" class="btn btn-primary btn-xs"> <i class="fa fa-plus"></i> Tambah
                          </a>
                          </div>
                      </th>
                  </tr>
                  </thead>
                  <tbody>                            
                      <?php
                        $no=1;
                        if(isset($data_layanan)){
                           foreach($data_layanan as $row){
                      ?>
                      <tr>
                       <td><?php echo $no++; ?></td>                       
                       <td><?php echo $row->judul; ?></td>
                       <td><?php echo $row->ringkas; ?></td>
                       <td>
                          <div align="center">
                           <a  data-toggle="modal" data-target="#modal-ubah<?php echo $row->layananid; ?>" class="btn btn-default btn-xs"> <i class="fa fa-edit"></i> Ubah
                          </a>
                          <a href="<?php echo base_url('layananc/proses_hapus_layanan/'.$row->layananid);?>" class="btn btn-default btn-xs"> <i class="fa fa-trash-o"></i> Hapus
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

  <div class="modal fade bs-example" id="modal-default">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title">Layanan</h4>
        </div>
        <div class="modal-body">
            <form class="form-horizontal" role="form" method="post" action="<?php echo base_url('layananc/proses_simpan_layanan')?>" enctype="multipart/form-data">
              <input type="hidden" name="create_date" value="<?php echo date('Y-m-d h:m:s'); ?>"></input>
              <input type="hidden" name="create_userid" value="<?php echo $this->session->userdata('ID') ?>"></input>
              <input type="hidden" name="update_date" value="<?php echo date('Y-m-d h:m:s'); ?>"></input>
              <input type="hidden" name="update_userid" value="<?php echo $this->session->userdata('ID') ?>"></input>
              <input type="hidden" name="tanggalpost" value="<?php echo date('Y-m-d h:m:s'); ?>"></input>
              <div class="box-body ">
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-3 control-label">Nama</label>
                  <div class="col-sm-9">
                    <input type="text" name="judul" class="form-control" id="inputEmail3" placeholder="Nama">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-3 control-label">Ringkas</label>
                  <div class="col-sm-9">
                    <textarea class="form-control" name="alias">
                    </textarea>
                  </div>
                </div>
                 <div class="form-group">
                  <label for="inputEmail3" class="col-sm-3 control-label">ringkas</label>
                  <div class="col-sm-9">
                    <input type="text" name="ringkas" class="form-control" id="inputEmail3" placeholder="">
                  </div>
                </div>
                 <div class="form-group">
                  <label for="inputEmail3" class="col-sm-3 control-label">lengkap</label>
                  <div class="col-sm-9">
                    <input type="text" name="lengkap" class="form-control" id="inputEmail3" placeholder="">
                  </div>
                </div>
                 <div class="form-group">
                  <label for="inputEmail3" class="col-sm-3 control-label">gambar</label>
                  <div class="col-sm-9">
                    <input type="text" name="gambar" class="form-control" id="inputEmail3" placeholder="">
                  </div>
                </div>
                 <div class="form-group">
                  <label for="inputEmail3" class="col-sm-3 control-label">gambar1</label>
                  <div class="col-sm-9">
                    <input type="text" name="gambar1" class="form-control" id="inputEmail3" placeholder="">
                  </div>
                </div>
                   <div class="form-group">
                  <label for="inputEmail3" class="col-sm-3 control-label">published</label>
                  <div class="col-sm-9">
                    <input type="text" name="published" class="form-control" id="inputEmail3" placeholder="">
                  </div>
                </div>
                   <div class="form-group">
                  <label for="inputEmail3" class="col-sm-3 control-label">view</label>
                  <div class="col-sm-9">
                    <input type="text" name="view" class="form-control" id="inputEmail3" placeholder="">
                  </div>
                </div>
              </div>
              <!-- /.box-body -->
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Kembali</button>
          <button type="submit" class="btn btn-primary">Simpan</button>
        </div>
     
      </div>
         </form>
      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
  </div>
  <!-- /.modal -->
     <?php
        $no=1;
        if(isset($data_layanan)){
        foreach($data_layanan as $row){
      ?>
<div class="modal fade bs-example" id="modal-ubah<?php echo $row->layananid; ?>">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title">Ubah Layanan</h4>
        </div>
        <div class="modal-body">
            <form class="form-horizontal" role="form" method="post" action="<?php echo base_url('layananc/proses_ubah_layanan')?>" enctype="multipart/form-data">
              <input type="hidden" name="layananid" value="<?php echo $row->layananid ?>"></input>
              <input type="hidden" name="update_date" value="<?php echo date('Y-m-d h:m:s'); ?>"></input>
              <input type="hidden" name="update_userid" value="<?php echo $this->session->userdata('ID') ?>"></input>
              <input type="hidden" name="tanggalpost" value="<?php echo date('Y-m-d h:m:s'); ?>"></input>
              <div class="box-body ">
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-3 control-label">Nama</label>
                  <div class="col-sm-9">
                    <input type="text" name="judul" class="form-control" id="inputEmail3" value="<?php echo $row->judul ?>">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-3 control-label">Ringkas</label>
                  <div class="col-sm-9">
                    <textarea class="form-control" name="alias">
                    </textarea>
                  </div>
                </div>
                 <div class="form-group">
                  <label for="inputEmail3" class="col-sm-3 control-label">ringkas</label>
                  <div class="col-sm-9">
                    <input type="text" name="ringkas" class="form-control" id="inputEmail3" placeholder="">
                  </div>
                </div>
                 <div class="form-group">
                  <label for="inputEmail3" class="col-sm-3 control-label">lengkap</label>
                  <div class="col-sm-9">
                    <input type="text" name="lengkap" class="form-control" id="inputEmail3" placeholder="">
                  </div>
                </div>
                 <div class="form-group">
                  <label for="inputEmail3" class="col-sm-3 control-label">gambar</label>
                  <div class="col-sm-9">
                    <input type="text" name="gambar" class="form-control" id="inputEmail3" placeholder="">
                  </div>
                </div>
                 <div class="form-group">
                  <label for="inputEmail3" class="col-sm-3 control-label">gambar1</label>
                  <div class="col-sm-9">
                    <input type="text" name="gambar1" class="form-control" id="inputEmail3" placeholder="">
                  </div>
                </div>
                   <div class="form-group">
                  <label for="inputEmail3" class="col-sm-3 control-label">published</label>
                  <div class="col-sm-9">
                    <input type="text" name="published" class="form-control" id="inputEmail3" placeholder="">
                  </div>
                </div>
                   <div class="form-group">
                  <label for="inputEmail3" class="col-sm-3 control-label">view</label>
                  <div class="col-sm-9">
                    <input type="text" name="view" class="form-control" id="inputEmail3" placeholder="">
                  </div>
                </div>
              </div>
              <!-- /.box-body -->
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Kembali</button>
          <button type="submit" class="btn btn-primary">Simpan</button>
        </div>
     
      </div>
         </form>
      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
  </div>
  <!-- /.modal -->
  <?php }
    }
  ?>