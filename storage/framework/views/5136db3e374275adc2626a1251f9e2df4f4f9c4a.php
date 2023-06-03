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
                                    <th scope="col">Service Name</th>
                                    <th scope="col">Appointment At</th>
                                    <th>Total</th>
                                    <th>Discount</th>

                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $__currentLoopData = $appointments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $appointment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td><?php echo e($key+1); ?></td>
                                        <th scope="row">
                                            <?php echo e($appointment->user->name); ?>

                                        </th>
                                        <th>
                                            <?php echo e($appointment->user->phone); ?>

                                        </th>
                                        <th>
                                            <?php echo e($appointment->service->name); ?>

                                        </th>
                                        <th>
                                            <?php echo e(date('d-m-Y g:i A', strtotime($appointment->appoint_at))); ?>

                                        </th>
                                        <th><?php echo e($appointment->amount); ?></th>
                                        <th><?php echo e($appointment->discount); ?></th>

                                        <td>
                                            <a class="btn btn-info"
                                                href="<?php echo e(route('compounder.appointment.show', $appointment->id)); ?>">View</a>
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

<?php echo $__env->make('layouts.compounder', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/suoxuahd/public_html/resources/views/compounder/appointment/index.blade.php ENDPATH**/ ?>