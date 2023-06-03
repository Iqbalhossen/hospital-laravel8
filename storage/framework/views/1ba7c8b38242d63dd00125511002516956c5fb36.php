<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
          <div class="col-md-12">
              <div class="card">
                  <div class="card-header">
                    <div class="row">
                      <div class="col-md-6">
                        <b>Edit Test</b>
                      </div>
                      <div class="col-md-6">
                        <div class="dropdown float-right">
                            <a href="<?php echo e('/admin/test'); ?>" class="btn btn-success">Test List</a>
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


                    <form method="post" action="<?php echo e(route('test.update',$test->id)); ?>">
                      <?php echo e(csrf_field()); ?>

                      <?php echo method_field('PUT'); ?>
                      <div class="form-group row">
                        <label for="name" class="col-sm-2 col-form-label"> Name*</label>
                        <div class="col-sm-6">
                          <input id="name" type="text" class="form-control" name="name" value="<?php echo e($test->name); ?>"/>
                          <?php if($errors->has('name')): ?>
                              <span class="text-danger"><?php echo e($errors->first('name')); ?></span>
                          <?php endif; ?>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="name" class="col-sm-2 col-form-label"> Description</label>
                        <div class="col-sm-6">
                            <textarea name="description" id="" class="form-control"><?php echo e($test->description); ?></textarea>
                          <?php if($errors->has('description')): ?>
                              <span class="text-danger"><?php echo e($errors->first('description')); ?></span>
                          <?php endif; ?>
                        </div>
                      </div>

                        <div class="form-group row">
                            <div class="col-sm-10 offset-sm-2">
                                <button type="submit" class="btn btn-primary">Add Test</button>
                            </div>
                        </div>
                  </form>
                  </div>
              </div>
          </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/suoxuahd/public_html/resources/views/admin/test/edit.blade.php ENDPATH**/ ?>