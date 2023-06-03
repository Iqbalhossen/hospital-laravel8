<?php $__env->startSection('content'); ?>
<style>
    .select2-selection{
        height: 40px !important;
    }
</style>
<div class="container">
    <div class="row justify-content-center">
          <div class="col-md-12">
              <div class="card">
                  <div class="card-header">
                    <div class="row">
                      <div class="col-md-6">
                        <b>Add New App</b>
                      </div>

                    </div>
                  </div>
                  <div class="card-body">
                    <?php if(session('success')): ?>
                      <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong><?php echo e(session('success')); ?></strong>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                    <?php endif; ?>
                    <?php if(session('error')): ?>
                      <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <strong><?php echo e(session('error')); ?></strong>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                    <?php endif; ?>
                    <form method="post" action="<?php echo e(URL::to('/patient/appointment-add')); ?>">
                      <?php echo e(csrf_field()); ?>

                      <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">Type</label>
                        <div class="col-sm-6">
                          <select class="select2 custom-select form-control" name="service_id">
                            <option selected>Select One</option>
                            <?php $__currentLoopData = $services; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $service): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                              <option value="<?php echo e($service->name); ?>">
                                <?php echo e($service->name); ?>

                              </option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                          </select>
                        </div>
                      </div>
                      <fieldset class="form-group row">
                        <legend class="col-form-label col-sm-2 float-sm-left pt-0">Appoint Date</legend>
                        <div class="col-sm-6">
                          <input id="datepicker" class="form-control" name="appoint_date"/>
                        </div>
                      </fieldset>
                      <fieldset class="form-group row">
                        <legend class="col-form-label col-sm-2 float-sm-left pt-0">Appoint Time</legend>
                        <div class="col-sm-6">
                          <input id="timepicker" class="form-control" name="appoint_time"/>
                        </div>
                      </fieldset>
                      <div class="form-group row">
                        <label for="inputPassword3" class="col-sm-2 col-form-label">Details</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="inputPassword3" name="details">
                        </div>
                      </div>
                    <div class="form-group row">
                      <div class="col-sm-10 offset-sm-2">
                        <button type="submit" class="btn btn-primary">Add</button>
                      </div>
                    </div>
                  </form>
                  </div>
              </div>
          </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
    <script>
         $(function () {
    //Initialize Select2 Elements
    $('.select2').select2({
  tags: true
})
         }); 
        </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/suoxuahd/public_html/resources/views/patient/appointment/add.blade.php ENDPATH**/ ?>