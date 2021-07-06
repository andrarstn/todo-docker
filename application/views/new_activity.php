        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Tambah Aktivitas Baru</h1>
          </div>
          <div class="row">
              <div class="col-md-6">
                  <div class="card">
                      <div class="card-body">
                          <form method="POST" action="<?php echo base_url('activity/new_act') ?>" enctype="multipart/form-data">
                              <div class="form-group">
                                  <label>Nama Aktivitas</label>
                                  <input type="text" name="activity" class="form-control" required>
                                  <?php 
                                  echo form_error('activity','<div class="text-small text-danger">','</div>')
                              ?>
                              </div>
                              <button type="submit" class="btn btn-primary mt-5 float-right">Submit</button>
                          </form>
                      </div>
                  </div>
              </div>
          </div>
        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->