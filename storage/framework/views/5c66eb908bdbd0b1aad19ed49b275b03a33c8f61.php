<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-md-2">
                                <b>Your Appointment List</b>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <?php echo $__env->make('filter-form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        <table id="d-table" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th scope="col">Patient Name</th>
                                    <th scope="col">Age</th>
                                    <th scope="col">Blood</th>
                                    <th scope="col">Gender</th>
                                    <th scope="col">Appointment To</th>
                                    <th scope="col">Details</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $__currentLoopData = $appointments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $appointment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td>
                                            <?php echo e($key + 1); ?>

                                        </td>
                                        <th scope="row">
                                            <?php echo e($appointment->user_name); ?>

                                        </th>
                                        <td>
                                            <?php echo e($appointment->age); ?>

                                        </td>
                                        <td>
                                            <?php echo e($bloods[$appointment->blood]); ?>

                                        </td>
                                        <td>
                                            <?php if($appointment->gender == 1): ?>
                                                <b class="text-success">Male</b>
                                            <?php else: ?>
                                                <b class="text-danger">Female</b>
                                            <?php endif; ?>
                                        </td>
                                        <td><?php echo e(date('Y-m-d', strtotime($appointment->appoint_at))); ?></td>
                                        <td>
                                            <?php echo e($appointment->details); ?>

                                        </td>
                                        <td>
                                            <div class="btn btn-group">
                                                <a class="btn btn-warning btn-sm"
                                                    href="<?php echo e(route('doctor.appointment.show', $appointment->id)); ?>">
                                                    Show
                                                </a>
                                                <a class="btn btn-info btn-sm"
                                                    href="<?php echo e(URL::to('/doctor/appointment/refer/' . $appointment->id . '/' . $appointment->p_id)); ?>">
                                                    Refer
                                                </a>
                                                <a class="btn btn-primary btn-sm"
                                                    href="<?php echo e(URL::to('/doctor/appointment/therapy/' . $appointment->id . '/' . $appointment->p_id)); ?>">
                                                    Therapy
                                                </a>
                                                <a class="btn btn-success btn-sm"
                                                    href="<?php echo e(URL::to('/doctor/appointment/prescription/' . $appointment->id . '/' . $appointment->p_id)); ?>">
                                                    Prescription
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

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/suoxuahd/public_html/resources/views/doctor/appointment/index.blade.php ENDPATH**/ ?>