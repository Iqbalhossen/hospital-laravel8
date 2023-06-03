

<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
          <div class="col-md-12">
              <div class="card">
                  <div class="card-header">
                    <div class="row">
                      <div class="col-md-6">
                        <b>Edit Specialist</b>
                      </div>
                      <div class="col-md-6">
                        <div class="dropdown float-right">
                            <a href="<?php echo e('/admin/specialist/list'); ?>" class="btn btn-success">Specialist List</a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="card-body">
                    <form method="post" action="/admin/specialist/edit-store">
                      <?php echo e(csrf_field()); ?>

                      <input type="hidden" name="id" value="<?php echo e($specialist->id); ?>">
                      <div class="form-group row">
                        <label for="name" class="col-sm-2 col-form-label">Specialist Name*</label>
                        <div class="col-sm-6">
                          <input  
                            id="name"
                            type="text"
                            class="form-control"
                            name="name"
                            value="<?php echo e($specialist->name); ?>"
                          />
                          <?php if($errors->has('name')): ?>
                              <span class="text-danger"><?php echo e($errors->first('name')); ?></span>
                          <?php endif; ?>
                        </div>
                      </div>
                    <div class="form-group row">
                      <div class="col-sm-10 offset-sm-2">
                        <button type="submit" class="btn btn-primary">Update</button>
                      </div>
                    </div>
                  </form>
                  </div>
              </div>
          </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/suoxuahd/public_html/resources/views/admin/specialist/specialist_edit_form.blade.php ENDPATH**/ ?>