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
                            
                            <div class="col-md-6">
                                <div class="dropdown float-right">
                                    <a href="<?php echo e('/admin/appointment/add'); ?>" class="btn btn-success">
                                        Add Appointment
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
                                    <th scope="col">Patient Name</th>
                                    <th scope="col">Patient Contact</th>
                                    <th scope="col">Service Name</th>
                                    <th scope="col">Applied At</th>

                                    <th scope="col">Appointment At</th>
                                    <?php if(request()->has('therapy')): ?>
                                        <th scope="col">Therapy</th>
                                        <th scope="col">Given</th>

                                    <?php else: ?>
                                        <th scope="col">Total</th>
                                        <th scope="col">Paid</th>
                                    <?php endif; ?>
                                    <th class="non" scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $__currentLoopData = $appointments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $appointment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td><?php echo e($key + 1); ?></td>
                                        <th scope="row">
                                            <?php echo e($appointment->user->name); ?> (<?php echo e($appointment->user->rfid); ?>)
                                        </th>
                                        <th>
                                            <?php echo e($appointment->user->phone); ?>

                                        </th>
                                        <th>
                                            <?php echo e($appointment->service->name); ?>

                                        </th>
                                        <th>
                                            <?php echo e($appointment->created_at->format('d-m-Y')); ?>

                                            <br>
                                            <?php echo e($appointment->created_at->format('h:i a')); ?>


                                        </th>
                                        <th>
                                            <?php echo e(Carbon\Carbon::parse($appointment->appoint_at)->format('d-M-y')); ?>

                                        </th>
                                        <?php if(request()->has('therapy')): ?>
                                            <td>
                                                <?php echo e($appointment->therapies->sum('total')); ?>

                                            </td>
                                            <td>
                                                <?php echo e($appointment->therapies->sum('given')); ?>

                                            </td>

                                        <?php else: ?>
                                            <td>
                                                <?php echo e($appointment->amount); ?>

                                            </td>
                                            <td>
                                                <?php echo e($appointment->given); ?>

                                            </td>
                                        <?php endif; ?>

                                        <td>
                                            <div class="btn-group">
                                                <a class="btn btn-info"
                                                    href="<?php echo e(URL::to('/admin/appointment/edit/' . $appointment->id)); ?>">Edit</a>
                                                <a class="btn btn-success"
                                                    href="<?php echo e(URL::to('/admin/appointment/show/' . $appointment->id)); ?>">Show</a>

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

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/suoxuahd/public_html/resources/views/admin/appointment/appoint_list.blade.php ENDPATH**/ ?>