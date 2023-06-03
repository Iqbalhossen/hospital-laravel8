<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <table class="table table-striped">
                        <tbody>
                            <tr>
                                <th>Therapy</th>
                                <td><?php echo e($appointmentTherapy->therapy->therapy_name); ?></td>
                            </tr>
                            <tr>
                                <th>Total</th>
                                <td><?php echo e($appointmentTherapy->total); ?></td>
                            </tr>
                            <tr>
                                <th>Given</th>
                                <td><?php echo e($appointmentTherapy->given); ?></td>
                            </tr>
                            <tr>
                                <th>Remaining</th>
                                <td><?php echo e($appointmentTherapy->total-$appointmentTherapy->given); ?></td>
                            </tr>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <?php $__currentLoopData = $appointmentTherapy->individuals; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $individual): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-md-6"><h4><?php echo e($individual->created_at->format("h:i a d-m-y")); ?></h4></div>
                        <div class="col-md-6">
                            <?php echo e($individual->user->name); ?>

                        </div>
                    </div>

                </div>
                <div class="card-body">
                    <h5>
                        Machine Used
                    </h5>
                    <?php $__currentLoopData = $individual->machines; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $machine): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li><?php echo e($machine->machine->name); ?></li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <h5>
                        Note
                    </h5>
                    <p>
                        <?php echo e($individual->note); ?>

                    </p>
                </div>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/suoxuahd/public_html/resources/views/doctor/appointment/history.blade.php ENDPATH**/ ?>