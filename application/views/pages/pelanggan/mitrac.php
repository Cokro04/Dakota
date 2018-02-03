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
                      <th>Kategori</th>
                      <th>Telpon</th>
                      <th>Fax</th>
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
          <h4 class="modal-title">Data Pelanggan</h4>
        </div>
        <div class="modal-body">
            <form class="form-horizontal" role="form" method="post" action="">
              <div class="box-body ">
                <div class="col-sm-6">
                  <h4>Address Information</h4><hr>
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-3 control-label">Nama</label>
                    <div class="col-sm-9">
                      <input type="email" class="form-control" id="inputEmail3" placeholder="Nama">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-3 control-label">Alamat</label>
                    <div class="col-sm-9">
                      <textarea class="form-control">
                        
                      </textarea>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-3 control-label">Provinsi</label>
                    <div class="col-sm-9">
                      <select class="form-control" id="inputEmail3" >
                        <option value="">Pilih Provinsi</option>
                      </select>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-3 control-label">Kota</label>
                    <div class="col-sm-9">
                      <select class="form-control" id="inputEmail3" >
                        <option value="">Pilih Kota</option>
                      </select>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-3 control-label">Kode Pos</label>
                    <div class="col-sm-9">
                      <input type="email" class="form-control" id="inputEmail3" placeholder="Kode Pos">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-3 control-label">Kategori</label>
                    <div class="col-sm-9">
                      <select class="form-control" id="inputEmail3" >
                        <option value="">Member Biasa</option>
                      </select>
                    </div>
                  </div>
                </div>

                <div class="col-sm-6">
                  <h4>Contact Person</h4><hr>
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-3 control-label">No Telpon</label>
                    <div class="col-sm-6">
                      <input type="email" class="form-control" id="inputEmail3" placeholder="No Telpon">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-3 control-label">No Fax</label>
                    <div class="col-sm-6">
                      <input type="email" class="form-control" id="inputEmail3" placeholder="No Fax">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-3 control-label">Email</label>
                    <div class="col-sm-6">
                      <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-3 control-label">Website</label>
                    <div class="col-sm-6">
                      <input type="email" class="form-control" id="inputEmail3" placeholder="Website">
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