<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
          <div class="col-md-12">
              <div class="card">
                  <div class="card-header">
                    <div class="row">
                      <div class="col-md-6">
                        <b>Edit Therapy</b>
                      </div>
                      <div class="col-md-6">
                        <div class="dropdown float-right">
                            <a href="<?php echo e('/admin/therapy/list'); ?>" class="btn btn-success">Therapy List</a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="card-body">
                    <form method="post" action="/admin/therapy/edit-store">
                      <?php echo e(csrf_field()); ?>

                      <input type="hidden" name="id" value="<?php echo e($therapy->id); ?>" />
                      <div class="form-group row">
                        <label for="name" class="col-sm-2 col-form-label">Therapy Name*</label>
                        <div class="col-sm-6">
                          <input
                            id="therapy_name" type="text" class="form-control"
                            name="therapy_name"
                            value="<?php echo e($therapy->therapy_name); ?>"
                          />
                          <?php if($errors->has('therapy_name')): ?>
                              <span class="text-danger"><?php echo e($errors->first('therapy_name')); ?></span>
                          <?php endif; ?>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="price" class="col-sm-2 col-form-label">Price*</label>
                        <div class="col-sm-6">
                          <input id="price" type="number" min="0" class="form-control" name="price" value="<?php echo e($therapy->price); ?>"/>
                          <?php if($errors->has('price')): ?>
                              <span class="text-danger"><?php echo e($errors->first('price')); ?></span>
                          <?php endif; ?>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="duration" class="col-sm-2 col-form-label">Duration*</label>
                        <div class="col-sm-6">
                          <input id="duration" type="number" min="0" class="form-control" name="duration" value="<?php echo e($therapy->duration); ?>" placeholder="Add Total Days"/>
                          <?php if($errors->has('duration')): ?>
                              <span class="text-danger"><?php echo e($errors->first('duration')); ?></span>
                          <?php endif; ?>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="doses" class="col-sm-2 col-form-label">Number of doses*</label>
                        <div class="col-sm-6">
                          <input id="doses" type="number" min="0" class="form-control" name="doses" value="<?php echo e($therapy->doses); ?>"/>
                          <?php if($errors->has('doses')): ?>
                              <span class="text-danger"><?php echo e($errors->first('doses')); ?></span>
                          <?php endif; ?>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="doses" class="col-sm-2 col-form-label">Machines</label>
                        <div class="col-sm-6">
                            <select multiple name="machines[]" id="" class="form-control">
                                <?php $__currentLoopData = $machines; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $machine): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option
                                    <?php if(in_array($machine->id, $therapy_machines)): ?>
                                        selected
                                    <?php endif; ?>
                                    value="<?php echo e($machine->id); ?>"><?php echo e($machine->name); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>

                        </div>
                      </div>
                    <div class="form-group row">
                      <div class="col-sm-10 offset-sm-2">
                        <button type="submit" class="btn btn-primary">Update Therapy</button>
                      </div>
                    </div>
                  </form>
                  </div>
              </div>
          </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/suoxuahd/public_html/resources/views/admin/therapy/therapy_edit_form.blade.php ENDPATH**/ ?>