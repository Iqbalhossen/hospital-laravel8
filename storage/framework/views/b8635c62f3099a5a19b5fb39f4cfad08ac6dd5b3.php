<?php $__env->startSection('content'); ?>
<div class="container">

    <div class="row">
        <div class="col-md-6">
           <div class="card">
               <div class="card-body">

                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th >Appointment</th>
                            <th >
                                <a target="_blank" class="btn btn-info" href="<?php echo e(route('appointment.print',$appointment->id)); ?>">
                                    Print
                                </a>
                            </th>

                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th>Appointment ID</th>
                            <td><?php echo e($appointment->id); ?></td>
                        </tr>
                        <tr>
                            <th>Patient Name</th>
                            <td><?php echo e($appointment->user->name); ?></td>
                        </tr>
                        <tr>
                            <th>Doctor Name</th>
                            <td><?php echo e($appointment->doctor->name); ?></td>
                        </tr>
                        <tr>
                            <th>Appointment Date</th>
                            <td><?php echo e(Carbon\Carbon::parse($appointment->appoint_at)->format('d-m-y')); ?>

                                <br>
                                <?php echo e(Carbon\Carbon::parse($appointment->appoint_at)->format('h:m a ')); ?>

                            </td>
                        </tr>
                        <tr>
                            <th colspan="2">Account</th>
                        </tr>
                        <tr>
                            <th>Doctor Visit</th>
                            <td><?php echo e($appointment->doctor?$appointment->doctor->doctor->visit:''); ?></td>
                        </tr>
                        <tr>
                            <th>Total</th>
                            <td><?php echo e($appointment->amount); ?></td>
                        </tr>

                        <tr>
                            <th>Discount</th>
                            <td><?php echo e($appointment->discount); ?></td>
                        </tr>
                        <tr>
                            <th>Given</th>
                            <td><?php echo e($appointment->given); ?></td>
                        </tr>
                        <tr>
                            <th>Due</th>
                            <td><?php echo e(($appointment->doctor?$appointment->doctor->doctor->visit:0)+$appointment->amount-$appointment->discount-$appointment->given); ?></td>

                        </tr>
                        <tr>
                            <th colspan="2">Discount</th>

                        </tr>
                        <tr>
                           <form action="<?php echo e(route('appointment.discount',$appointment->id)); ?>" method="post">
                            <?php echo csrf_field(); ?>
                                <td>
                                    <input value="<?php echo e($appointment->discount); ?>" type="text" name="discount" id="" class="form-control">
                                </td>
                                <td>
                                <div class="row">
                                    <div class="col-md-8">
                                        <select name="type" id="" class="form-control">
                                            <option value="fixed">Fixed</option>

                                                <option value="percentage">Percentage</option>
                                          </select>
                                    </div>
                                    <div class="col-md-4">
                                  <button class="btn btn-primary" id="discount">Apply</button>

                                    </div>
                                </div>

                                </td>

                           </form>
                        </tr>
                    </tbody>
                </table>
               </div>
           </div>
           <?php echo $__env->make('common.appointment_prescription', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

           <div class="card">
               <div class="card-body">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th colspan="2">Notes</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $__currentLoopData = $appointment->notes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $note): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <th>
                                <?php echo e($note->user->name); ?>

                                <br>
                            <?php echo e($note->created_at->diffForHumans()); ?></th>
                            <td><?php echo e($note->note); ?></td>
                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                        <tr>
                            <th>Add Note</th>
                            <td>
                                <form action="<?php echo e(route('appointment.note.store',$appointment->id)); ?>" method="post">
                                    <?php echo csrf_field(); ?>
                                    <div class="form-group">
                                        <textarea name="note" id="note" class="form-control"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <button class="btn btn-success" type="submit">Add Note</button>
                                    </div>
                                </form>
                            </td>
                    </tbody>
                </table>
               </div>
           </div>
        </div>
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h5>Payment History</h5>
                </div>
                <div class="card-body">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Date</th>
                                <th>Amount</th>
                                <th>Type</th>
                                <th>Sender</th>
                                <th>Received By</th>
                            </tr>
                        </thead>
                        <tbody>
                           <?php $__currentLoopData = $appointment->payments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $payment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($payment->created_at->format('h:i a d-m-y')); ?></td>
                                <td><?php echo e($payment->amount); ?></td>
                                <td>
                                    <?php if($payment->is_cash==1): ?>
                                        Cash
                                    <?php else: ?>
                                    <?php echo e($payment->sender_type); ?>

                                    <br>
                                    <?php echo e($payment->mobileAgent->number); ?>


                                    <?php endif; ?>
                                </td>
                                <td>
                                    <?php if($payment->is_cash==1): ?>
                                    Cash
                                    <?php else: ?>
                                    <?php echo e($payment->sender_type); ?>

                                    <br>
                                    <?php echo e($payment->sender_number); ?>

                                <?php endif; ?>
                                </td>
                                <td><?php echo e($payment->user->name); ?></td>
                            </tr>
                             <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th colspan="2">Therapies</th>
                            </tr>

                        </thead>
                        <tbody>
                            <tr>
                                <th>Name</th>
                                <th>Dose</th>
                                
                                <th>Given</th>
                                <th>Action</th>
                            </tr>
                            <?php $__currentLoopData = $appointment->therapies; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $therapy): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($therapy->therapy->therapy_name); ?></td>
                                <td><?php echo e($therapy->total); ?></td>
                                
                                <td><?php echo e($therapy->given); ?></td>
                                <td>
                                    <a href="<?php echo e(route('compounder.therapy.history',$therapy->id)); ?>" class="btn btn-sm btn-info">View</a>
                                </td>
                                </td>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                        </tbody>
                    </table>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                 <table class="table table-striped">
                     <thead>
                         <tr>
                             <th colspan="2">Tests</th>
                         </tr>

                     </thead>
                     <tbody>

                         <?php $__currentLoopData = $appointment->tests; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $test): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                         <tr>
                             <td><?php echo e($test->name); ?></td>
                             <td><?php echo e($test->description); ?></td>

                             </td>
                         <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                     </tbody>
                 </table>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.compounder', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/suoxuahd/public_html/resources/views/compounder/appointment/show.blade.php ENDPATH**/ ?>