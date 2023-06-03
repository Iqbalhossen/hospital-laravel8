

<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
          <div class="col-md-12">
              <div class="card">
                  <div class="card-header">
                    <div class="row">
                      <div class="col-md-6">
                        <b>Update Patient</b>
                      </div>
                      <div class="col-md-6">
                        <div class="dropdown float-right">
                            <a href="<?php echo e('/admin/patient/list'); ?>" class="btn btn-success">Patient List</a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="card-body">
                    <form method="post" action="/admin/patient/edit-store">
                      <?php echo e(csrf_field()); ?>

                      <input type="hidden" name="id" value="<?php echo e($patient[0]->id); ?>" />
                      <input type="hidden" name="patient_id" value="<?php echo e($patient[0]->patient_id); ?>" />
                      <div class="form-group row">
                        <label for="name" class="col-sm-2 col-form-label">Name</label>
                        <div class="col-sm-6">
                          <input id="name" type="text" class="form-control" name="name" value="<?php echo e($patient[0]->name); ?>"/>
                          <?php if($errors->has('name')): ?>
                              <span class="text-danger"><?php echo e($errors->first('name')); ?></span>
                          <?php endif; ?>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="phone" class="col-sm-2 col-form-label">Phone</label>
                        <div class="col-sm-6">
                          <input id="phone" type="text" class="form-control" name="phone" value="<?php echo e($patient[0]->phone); ?>"/>
                          <?php if($errors->has('phone')): ?>
                              <span class="text-danger"><?php echo e($errors->first('phone')); ?></span>
                          <?php endif; ?>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="age" class="col-sm-2 col-form-label">Age</label>
                        <div class="col-sm-6">
                          <input id="age" type="number" class="form-control" name="age" min="1" value="<?php echo e($patient[0]->age); ?>"/>
                          <?php if($errors->has('age')): ?>
                              <span class="text-danger"><?php echo e($errors->first('age')); ?></span>
                          <?php endif; ?>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="password" class="col-sm-2 col-form-label">Password</label>
                        <div class="col-sm-6">
                          <input id="password" type="password" class="form-control" name="password" value=""/>
                          <?php if($errors->has('password')): ?>
                              <span class="text-danger"><?php echo e($errors->first('password')); ?></span>
                          <?php endif; ?>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="email" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-6">
                          <input id="email" type="email" class="form-control" name="email" value="<?php echo e($patient[0]->email); ?>"/>
                          <?php if($errors->has('email')): ?>
                              <span class="text-danger"><?php echo e($errors->first('email')); ?></span>
                          <?php endif; ?>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="address" class="col-sm-2 col-form-label">Address</label>
                        <div class="col-sm-6">
                          <input 
                            id="text" type="address" class="form-control" name="address" 
                            value="<?php echo e($patient[0]->address); ?>"/>
                          <?php if($errors->has('address')): ?>
                              <span class="text-danger"><?php echo e($errors->first('address')); ?></span>
                          <?php endif; ?>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="blood" class="col-sm-2 col-form-label">Blood Group</label>
                        <div class="col-sm-6">
                          <select class="custom-select" name="blood">
                            <option selected disabled value="0">Select Blood Group</option>
                              <option value="1" <?php echo e(($patient[0]->blood == 1)?'selected':''); ?>>A+</option>
                              <option value="2" <?php echo e(($patient[0]->blood == 2)?'selected':''); ?>>A-</option>
                              <option value="3" <?php echo e(($patient[0]->blood == 3)?'selected':''); ?>>B+</option>
                              <option value="4" <?php echo e(($patient[0]->blood == 4)?'selected':''); ?>>B-</option>
                              <option value="5" <?php echo e(($patient[0]->blood == 5)?'selected':''); ?>>AB+</option>
                              <option value="6" <?php echo e(($patient[0]->blood == 6)?'selected':''); ?>>AB-</option>
                              <option value="7" <?php echo e(($patient[0]->blood == 7)?'selected':''); ?>>O+</option>
                              <option value="8" <?php echo e(($patient[0]->blood == 8)?'selected':''); ?>>O-</option>
                          </select>
                          <?php if($errors->has('blood')): ?>
                              <span class="text-danger"><?php echo e($errors->first('blood')); ?></span>
                          <?php endif; ?>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="gender" class="col-sm-2 col-form-label">Gender</label>
                        <div class="col-sm-6">
                          <select class="custom-select" name="gender">
                            <option selected disabled value="0">Select Gender</option>
                              <option value="1" <?php echo e(($patient[0]->gender == 1)?'selected':''); ?>>Male</option>
                              <option value="2" <?php echo e(($patient[0]->gender == 2)?'selected':''); ?>>Female</option>
                          </select>
                          <?php if($errors->has('gender')): ?>
                              <span class="text-danger"><?php echo e($errors->first('gender')); ?></span>
                          <?php endif; ?>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="nid" class="col-sm-2 col-form-label">NID Number</label>
                        <div class="col-sm-6">
                          <input id="nid" type="text" class="form-control" name="nid" min="1"  value="<?php echo e($patient[0]->nid); ?>"/>
                          <?php if($errors->has('nid')): ?>
                              <span class="text-danger"><?php echo e($errors->first('nid')); ?></span>
                          <?php endif; ?>
                        </div>
                      </div>
                    <div class="form-group row">
                      <div class="col-sm-10 offset-sm-2">
                        <button type="submit" class="btn btn-primary">Update Profile</button>
                      </div>
                    </div>
                  </form>
                  </div>
              </div>
          </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/suoxuahd/public_html/resources/views/admin/patient/patient_edit_form.blade.php ENDPATH**/ ?>