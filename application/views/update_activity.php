        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Update Aktivitas</h1>
          </div>

          <div class="row">
              <div class="col-md-6">
                  <div class="card">
                      <div class="card-body">
                        <?php 
                            $result = $activity->result();
                            foreach ($result as $a) :
                        ?>
                          <form method="POST" action="<?php echo base_url('activity/update_act') ?>" enctype="multipart/form-data">
                                      <div class="form-group">
                                          <label>Nama Aktivitas</label>
                                          <input type="hidden" name="id" value="<?php echo $a->id ?>">
                                          <input type="text" name="activity" class="form-control" required value="<?php echo $a->name ?>" >
                                          <?php 
                                          echo form_error('activity','<div class="text-small text-danger">','</div>')
                                      ?>
                                      </div>
                                      <div class="form-group">
                                        <label>Status</label>
                                        <select name="status" class="form-control" required>
                                            <option value="<?php echo $a->status?>"><?php echo $a->status == 0 ? 'Belum Selesai' : 'Selesai'; ?></option>
                                            <option value="<?php if($a->status!=0) echo '0'; else echo '1'; ?>"><?php echo $a->status == 1 ? 'Belum Selesai' : 'Selesai';?></option>
                                        </select>
                                    </div>
                                      <button type="submit" class="btn btn-primary mt-5 float-right">Submit</button>
                                  </form>
                        <?php 
                            endforeach;
                        ?>
                      </div>
                  </div>
                </div>
              </div>
          </div>
          
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->