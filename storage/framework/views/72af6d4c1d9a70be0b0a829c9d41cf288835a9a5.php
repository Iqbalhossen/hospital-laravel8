<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-md-6">
                                <b>Your Appointment List</b>
                            </div>
                            <div class="col-md-6">
                                <div class="dropdown float-right">
                                    <a href="<?php echo e(URL::to('/patient/appointment')); ?>" class="btn btn-success">
                                        New Appointment
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <?php echo $__env->make('filter-form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        <table id="d-table" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th scope="col">Category</th>
                                    <th scope="col">Details</th>
                                    <th scope="col">Appointment To</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $__currentLoopData = $appointments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $appointment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td scope="row"><?php echo e($key+1); ?></td>
                                        <td scope="row">
                                            <?php echo e($appointment->service->name); ?>

                                        </td>
                                        <td>
                                            <?php echo e($appointment->details); ?>

                                        </td>
                                        <td>
                                            <?php echo e(date('d-m-Y g:i A', strtotime($appointment->appoint_at))); ?>

                                        </td>
                                        <td>
                                            <?php if($appointment->status == 1): ?>
                                                <b class="text-success">Active</b>
                                            <?php elseif($appointment->status == 0): ?>
                                                <b class="text-primary">Pending</b>
                                            <?php elseif($appointment->status == 2): ?>
                                                <b class="text-danger">Complete</b>
                                            <?php elseif($appointment->status == 3): ?>
                                                <b class="text-dark">Prescribe</b>
                                            <?php endif; ?>
                                        </td>
                                        <td>
                                            <div class="btn-group">
                                                <a class="btn btn-primary"
                                                    href="<?php echo e(route('patient.appointment.show', $appointment->id)); ?>">View</a>
                                                <?php
                                            if(isset($appointment->status)):
                                                if($appointment->status == 0):
                                        ?>
                                                <a class="btn btn-info"
                                                    href="<?php echo e(URL::to('/patient/appointment/edit/' . $appointment->id)); ?>">Edit</a>
                                                <a class="btn btn-danger" href="<?php echo e(URL::to('#')); ?>">Delete</a>
                                                <?php elseif($appointment->status == 1): ?>

                                                <?php endif; endif;
                                        ?>
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

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/suoxuahd/public_html/resources/views/patient/appointment/list.blade.php ENDPATH**/ ?>