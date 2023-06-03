<?php $__env->startSection('content'); ?>
<div class="container">

    <div class="row">
        <div class="col-md-6">
           <div class="card">
               <div class="card-body">

                <table class="table table-striped">
                    <thead>
                       <tr>
                           <th colspan="2">Patient Profile</th>
                       </tr>
                    </thead>
                    <tbody>
                        <tr >
                            <th>Name</th>
                            <th ><?php echo e($patient->user->name); ?></th>


                        </tr>
                        <tr>
                            <th>Phone</th>
                            <td>
                                <?php echo e($patient->phone); ?>

                            </td>
                        </tr>
                       <tr>
                        <th>
                            RFID

                        </th>
                        <td>
                            <?php echo e($patient->rfid); ?>

                        </td>
                       </tr>
                        <tr>
                            <th>Email</th>
                            <td>
                                <?php echo e($patient->user->email); ?>

                            </td>
                        </tr>
                        <tr>
                            <th>Address</th>
                            <td>
                                <?php echo e($patient->address); ?>

                            </td>
                        </tr>
                    </tbody>
                </table>
               </div>
           </div>
        </div>
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">

                 <table class="table table-striped">
                     <thead>
                        <tr>
                            <th colspan="2">Appointments</th>
                        </tr>
                     </thead>
                     <tbody>
                            <?php $__currentLoopData = $patient->user->appointments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $appointment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td>
                                    <a href="<?php echo e(URL::to('admin/appointment/show/'.$appointment->id)); ?>">
                                        <?php echo e($appointment->doctor?$appointment->doctor->name:'No Doctor'); ?>

                                    </a>
                                </td>
                                <td>
                                    <?php echo e($appointment->created_at->diffForHumans()); ?>

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

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/suoxuahd/public_html/resources/views/admin/patient/show.blade.php ENDPATH**/ ?>