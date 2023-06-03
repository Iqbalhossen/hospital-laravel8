<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
          <div class="col-md-12">
              <div class="card">
                  <div class="card-header">
                    <div class="row">
                      <div class="col-md-6">
                        <b>Edit Slot</b>
                      </div>
                      <div class="col-md-6">
                        <div class="dropdown float-right">
                            <a href="<?php echo e('/admin/slot'); ?>" class="btn btn-success">Slot List</a>
                        </div>
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


                    <form method="post" action="<?php echo e(route('slot.update',$slot->id)); ?>">
                      <?php echo e(csrf_field()); ?>

                      <?php echo method_field('PUT'); ?>
                      <div class="form-group row">
                        <label for="start" class="col-sm-2 col-form-label"> Start*</label>
                        <div class="col-sm-6">
                          <input id="name" type="text" class="form-control" name="start" value="<?php echo e($slot->start); ?>"/>
                          <?php if($errors->has('start')): ?>
                              <span class="text-danger"><?php echo e($errors->first('start')); ?></span>
                          <?php endif; ?>
                        </div>
                      </div>

                      <div class="form-group row">
                        <label for="name" class="col-sm-2 col-form-label"> End*</label>
                        <div class="col-sm-6">
                          <input id="end" type="text" class="form-control" name="end" value="<?php echo e($slot->end); ?>"/>
                          <?php if($errors->has('end')): ?>
                              <span class="text-danger"><?php echo e($errors->first('end')); ?></span>
                          <?php endif; ?>
                        </div>
                      </div>

                        <div class="form-group row">
                            <div class="col-sm-10 offset-sm-2">
                                <button type="submit" class="btn btn-primary">Update Slot</button>
                            </div>
                        </div>
                  </form>
                  </div>
              </div>
          </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/suoxuahd/public_html/resources/views/admin/slot/edit.blade.php ENDPATH**/ ?>