  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <?php echo $headerTitle; ?>
        <small><?php echo $formTitle; ?></small>
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li><a href="#"><?php echo $headerTitle; ?></a></li>
                <li class="active"><?php echo $formTitle; ?></li>
              </ol>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                  <tr>
                      <th>No</th>
                      <th>Negara</th>
                      <th>Zona</th>
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
                        if(isset($data_negara)){
                           foreach($data_negara as $row){
                      ?>
                      <tr>
                       <td><?php echo $no++; ?></td>
                       <td><?php echo $row->nama; ?></td>
                       <td><?php echo $row->zona; ?></td>
                       <td>
                          <div align="center">
                          <a  data-toggle="modal" data-target="#modal-ubah<?php echo $row->negaraid; ?>" class="btn btn-default btn-xs"> <i class="fa fa-edit"></i> Ubah
                          </a>
                          <a href="<?php echo base_url('batuc/proses_hapus_negara/'.$row->negaraid);?>" class="btn btn-default btn-xs"> <i class="fa fa-trash-o"></i> Hapus
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

  <!-- /.modal -->
  <div class="modal fade" id="modal-default">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title">Tambah Negara</h4>
        </div>
        <form role="form" method="post" action="<?php echo base_url('negarac/proses_simpan_negara')?>" enctype= "multipart/form-data">
          <input type="hidden" name="create_date" value="<?php echo date('Y-m-d h:m:s'); ?>"></input>
          <input type="hidden" name="create_userid" value="<?php echo $this->session->userdata('ID') ?>"></input>
          <input type="hidden" name="update_userid" value="<?php echo $this->session->userdata('ID') ?>"></input>
          <div class="modal-body">
            <div class="box-body ">
              <div class="form-group col-md-6">
                <label>Negara</label>
                <input name="nama" type="text" class="form-control" required>
              </div>
              <div class="form-group col-md-6">
                <label>Zona</label>
                <input name="zona" type="text" class="form-control" required>
              </div>
            </div>
            <!-- /.box-body -->
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Kembali</button>
            <button type="submit" class="btn btn-primary">Simpan</button>
          </div>
        </form>
      </div>
      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
  </div>
  <!-- /.modal -->
  <?php
    $no=1;
    if(isset($data_negara)){
       foreach($data_negara as $row){
  ?>
  <!-- /.modal -->
  <div class="modal fade" id="modal-ubah<?php echo $row->negaraid; ?>">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title">Tambah Negara</h4>
        </div>
        <form role="form" method="post" action="<?php echo base_url('negarac/proses_ubah_negara')?>" enctype= "multipart/form-data">
          <input type="hidden" name="negaraid" value="<?php echo $row->negaraid ?>"></input>
          <input type="hidden" name="update_userid" value="<?php echo $this->session->userdata('ID') ?>"></input>
          <div class="modal-body">
            <div class="box-body ">
              <div class="form-group col-md-6">
                <label>Negara</label>
                <input name="nama" type="text" class="form-control" value="<?php echo $row->nama ?>" required>
              </div>
              <div class="form-group col-md-6">
                <label>Zona</label>
                <input name="zona" type="text" class="form-control" value="<?php echo $row->zona ?>" required>
              </div>
            </div>
            <!-- /.box-body -->
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Kembali</button>
            <button type="submit" class="btn btn-primary">Simpan</button>
          </div>
        </form>
      </div>
      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
  </div>
  <!-- /.modal -->
    <?php }
    }
  ?>
