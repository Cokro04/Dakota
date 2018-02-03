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
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                  <tr>
                      <th>No</th>
                      <th>ID</th>
                      <th>Nama</th>
                      <th>Username</th>
                      <th>Level User</th>
                      <th>
                          <div align="center">
                          <a href="<?php echo base_url('userc/manage_data_user');?>" class="btn btn-default btn-xs"> <i class="fa fa-edit"></i> Tambah
                          </a>
                          </div>
                      </th>
                  </tr>
                  </thead>
                  <tbody>
                      <?php
                        $no=1;
                        if(isset($data_user)){
                           foreach($data_user as $row){
                      ?>
                      <tr>
                       <td><?php echo $no++; ?></td>
                       <td><?php echo $row->id_user; ?></td>
                       <td><?php echo $row->nm_user; ?></td>
                       <td><?php echo $row->username; ?></td>
                       <td><?php echo $row->level_user; ?></td>
                       <td>
                          <div align="center">
                          <a href="<?php echo base_url('userc/detail_data_user/'.$row->id_user);?>" class="btn btn-default btn-xs"> <i class="fa fa-eye"></i> Detail
                          </a>
                          <a href="<?php echo base_url('userc/manage_data_user/'.$row->id_user);?>" class="btn btn-default btn-xs"> <i class="fa fa-edit"></i> Ubah
                          </a>
                          <a href="<?php echo base_url('userc/proses_hapus_user/'.$row->id_user);?>" class="btn btn-default btn-xs"> <i class="fa fa-trash-o"></i> Hapus
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
