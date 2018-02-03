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
              <h3 class="box-title">Element Form</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" method="post" action="<?php echo base_url('userc/proses_data_user')?>">
              <div class="box-body ">
                <?php if (isset($id)) { ?>
                  <div class="form-group col-md-12">
                    <label>ID</label>
                    <input name="id_user" type="text" class="form-control" value="<?php echo $id; ?>" readonly>
                  </div>

                  <div class="form-group col-md-12">
                    <label>Nama</label>
                    <input name="nm_user" type="text" class="form-control" placeholder="Nama User" required>
                  </div>

                  <div class="form-group col-md-12">
                    <label>Username</label>
                    <input name="username" type="text" class="form-control" placeholder="Username" required>
                  </div>

                  <div class="form-group col-md-12">
                    <label>Level User</label>
                    <select name="level_user" class="form-control" required>
                      <option value="">Pilih Level User</option>
                      <option value="Admin">Admin</option>
                      <option value="Petugas">Petugas</option>
                    </select>
                  </div>

                  <div class="form-group col-md-12">
                    <label>Alamat</label>
                    <input name="alamat_user" type="text" class="form-control" placeholder="Alamat User" required>
                  </div>

                  <div class="form-group col-md-12">
                    <label>No Telp</label>
                    <input name="notelp_user" type="text" class="form-control" placeholder="No Telp User" required>
                  </div>
                <?php } else { ?>
                  <?php
                    $no=1;
                    if(isset($data_user)){
                       foreach($data_user as $row){
                  ?>
                  <div class="form-group col-md-12">
                    <label>ID</label>
                    <input name="id" type="text" class="form-control" value="<?php echo $row->id_user; ?>" readonly>
                  </div>

                  <div class="form-group col-md-12">
                    <label>Nama</label>
                    <input name="nm_user" type="text" class="form-control" placeholder="Nama User" value="<?php echo $row->nm_user; ?>">
                  </div>

                  <div class="form-group col-md-12">
                    <label>Username</label>
                    <input name="username" type="text" class="form-control" placeholder="Username" value="<?php echo $row->username; ?>">
                  </div>

                  <div class="form-group col-md-12">
                    <label>Password</label>
                    <input name="password" type="password" class="form-control" placeholder="Kosongkan Password apabila tidak ingin di ubah">
                  </div>

                  <div class="form-group col-md-12">
                    <label>Level User</label>
                    <select name="level_user" class="form-control" required>
                    <?php if ($row->level_user == 'Admin') { ?>
                      <option value="Admin">Admin</option>
                      <option value="Petugas">Petugas</option>
                    <?php } elseif ($row->level_user == 'Petugas') { ?>
                      <option value="Petugas">Petugas</option>
                      <option value="Admin">Admin</option>
                    <?php } ?>
                    </select>
                  </div>
                  <?php }
                    }
                  ?>

                  <div class="form-group col-md-12">
                    <label>Alamat</label>
                    <input name="alamat_user" type="text" class="form-control" placeholder="Username" value="<?php echo $row->alamat_user; ?>">
                  </div>

                  <div class="form-group col-md-12">
                    <label>No Telp</label>
                    <input name="notelp_user" type="text" class="form-control" placeholder="Username" value="<?php echo $row->notelp_user; ?>">
                  </div>

                <?php } ?>
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="button" class="btn btn-primary">Simpan</button>
                <a href="<?php echo base_url('userc/data_user')?>" type="button" class="btn btn-warning">Kembali</a>
              </div>
            </form>
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
