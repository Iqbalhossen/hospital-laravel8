<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
          <div class="col-md-12">
              <div class="card">
                  <div class="card-header">
                    <div class="row">
                      <div class="col-md-6">
                        <b>Update Profile Information</b>
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


                    <form method="post" action="<?php echo e(URL::to('/patient/profile-update')); ?>" enctype="multipart/form-data">
                      <?php echo e(csrf_field()); ?>

                      <input type="number" name="patient_id" value=<?php echo e(auth()->user()->id); ?> hidden />
                      <div class="form-group row">
                        <label for="phone" class="col-sm-2 col-form-label">Phone*</label>
                        <div class="col-sm-6">
                            <input
                                id="phone" type="text" class="form-control" name="phone"
                                value="<?php echo isset($data[0]->phone) ? $data[0]->phone : '' ?>"
                            />
                            <?php if($errors->has('phone')): ?>
                                <span class="text-danger"><?php echo e($errors->first('phone')); ?></span>
                            <?php endif; ?>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="age" class="col-sm-2 col-form-label">Age*</label>
                        <div class="col-sm-6">
                            <input
                                id="age" type="number" class="form-control" name="age" min="1"
                                value="<?php echo isset($data[0]->age) ? $data[0]->age : '' ?>"
                            />
                            <?php if($errors->has('age')): ?>
                                <span class="text-danger"><?php echo e($errors->first('age')); ?></span>
                            <?php endif; ?>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="blood" class="col-sm-2 col-form-label">Blood Group*</label>
                        <div class="col-sm-6">
                            <select class="custom-select" name="blood">
                                    <option selected disabled value="0">Select Blood Group</option>
                                    <option
                                        value="1"
                                        <?php echo isset($data[0]->blood)? ($data[0]->blood == 1)? 'selected':'' : '' ?>>
                                        A+
                                    </option>
                                    <option
                                        value="2"
                                        <?php echo isset($data[0]->blood)? ($data[0]->blood == 2)? 'selected':'' : '' ?>>
                                        A-
                                    </option>
                                    <option
                                        value="3"
                                        <?php echo isset($data[0]->blood)? ($data[0]->blood == 3)? 'selected':'' : '' ?>>
                                        B+
                                    </option>
                                    <option
                                        value="4"
                                        <?php echo isset($data[0]->blood)? ($data[0]->blood == 4)? 'selected':'' : '' ?>>
                                        B-
                                    </option>
                                    <option
                                        value="5"
                                        <?php echo isset($data[0]->blood)? ($data[0]->blood == 5)? 'selected':'' : '' ?>>
                                        AB+
                                    </option>
                                    <option
                                        value="6"
                                        <?php echo isset($data[0]->blood)? ($data[0]->blood == 6)? 'selected':'' : '' ?>>
                                        AB-
                                    </option>
                                    <option
                                        value="7"
                                        <?php echo isset($data[0]->blood)? ($data[0]->blood == 7)? 'selected':'' : '' ?>>
                                        O+
                                    </option>
                                    <option
                                        value="8"
                                        <?php echo isset($data[0]->blood)? ($data[0]->blood == 8)? 'selected':'' : '' ?>>
                                        O-
                                    </option>
                            </select>
                            <?php if($errors->has('blood')): ?>
                                <span class="text-danger"><?php echo e($errors->first('blood')); ?></span>
                            <?php endif; ?>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="gender" class="col-sm-2 col-form-label">Gender*</label>
                        <div class="col-sm-6">
                            <select class="custom-select" name="gender">
                                <option selected disabled value="0">Select Gender</option>
                                <option value="1"
                                        <?php echo isset($data[0]->gender)? ($data[0]->gender == 1)? 'selected':'' : '' ?>>
                                        Male
                                </option>
                                <option value="2"
                                        <?php echo isset($data[0]->gender)? ($data[0]->gender == 2)? 'selected':'' : '' ?>>
                                        Female
                                </option>
                            </select>
                            <?php if($errors->has('gender')): ?>
                                <span class="text-danger"><?php echo e($errors->first('gender')); ?></span>
                            <?php endif; ?>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="nid" class="col-sm-2 col-form-label">NID Number*</label>
                        <div class="col-sm-6">
                            <input
                                id="nid" type="text" class="form-control" name="nid" min="1"
                                value="<?php echo isset($data[0]->nid) ? $data[0]->nid : '' ?>"
                            />
                            <?php if($errors->has('nid')): ?>
                                <span class="text-danger"><?php echo e($errors->first('nid')); ?></span>
                            <?php endif; ?>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="nid" class="col-sm-2 col-form-label">Photo</label>
                        <div class="col-sm-6">
                            <input
                                 type="file" class="form-control" name="image"

                            />

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

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/suoxuahd/public_html/resources/views/patient/profile/profile_details.blade.php ENDPATH**/ ?>