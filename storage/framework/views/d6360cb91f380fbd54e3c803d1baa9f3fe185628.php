<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
          <div class="col-md-12">
              <div class="card">
                  <div class="card-header">
                    <div class="row">
                      <div class="col-md-6">
                        <b>Edit Mobile Agent</b>
                      </div>
                      <div class="col-md-6">
                          <a class="btn btn-info" href="<?php echo e(route('mobile-agent.index')); ?>">Mobile Agent List</a>
                      </div>
                    </div>
                  </div>
                  <div class="card-body">
                      <form action="<?php echo e(route('mobile-agent.update',$mobileAgent->id)); ?>" method="post">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('put'); ?>
                        <div class="form-group">
                            <label for="name">Type</label>
                            <select name="type" id="" class="form-control">
                                <?php $__currentLoopData = $mobileAgentTypes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $type): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option <?php echo e($mobileAgent->type==$type->name?'selected':''); ?> value="<?php echo e($type->name); ?>"><?php echo e($type->name); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="name">Number</label>
                            <input value="<?php echo e($mobileAgent->number); ?>" type="text" name="number" class="form-control" placeholder="Enter Number" required>
                        </div>
                        <div class="form-group">
                            <button class="btn btn-success">Submit</button>
                        </div>
                      </form>
                  </div>
                  </div>
                  </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.accountant', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/suoxuahd/public_html/resources/views/accountant/mobile/edit.blade.php ENDPATH**/ ?>