<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
          <div class="col-md-12">
              <div class="card">
                  <div class="card-header">
                    <div class="row">
                      <div class="col-md-6">
                        <b>Refer Doctro</b>
                      </div>
                      <div class="col-md-6">
                        <div class="dropdown float-right">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              Menu
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                              <a class="dropdown-item" href="<?php echo e('/patient/home'); ?>">Home</a>
                              <a class="dropdown-item" href="<?php echo e('/patient/profile'); ?>">Profile</a>
                              <div class="dropdown-divider"></div>
                              <a class="dropdown-item" href="<?php echo e('/patient/appointment'); ?>">New Appointment</a>
                              <a class="dropdown-item" href="<?php echo e('/patient/appointment/list'); ?>">Appointment List</a>
                              <div class="dropdown-divider"></div>
                              <a class="dropdown-item" href="#">History</a>
                            </div>
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
                    <form method="post" action="<?php echo e(URL::to('/doctor/appointment/refer/store')); ?>">
                        <?php echo e(csrf_field()); ?>

                        <input hidden type="text" value="<?php echo e($patient_id); ?>" name="patient_id">
                        <input hidden type="text" value="<?php echo e($appointment_id); ?>" name="appointment_id">
                        <div class="form-group row">
                          <label for="refer_doctor_id" class="col-sm-2 col-form-label">
                            Refer Doctor
                          </label>
                          <div class="col-sm-4">
                              <select class="custom-select" name="refer_doctor_id">
                                <option selected disabled value="0">Select</option>
                                <?php $__currentLoopData = $doctors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $doctor): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                  <option value=<?php echo e($doctor->id); ?>><?php echo e($doctor->name); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                              </select>
                              <?php if($errors->has('refer_doctor_id')): ?>
                                  <span class="text-danger"><?php echo e($errors->first('refer_doctor_id')); ?></span>
                              <?php endif; ?>
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

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/suoxuahd/public_html/resources/views/doctor/appointment/refer_form.blade.php ENDPATH**/ ?>