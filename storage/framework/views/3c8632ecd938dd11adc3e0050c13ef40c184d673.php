<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-md-6">
                                <b>Appointment List</b>
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
                                    <th scope="col">Patient Contact</th>
                                    <th scope="col">Appointment At</th>
                                    <th>Visit</th>
                                    <th>Therapy</th>
                                    <th>Total</th>
                                    <th>Discount</th>
                                    <th>Given</th>
                                    <th>Due</th>


                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $__currentLoopData = $appointments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $appointment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <?php
                                        $visit = $appointment->doctor->doctor->visit ?? 0;
                                        $therapies = $appointment->therapies->sum('total');
                                        $total = $visit + $therapies;
                                    ?>
                                    <tr>
                                        <td><?php echo e($key + 1); ?></td>
                                        <th scope="row"><?php echo e($appointment->user->name); ?></th>
                                        <th><?php echo e($appointment->user->phone); ?></th>
                                        <th><?php echo e(date('Y-m-d', strtotime($appointment->appoint_at))); ?></th>
                                        <th><?php echo e($visit); ?></th>
                                        <th><?php echo e($therapies); ?></th>
                                        <th><?php echo e($total); ?></th>
                                        <th><?php echo e($appointment->discount); ?></th>
                                        <th><?php echo e($appointment->given); ?></th>
                                        <th><?php echo e($appointment->amount - $appointment->discount - $appointment->given); ?></th>


                                        <td>
                                            <a class="btn btn-info"
                                                href="<?php echo e(route('accountant.appointment.show', $appointment->id)); ?>">View</a>
                                            <a class="btn btn-primary"
                                                href="<?php echo e(route('appointment.pay', $appointment->id)); ?>">Pay</a>

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

<?php echo $__env->make('layouts.accountant', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/suoxuahd/public_html/resources/views/accountant/appointment/index.blade.php ENDPATH**/ ?>