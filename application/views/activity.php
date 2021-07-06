        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Data Aktivitas</h1>
            <a href="<?php echo base_url('activity/new') ?>" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-plus-circle fa-sm text-white-50 mr-1"></i>Tambah Aktivitas</a>
          </div>
          
          <?php 
            echo $this->session->flashdata('msg')
          ?>
          <!-- Table -->
          <table class="table table-hover table-bordered table-responsive-lg">
            <thead>
              <tr>
                <th>No</th>
                <th>Nama Aktivitas</th>
                <th>Status</th>
                <th>Aksi</th>
              </tr>
            </thead>
            <tbody>
              <?php 
                $i=1;
                foreach($activity as $a) : ?>
                <tr>
                  <td><?php echo $i++ ?></td>
                  <td><?php echo $a->name?></td>
                  <td><?php echo $a->status == 0 ? 'Belum Selesai' : 'Selesai';?></td>
                  <td>
                    <a href="<?php echo base_url('activity/update/').$a->id ?>" class="btn btn-sm btn-success m-1"><i class="fas fa-edit"></i></a>
                    <a href="<?php echo base_url('activity/delete/').$a->id ?>" class="btn btn-sm btn-danger m-1"><i class="fas fa-trash"></i></a>
                  </td>
                </tr>
                <?php endforeach;
              ?>
            </tbody>
          </table>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->