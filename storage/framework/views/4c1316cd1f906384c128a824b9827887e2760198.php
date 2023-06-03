<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
          <div class="col-md-12">
              <div class="card">
                  <div class="card-header">
                    <div class="row">
                      <div class="col-md-6">
                        <b>Mobile Agent List</b>
                      </div>
                      <div class="col-md-6">
                          <a class="btn btn-info" href="<?php echo e(route('mobile-agent.create')); ?>">Add New</a>
                      </div>
                    </div>
                  </div>
                  <div class="card-body">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th scope="col">Number</th>
                                <th scope="col">Agent</th>
                                <th scope="col">Balance</th>

                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = $mobileAgents; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $agent): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <th scope="row">
                                        <?php echo e($agent->number); ?>

                                    </th>
                                    <th>
                                        <?php echo e($agent->type); ?>

                                    </th>
                                    <th>
                                        <?php echo e($agent->balance); ?>

                                    </th>


                                    <td>
                                        <a class="btn btn-info" href="<?php echo e(route('mobile-agent.edit',$agent->id)); ?>">Edit</a>
                                        
                                        <form action="<?php echo e(route('mobile-agent.destroy',$agent->id)); ?>" method="POST" class="d-inline">
                                            <?php echo csrf_field(); ?>
                                            <?php echo method_field('DELETE'); ?>
                                            <button class="btn btn-danger" type="submit">Delete</button>
                                        </form>

                                    </td>
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>
                  </div>
              </div>
          </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.accountant', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/suoxuahd/public_html/resources/views/accountant/mobile/index.blade.php ENDPATH**/ ?>