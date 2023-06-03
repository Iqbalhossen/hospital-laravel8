<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-md-6">
                                <b>Therapy List</b>
                            </div>
                            <div class="col-md-6">
                                <div class="dropdown float-right">
                                    <div class="dropdown float-right">
                                        <a href="<?php echo e('/admin/therapy/add'); ?>" class="btn btn-success">Add Therapy</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        
                        <?php echo $__env->make('filter-form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                        <table id="d-table" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">Name</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Machines</th>

                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $__currentLoopData = $lists; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $list): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <th scope="row">
                                            <?php echo e($list->therapy_name); ?>

                                        </th>
                                        <td>
                                            <?php if($list->status == 1): ?>
                                                <b class="text-success">Active</b>
                                            <?php else: ?>
                                                <b class="text-danger">In-Active</b>
                                            <?php endif; ?>
                                        </td>
                                        <th scope="row">
                                            <?php $__currentLoopData = $list->machines; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $machine): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <?php echo e($machine->name); ?>

                                                <br>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </th>

                                        <td>
                                            <div class="btn-group">
                                                <a class="btn btn-info btn-sm"
                                                    href="<?php echo e('/admin/therapy/edit/' . $list->id); ?>">
                                                    Edit
                                                </a>
                                                <a class="btn btn-danger btn-sm"
                                                    href="<?php echo e('/admin/therapy/delete/' . $list->id); ?>">
                                                    Delete
                                                </a>
                                                <a class="btn btn-success btn-sm"
                                                    href="<?php echo e('/admin/therapy/change-status/' . $list->id); ?>">
                                                    Change Status
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

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/suoxuahd/public_html/resources/views/admin/therapy/therapy_list.blade.php ENDPATH**/ ?>