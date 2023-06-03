

<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-md-6">
                                <b>Specialist List</b>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <?php echo $__env->make('filter-form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">Name</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Created At</th>
                                    <th scope="col">Updated At</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $__currentLoopData = $lists; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $list): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <th scope="row">
                                            <?php echo e($list->name); ?>

                                        </th>
                                        <td>
                                            <?php if($list->status == 1): ?>
                                                <b class="text-success">Active</b>
                                            <?php else: ?>
                                                <b class="text-danger">In-Active</b>
                                            <?php endif; ?>
                                        </td>
                                        <th scope="row">
                                            <?php echo e($list->created_at); ?>

                                        </th>
                                        <th scope="row">
                                            <?php echo e($list->updated_at); ?>

                                        </th>
                                        <td>
                                            <div class="dropdown float-right">
                                                <a class="btn btn-info" href="<?php echo e('/admin/specialist/edit/' . $list->id); ?>">
                                                    Edit
                                                </a>
                                                <a class="btn btn-info"
                                                    href="<?php echo e('/admin/specialist/change-status/' . $list->id); ?>">
                                                    Change status
                                                </a>
                                                <a class="btn btn-danger"
                                                    href="<?php echo e('/admin/specialist/delete/' . $list->id); ?>">
                                                    Delete
                                                </a>
                                            </div>
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

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/suoxuahd/public_html/resources/views/admin/specialist/specialist_list.blade.php ENDPATH**/ ?>