<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
          <div class="col-md-12">
              <div class="card">
                  <div class="card-header">
                    <div class="row">
                      <div class="col-md-6">
                        <b>Add New Doctor</b>
                      </div>
                      <div class="col-md-6">
                        <div class="dropdown float-right">
                            <a href="<?php echo e('/admin/doctor/list'); ?>" class="btn btn-success">Doctor List</a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="card-body">
                    <form method="post" action="/admin/doctor/edit-store">
                      <?php echo e(csrf_field()); ?>

                      <input type="number" name="id" value=<?php echo e($id); ?> hidden />
                      <input type="number" name="uid" value=<?php echo e($uid); ?> hidden />
                      <div class="form-group row">
                        <label for="name" class="col-sm-2 col-form-label">Name</label>
                        <div class="col-sm-6">
                          <input id="name" type="text" class="form-control" name="name" value="<?php echo e($doctor->name); ?>"/>
                          <?php if($errors->has('name')): ?>
                              <span class="text-danger"><?php echo e($errors->first('name')); ?></span>
                          <?php endif; ?>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="phone" class="col-sm-2 col-form-label">Contact Number</label>
                        <div class="col-sm-6">
                          <input id="phone" type="text" class="form-control" name="phone" value="<?php echo e($doctor->phone); ?>"/>
                          <?php if($errors->has('phone')): ?>
                              <span class="text-danger"><?php echo e($errors->first('phone')); ?></span>
                          <?php endif; ?>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="email" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-6">
                          <input id="email" type="email" class="form-control" name="email" value="<?php echo e($doctor->email); ?>"/>
                          <?php if($errors->has('email')): ?>
                              <span class="text-danger"><?php echo e($errors->first('email')); ?></span>
                          <?php endif; ?>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="password" class="col-sm-2 col-form-label">Password</label>
                        <div class="col-sm-6">
                          <input id="password" type="password" class="form-control" name="password" />
                          <?php if($errors->has('password')): ?>
                              <span class="text-danger"><?php echo e($errors->first('password')); ?></span>
                          <?php endif; ?>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="gender" class="col-sm-2 col-form-label">Gender*</label>
                        <div class="col-sm-6">
                          <select class="custom-select" name="gender">
                            <option selected disabled value="0">Select Gender</option>
                              <option value="1" <?php echo e(($doctor->gender == 1)? 'selected':''); ?>>Male</option>
                              <option value="2" <?php echo e(($doctor->gender == 2)? 'selected':''); ?>>Female</option>
                          </select>
                          <?php if($errors->has('gender')): ?>
                              <span class="text-danger"><?php echo e($errors->first('gender')); ?></span>
                          <?php endif; ?>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="specialist" class="col-sm-2 col-form-label">Specialist</label>
                        <div class="col-sm-6">
                          <select class="custom-select" name="specialist_id">
                            <option selected disabled value="0">Select Specialist</option>
                              <?php $__currentLoopData = $specialist; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $list): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option
                                  value=<?php echo e($list->id); ?>

                                  <?php echo e(($doctor->specialist_id == $list->id)? 'selected':''); ?> >
                                  <?php echo e($list->name); ?>

                                </option>
                              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                          </select>
                          <?php if($errors->has('specialist')): ?>
                              <span class="text-danger"><?php echo e($errors->first('specialist')); ?></span>
                          <?php endif; ?>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="nid" class="col-sm-2 col-form-label">NID Number*</label>
                        <div class="col-sm-6">
                          <input  id="nid" type="text"
                                  class="form-control" name="nid" min="1"
                                  value="<?php echo e($doctor->nid); ?>"/>
                          <?php if($errors->has('nid')): ?>
                              <span class="text-danger"><?php echo e($errors->first('nid')); ?></span>
                          <?php endif; ?>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="nid" class="col-sm-2 col-form-label">Visit</label>
                        <div class="col-sm-6">
                          <input id="nid" type="text" class="form-control" name="visit" min="1"  value="<?php echo e($doctor->visit); ?>"/>
                          <?php if($errors->has('visit')): ?>
                              <span class="text-danger"><?php echo e($errors->first('nid')); ?></span>
                          <?php endif; ?>
                        </div>
                      </div>
                    <div class="form-group row">
                      <div class="col-sm-10 offset-sm-2">
                        <button type="submit" class="btn btn-primary">Update Doctor</button>
                      </div>
                    </div>
                  </form>
                  </div>
              </div>
          </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/suoxuahd/public_html/resources/views/admin/doctor/doctor_edit_form.blade.php ENDPATH**/ ?>