<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
          <div class="col-md-12">
              <div class="card">
                  <div class="card-header">
                    <div class="row">
                      <div class="col-md-6">
                        <b>Your Payment History</b>
                      </div>
                    </div>
                  </div>
                  <div class="card-body">
                    <div class="card-body">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Date</th>
                                    <th>Amount</th>
                                    <th>Type</th>
                                    <th>Sender</th>
                                </tr>
                            </thead>
                            <tbody>
                               <?php $__currentLoopData = $payments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $payment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
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

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/suoxuahd/public_html/resources/views/patient/appointment/payment_history.blade.php ENDPATH**/ ?>