<?php $__env->startSection('content'); ?>
    <!-- /.card-header -->
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-md-6">
                                <b>Group List</b>
                            </div>
                        </div>
                    </div>
                    <div class="card-body ">
                        <?php echo $__env->make('filter-form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        <table id="d-table" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Price</th>
                                    <th>Therapies</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $__currentLoopData = $lists; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $group): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td><?php echo e($key + 1); ?></td>
                                        <td><?php echo e($group->name); ?></td>
                                        <td><?php echo e($group->price); ?></td>
                                        <td>
                                            <?php $__currentLoopData = $group->therapies; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $therapy): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <li>
                                                    <?php echo e($therapy->therapy_name); ?>

                                                </li>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </td>
                                        <td>
                                            <div class="btn-group">

                                                <a class="btn btn-info btn-sm"
                                                    href="<?php echo e(route('group.edit', $group->id)); ?>">
                                                    Edit
                                                </a>

                                                <a class="btn btn-danger btn-sm"
                                                    href="<?php echo e(route('group.remove', $group->id)); ?>">
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
    <!-- /.card-body -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/suoxuahd/public_html/resources/views/admin/group/index.blade.php ENDPATH**/ ?>