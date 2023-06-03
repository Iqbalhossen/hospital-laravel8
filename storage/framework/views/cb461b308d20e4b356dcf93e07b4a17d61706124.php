<?php $__env->startSection('content'); ?>
<!-- /.card-header -->
<div class="row" style="height: 300px;">


    <div class="container-fluid">
      <!-- Info boxes -->
      <div class="row">

        <!-- /.col -->
        <div class="col-12 col-sm-6 col-md-3">
          <a href="">
            <div class="info-box mb-3">
                <div class="info-box-content">
                  <span class="info-box-text">Total Registered</span>
                  <span class="info-box-number"><?php echo e($totalRegisteredUsers); ?></span>
                </div>
                <!-- /.info-box-content -->
              </div>
          </a>
          <!-- /.info-box -->
        </div>
        <div class="col-12 col-sm-6 col-md-3">
            <a href="<?php echo e(URL::to('accountant/appointment/list')); ?>">
                <div class="info-box mb-3">


                    <div class="info-box-content">
                      <span class="info-box-text">Total Appointment</span>
                      <span class="info-box-number"><?php echo e(count($appointments)); ?></span>
                    </div>
                    <!-- /.info-box-content -->
                  </div>
            </a>
            <!-- /.info-box -->
          </div>
          <div class="col-12 col-sm-6 col-md-3">
            <a href="<?php echo e(URL::to('accountant/appointment/list')); ?>">
                <div class="info-box mb-3">
                    <div class="info-box-content">
                      <span class="info-box-text">Total Therapy</span>
                      <span class="info-box-number"><?php echo e($therapyCounts); ?></span>
                    </div>
                    <!-- /.info-box-content -->
                  </div>
            </a>
            <!-- /.info-box -->
          </div>
          <div class="col-12 col-sm-6 col-md-3">
            <a href="">
                <div class="info-box mb-3">


                    <div class="info-box-content">
                      <span class="info-box-text">Total Bill</span>
                      <span class="info-box-number"><?php echo e($totalBill); ?></span>
                    </div>
                    <!-- /.info-box-content -->
                  </div>
            </a>
            <!-- /.info-box -->
          </div>
          <div class="col-12 col-sm-6 col-md-3">
            <a href="">
                <div class="info-box mb-3">


                    <div class="info-box-content">
                      <span class="info-box-text">Total Discount</span>
                      <span class="info-box-number"><?php echo e($totalDiscount); ?></span>
                    </div>
                    <!-- /.info-box-content -->
                  </div>
            </a>
            <!-- /.info-box -->
          </div>
          <div class="col-12 col-sm-6 col-md-3">
            <a href="">
                <div class="info-box mb-3">


                    <div class="info-box-content">
                      <span class="info-box-text">Total Given</span>
                      <span class="info-box-number"><?php echo e($totalGiven); ?></span>
                    </div>
                    <!-- /.info-box-content -->
                  </div>
            </a>
            <!-- /.info-box -->
          </div>
          <div class="col-12 col-sm-6 col-md-3">
            <a href="">
                <div class="info-box mb-3">


                    <div class="info-box-content">
                      <span class="info-box-text">Total Experience</span>
                      <span class="info-box-number"><?php echo e($new); ?></span>
                    </div>
                    <!-- /.info-box-content -->
                  </div>
            </a>
            <!-- /.info-box -->
          </div>
          <div class="col-12 col-sm-6 col-md-3">
            <a href="">
                <div class="info-box mb-3">


                    <div class="info-box-content">
                      <span class="info-box-text">Total Requisition</span>
                      <span class="info-box-number"><?php echo e($totalRequisition); ?></span>
                    </div>
                    <!-- /.info-box-content -->
                  </div>
            </a>
            <!-- /.info-box -->
          </div>

        <!-- /.col -->
      </div>
      <!-- /.content -->
    </div>
    <!-- ./wrapper -->

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.accountant', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/suoxuahd/public_html/resources/views/accountant/home.blade.php ENDPATH**/ ?>