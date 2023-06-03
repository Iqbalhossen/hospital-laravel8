<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
          <div class="col-md-12">
              <div class="card">
                  <div class="card-header">
                    <div class="row">
                      <div class="col-md-6">
                        <b>Payment for Appointment #<?php echo e($appointment->id); ?></b>
                        <table class="table table-striped">
                            <tbody>
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
                                    <td><?php echo e($appointment->amount-$appointment->discount-$appointment->given); ?></td>
                                </tr>
                            </tbody>
                        </table>
                      </div>
                      <div class="col-md-6">
                        <b>Payment history</b>
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Date</th>
                                    <th>Amount</th>
                                    <th>Type</th>
                                    <th>Sender</th>
                                    <th>Received By</th>
                                    <th>
                                        Action
                                    </th>
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
                                    <td>
                                        <div class="btn-group">
                                            <a class="btn btn-info btn-sm" href="<?php echo e(route('payment.print',$payment->id)); ?>">Print</a>
                                            <a class="btn btn-warning btn-sm" href="<?php echo e(route('payment.edit',$payment->id)); ?>">Edit</a>
                                            <a class="btn btn-primary btn-sm" href="<?php echo e(route('payment.history',$payment->id)); ?>">History</a>

                                        </div>
                                    </td>
                                </tr>
                                 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tbody>
                        </table>
                      </div>

                    </div>
                  </div>
                  <div class="card-body">
                      <form action="<?php echo e(route('appointment.paid',$appointment->id)); ?>" method="post">
                        <?php echo csrf_field(); ?>
                        <div class="form-group">
                            <label for="name">Type</label>
                            <select onchange="changed(this.value)" name="is_cash" id="" class="form-control">
                                <option value="1">Cash</option>
                                <option value="0">Mobile Agent</option>
                            </select>
                        </div>
                        <script>
                            function changed(value){
                                if(value=='0'){
                                    document.getElementById('mobile').style.display='block';
                                }else{
                                    document.getElementById('mobile').style.display='none';
                                }
                            }
                        </script>
                        <div id="mobile" style="display: none">
                            <div class="form-group" >
                                <label for="name">Mobile Agent</label>
                                <select name="mobile_agent_id" id="" class="form-control">
                                    <?php $__currentLoopData = $mobileAgents; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $mobile_agent): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($mobile_agent->id); ?>"><?php echo e($mobile_agent->number); ?> (<?php echo e($mobile_agent->type); ?>)</option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="name">Sender Type</label>
                                <select name="type" id="" class="form-control">
                                    <option value="Bkash">Bkash</option>
                                    <option value="Nagad">Nagad</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="name">Sender Number</label>
                                <input type="text" class="form-control" name="number">
                            </div>
                            <div class="form-group">
                                <label for="name">Transaction ID</label>
                                <input type="text" class="form-control" name="trans_id">
                            </div>

                        </div>
                        <div class="form-group">
                            <label for="name">Amount</label>
                            <input min="1" max="<?php echo e($appointment->amount-$appointment->discount-$appointment->given); ?>" type="number" class="form-control" name="amount">
                        </div>

                        <div class="form-group">
                            <button class="btn btn-success">Receive</button>
                        </div>
                      </form>
                  </div>
                  </div>
                  </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.accountant', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/suoxuahd/public_html/resources/views/accountant/appointment/pay.blade.php ENDPATH**/ ?>