<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
          <div class="col-md-12">
              <div class="card">
                  <div class="card-header">
                    <div class="row">
                      <div class="col-md-6">
                        <b>Add New Therapist</b>
                      </div>
                      <div class="col-md-6">
                        <div class="dropdown float-right">
                            <a href="<?php echo e(URL::to('/admin/therapist/list')); ?>" class="btn btn-success">Therapist List</a>
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


                    <form method="post" action="<?php echo e(URL::to('/admin/therapist/add')); ?>">
                      <?php echo e(csrf_field()); ?>

                      <input type="number" name="patient_id" value=<?php echo e(auth()->user()->id); ?> hidden />
                      <div class="form-group row">
                        <label for="name" class="col-sm-2 col-form-label">Therapist Name*</label>
                        <div class="col-sm-6">
                          <input id="name" type="text" class="form-control" name="name" value="<?php echo e(old('name')); ?>"/>
                          <?php if($errors->has('name')): ?>
                              <span class="text-danger"><?php echo e($errors->first('name')); ?></span>
                          <?php endif; ?>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="phone" class="col-sm-2 col-form-label">Contact Number*</label>
                        <div class="col-sm-6">
                          <input id="phone" type="text" class="form-control" name="phone" value="<?php echo e(old('phone')); ?>"/>
                          <?php if($errors->has('phone')): ?>
                              <span class="text-danger"><?php echo e($errors->first('phone')); ?></span>
                          <?php endif; ?>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="email" class="col-sm-2 col-form-label">Email*</label>
                        <div class="col-sm-6">
                          <input id="email" type="email" class="form-control" name="email" value=""/>
                          <?php if($errors->has('email')): ?>
                              <span class="text-danger"><?php echo e($errors->first('email')); ?></span>
                          <?php endif; ?>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="password" class="col-sm-2 col-form-label">Password*</label>
                        <div class="col-sm-6">
                          <input id="password" type="password" class="form-control" name="password" value=""/>
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
                              <option value="1">Male</option>
                              <option value="2">Female</option>
                          </select>
                          <?php if($errors->has('gender')): ?>
                              <span class="text-danger"><?php echo e($errors->first('gender')); ?></span>
                          <?php endif; ?>
                        </div>
                      </div>

                      <div class="form-group row">
                        <label for="nid" class="col-sm-2 col-form-label">NID Number*</label>
                        <div class="col-sm-6">
                          <input id="nid" type="text" class="form-control" name="nid" min="1"  value="<?php echo e(old('nid')); ?>"/>
                          <?php if($errors->has('nid')): ?>
                              <span class="text-danger"><?php echo e($errors->first('nid')); ?></span>
                          <?php endif; ?>
                        </div>
                      </div>
                    <div class="form-group row">
                      <div class="col-sm-10 offset-sm-2">
                        <button type="submit" class="btn btn-primary">Add Therapist</button>
                      </div>
                    </div>
                  </form>
                  </div>
              </div>
          </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/suoxuahd/public_html/resources/views/admin/therapist/add_compounder.blade.php ENDPATH**/ ?>