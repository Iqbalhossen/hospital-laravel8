<?php $__env->startSection('content'); ?>
<div class="container">

    <div class="row">
        <div class="col-md-6">
           <div class="card">
               <div class="card-body">

                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th colspan="2">Requisition</th>


                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th>Title</th>
                            <td><?php echo e($requisition->title); ?></td>
                        </tr>
                        <tr>
                            <th>Description</th>
                            <td><?php echo e($requisition->description); ?></td>
                        </tr>
                        <tr>
                            <th>Created By</th>
                            <td><?php echo e($requisition->user->name); ?></td>
                        </tr>
                        <tr>
                            <th>Assigned Employee</th>
                            <td><?php echo e($requisition->employee->name); ?></td>
                        </tr>
                        <tr>
                            <th>Created At</th>
                            <td><?php echo e($requisition->created_at->format('h:i a d-m-y')); ?></td>
                        </tr>
                        <tr>
                            <th>Total</th>
                            <td><?php echo e($requisition->amount); ?></td>
                        </tr>
                        <tr>
                            <th>Paid</th>
                            <td><?php echo e($requisition->paid); ?></td>
                        </tr>
                        <tr>
                            <th>Due</th>
                            <td><?php echo e($requisition->amount-$requisition->paid); ?></td>
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
                                <th colspan="5" >Payment history</th>
                            </tr>
                            <tr>
                                <th>Date</th>
                                <th>Amount</th>
                                <th>Type</th>
                                <th>Sender</th>
                                <th>Paid By</th>
                            </tr>
                        </thead>
                        <tbody>
                           <?php $__currentLoopData = $requisition->payments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $payment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
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
          </div>
        </div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.'.auth()->user()->role, \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/suoxuahd/public_html/resources/views/accountant/requisition/show.blade.php ENDPATH**/ ?>