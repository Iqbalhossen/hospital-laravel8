<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-md-6">
                                <b>Compounder List</b>
                            </div>
                            <div class="col-md-6">
                                <div class="dropdown float-right">
                                    <div class="dropdown float-right">
                                        <a href="<?php echo e('/admin/doctor/add'); ?>" class="btn btn-success">Add Compounder</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <?php echo $__env->make('filter-form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">SL</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Phone</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">NID</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Created At</th>
                                    <th scope="col">Updated At</th>
                                    <th scope="col" width="25%">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $__currentLoopData = $doctors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $doctor): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <th scope="row"><?php echo e($key+1); ?></th>
                                        <th scope="row"><?php echo e($doctor->name); ?></th>
                                        <th scope="row"><?php echo e($doctor->phone); ?></th>
                                        <th scope="row"><?php echo e($doctor->email); ?></th>
                                        <th scope="row"><?php echo e($doctor->nid); ?></th>
                                        <td>
                                            <?php if($doctor->status == 1): ?>
                                                <b class="text-success">Active</b>
                                            <?php else: ?>
                                                <b class="text-danger">In-Active</b>
                                            <?php endif; ?>
                                        </td>
                                        <th scope="row">
                                            <?php echo e($doctor->created_at->format('d M Y g:i A')); ?>

                                        </th>
                                        <th scope="row">
                                            <?php echo e($doctor->updated_at->format('d M Y g:i A')); ?>

                                        </th>
                                        <td>
                                            <a class="btn btn-info"
                                                href="<?php echo e(URL::to('/admin/coordinator/edit/' . $doctor->id) . '/' . $doctor->user_id); ?>">
                                                Edit
                                            </a> <br />
                                            <a class="btn btn-danger my-1"
                                                href="<?php echo e(URL::to('/admin/coordinator/delete/' . $doctor->id)); ?>">
                                                Delete
                                            </a> <br />
                                            <a class="btn btn-success"
                                                href="<?php echo e(URL::to('/admin/coordinator/change-status/' . $doctor->id)); ?>">
                                                Change status
                                            </a>
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

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/suoxuahd/public_html/resources/views/admin/compounder/list_compounder.blade.php ENDPATH**/ ?>