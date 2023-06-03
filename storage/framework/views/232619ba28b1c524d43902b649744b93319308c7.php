<?php $__env->startSection('content'); ?>
<div class="container">
    <div id="blue" style="display: none">
        <div class="row" style="margin-top:5px ">
            <div class="col-md-6">
                <select name="therapies[]" id="" class="form-control">
                    <?php $__currentLoopData = $therapies; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $therapy): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($therapy->id); ?>"><?php echo e($therapy->therapy_name); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
            </div>
            <div class="col-md-4">
                <input type="text" name="quantities[]" class="form-control" placeholder="Quantity">
            </div>
            <div class="col-md-2">
                <button type="button" class="btn btn-primary" id="add">Remove</button>
            </div>
        </div>
    </div>
    <div class="row justify-content-center">
          <div class="col-md-12">
              <div class="card">
                  <div class="card-header">
                    <div class="row">
                      <div class="col-md-6">
                        <b>Assign Therapy</b>
                      </div>
                        
                    </div>
                  </div>
                  <script>
                      function addMore(){
                          console.log('clicked');
                          $('#list').append($('#blue').html());
                      }
                  </script>
                  <div class="card-body">
                    <form method="post" action="<?php echo e(URL::to('/doctor/appointment/therapy/store-another-therapy')); ?>"
                          enctype="multipart/form-data" >
                        <?php echo e(csrf_field()); ?>

                        <input hidden type="text" value="<?php echo e($patient_id); ?>" name="patient_id">
                        <input hidden type="text" value="<?php echo e($appointment_id); ?>" name="appointment_id">
                        <div id="list">

                            
                            <table class="table">
                                <tbody>
                                    <?php $__currentLoopData = $groups; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $group): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            <th><?php echo e($group->name); ?>

                                            </th>
                                            <td>
                                                <ul class="list-group">
                                                    <?php $__currentLoopData = $group->therapies; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $therapy): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <li class="list-group-item">
                                                            <div class="row">
                                                                <div class="col-md-1">
                                                                    <input
                                                                    <?php if(isset($exists[$therapy->id])): ?>
                                                                        checked
                                                                    <?php endif; ?>
                                                                    type="checkbox" name="therapies[]" value="<?php echo e($therapy->id); ?>">

                                                                </div>
                                                                <div class="col-md-4">
                                                                    <?php echo e($therapy->therapy_name); ?>

                                                                </div>
                                                                <div class="col-md-7">
                                                                    <input
                                                                    <?php if(isset($exists[$therapy->id])): ?>
                                                                        value="<?php echo e($exists[$therapy->id]); ?>"
                                                                    <?php endif; ?>

                                                                    type="text" name="quantities[<?php echo e($therapy->id); ?>]" class="form-control" placeholder="Quantity">
                                                                </div>
                                                            </div>
                                                        </li>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </ul>

                                            </td>
                                        </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </tbody>
                            </table>
                        </div>
                        <div class="form-group row">
                            <br>
                            <button type="submit" class="btn btn-primary" style="margin-top:10px">Save</button>
                        </div>
                    </form>
                  </div>
              </div>
          </div>
    </div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/suoxuahd/public_html/resources/views/doctor/appointment/therapy_form.blade.php ENDPATH**/ ?>