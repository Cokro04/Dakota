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
                <li><a href="<?php echo base_url('provc/data_prov') ?>"><?php echo $headerTitle2; ?></a></li>
                <li class="active"><?php echo $formTitle; ?></li>
              </ol>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                  <tr>
                      <th>No</th>
                      <th>Kota</th>
                      <th>
                          <div align="center">
                          Aksi
                          </div>
                      </th>
                  </tr>
                  </thead>
                  <tbody>
                      <?php
                        $no=1;
                        if(isset($data_kota)){
                           foreach($data_kota as $row){
                      ?>
                      <tr>
                       <td><?php echo $no++; ?></td>
                       <td><?php echo $row->nama; ?></td>
                       <td>
                          <div align="center">
                          <a  data-toggle="modal" data-target="#modal-ubah-<?php echo $row->propinsiid; ?>" class="btn btn-default btn-xs"> <i class="fa fa-edit"></i> Ubah
                          </a>
                          <a href="<?php echo base_url('kotac/proses_hapus_kota/'.$row->propinsiid.'/'.$row->propinsikotaid);?>" class="btn btn-default btn-xs"> <i class="fa fa-trash-o"></i> Hapus
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

  <div class="modal fade" id="modal-default">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title">Tambah Kota Provinsi </h4>
        </div>
        <form class="form-horizontal" role="form" method="post" action="<?php echo base_url('provc/proses_simpan_propinsi')?>" enctype="multipart/form-data">
        <input type="hidden" name="create_date" value="<?php echo date('Y-m-d h:m:s'); ?>"></input>
        <input type="hidden" name="create_userid" value="<?php echo $this->session->userdata('ID') ?>"></input>
        <input type="hidden" name="update_date" value="<?php echo date('Y-m-d h:m:s'); ?>"></input>
        <input type="hidden" name="update_userid" value="<?php echo $this->session->userdata('ID') ?>"></input>
          <div class="modal-body">
            <div class="box-body ">
              <div class="form-group">
                <label for="inputEmail3" class="col-sm-2 control-label">Kota</label>
                <div class="col-sm-6">
                  <input name="nama" type="text" class="form-control" placeholder="Kota">
                </div>
              </div>
            </div>
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
    if(isset($data_kota)){
       foreach($data_kota as $row){
  ?>
  <div class="modal fade" id="modal-ubah-<?php echo $row->propinsiid; ?>">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title">Ubah Kota</h4>
        </div>
        <form class="form-horizontal" role="form" method="post" action="<?php echo base_url('kotac/proses_ubah_kota')?>" enctype= "multipart/form-data">
        <input type="hidden" name="propinsikotaid" value="<?php echo $row->propinsikotaid; ?>"></input>        
        <input type="hidden" name="propinsiid" value="<?php echo $row->propinsiid; ?>"></input>        
        <input type="hidden" name="create_date" value="<?php echo date('Y-m-d h:m:s'); ?>"></input>
        <input type="hidden" name="create_userid" value="<?php echo $this->session->userdata('ID') ?>"></input>
        <input type="hidden" name="update_date" value="<?php echo date('Y-m-d h:m:s'); ?>"></input>
        <input type="hidden" name="update_userid" value="<?php echo $this->session->userdata('ID') ?>"></input>
          <div class="modal-body">
            <div class="box-body ">
              <div class="form-group">
                <label for="inputEmail3" class="col-sm-2 control-label">Kota</label>
                <div class="col-sm-6">
                  <input name="nama" type="text" class="form-control" value="<?php echo $row->nama; ?>">
                </div>
              </div>
            </div>
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
  <?php }
    }
  ?>
<style type="text/css">
  .data_kota {
    position: absolute;
    top: 0;
    right: 50%;
    bottom: 0;
    left: 0;
    z-index: 10040;
    overflow: auto;
    overflow-y: auto;
  }

  .ubah_kota {
    position: absolute;
    top: 0;
    right: 0
    bottom: 0;
    left: 0;
    z-index: 10040;
    overflow: auto;
    overflow-y: auto;
  }
</style>