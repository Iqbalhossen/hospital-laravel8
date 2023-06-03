<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-md-6">
                                <b>Doctor List</b>
                            </div>
                            <div class="col-md-6">
                                <div class="dropdown float-right">
                                    <div class="dropdown float-right">
                                        <a href="<?php echo e('/admin/doctor/add'); ?>" class="btn btn-success">Add Doctors</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <?php echo $__env->make('filter-form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        <div class="table-responsive">
                            <table id="d-table" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Phone</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">NID</th>
                                        <th scope="col">Specialist</th>
                                        <th scope="col">Visit </th>
                                        <th scope="col">Status </th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $__currentLoopData = $doctors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $doctor): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            <th><?php echo e($key + 1); ?></th>
                                            <th scope="row">
                                                <?php echo e($doctor->name); ?>

                                            </th>
                                            <th scope="row">
                                                <?php echo e($doctor->phone); ?>

                                            </th>
                                            <th scope="row">
                                                <?php echo e($doctor->email); ?>

                                            </th>
                                            <th scope="row">
                                                <?php echo e($doctor->nid); ?>

                                            </th>
                                            <th scope="row">
                                                <?php echo e($doctor->specialist_list); ?>

                                            </th>

                                            <th scope="row">
                                                <?php echo e($doctor->visit); ?>

                                            </th>
                                            <td>
                                                <?php if($doctor->status == 1): ?>
                                                    <b class="text-success">Active</b>
                                                <?php else: ?>
                                                    <b class="text-danger">In-Active</b>
                                                <?php endif; ?>
                                            </td>
                                            <td>
                                                <div class="btn-group btn-sm">
                                                    <a class="btn btn-info"
                                                        href="<?php echo e('/admin/doctor/edit/' . $doctor->id . '/' . $doctor->user_id); ?>">
                                                        Edit
                                                    </a>
                                                    <a class="btn btn-danger  btn-sm"
                                                        href="<?php echo e('/admin/doctor/delete/' . $doctor->id); ?>">
                                                        Delete
                                                    </a>
                                                    <a class="btn btn-success btn-sm"
                                                        href="<?php echo e('/admin/doctor/change-status/' . $doctor->id); ?>">
                                                        Change status
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
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/suoxuahd/public_html/resources/views/admin/doctor/list_doctor.blade.php ENDPATH**/ ?>