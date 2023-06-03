<?php $__env->startSection('content'); ?>
    <!-- /.card-header -->
    <div class="row" style="height: 300px;">

        <div class="container-fluid">
            <!-- Info boxes -->
            <div class="row">

                <!-- /.col -->
                <div class="col-12 col-sm-6 col-md-3">
                  <a href="<?php echo e(URL::to('/doctor/appointment/list')); ?>">
                    <div class="info-box mb-3">
                      <div class="info-box-content">
                          <span class="info-box-text">Total Appointment</span>
                          <span class="info-box-number"><?php echo e(count($appointments)); ?></span>
                      </div>
                      <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                  </a>
                </div>
                <div class="col-12 col-sm-6 col-md-3">
                  <a href="<?php echo e(URL::to('/doctor/search/patient')); ?>">
                    <div class="info-box mb-3">
                      <div class="info-box-content">
                          <span class="info-box-text">Total Patient</span>
                          <span class="info-box-number"><?php echo e($totalPatient); ?></span>
                      </div>
                      <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                  </a>
                    
                </div>
                <div class="col-12 col-sm-6 col-md-3">
                    <div class="info-box mb-3">


                        <div class="info-box-content">
                            <span class="info-box-text">Total Referred</span>
                            <span class="info-box-number"><?php echo e($refer); ?></span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>
                <div class="col-12 col-sm-6 col-md-3">
                    <div class="info-box mb-3">


                        <div class="info-box-content">
                            <span class="info-box-text">Total Therapy </span>
                            <span class="info-box-number"><?php echo e($therapyCounts); ?></span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>
                <div class="col-12 col-sm-6 col-md-3">
                    <div class="info-box mb-3">


                        <div class="info-box-content">
                            <span class="info-box-text">Total Given</span>
                            <span class="info-box-number"><?php echo e($therapyCompletedCounts); ?></span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>
                <div class="col-12 col-sm-6 col-md-3">
                    <div class="info-box mb-3">


                        <div class="info-box-content">
                            <span class="info-box-text">Total Remain</span>
                            <span class="info-box-number"><?php echo e($therapyCounts - $therapyCompletedCounts); ?></span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>
                <div class="col-12 col-sm-6 col-md-3">
                    <div class="info-box mb-3">


                        <div class="info-box-content">
                            <span class="info-box-text">Total Visit</span>
                            <span class="info-box-number"><?php echo e($doctor->visit * count($appointments)); ?></span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>
                <div class="col-12 col-sm-6 col-md-3">
                    <div class="info-box mb-3">


                        <div class="info-box-content">
                            <span class="info-box-text">Total Task</span>
                            <span class="info-box-number">0</span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>




                <!-- /.col -->
            </div>
            <!-- /.content -->
        </div>
        <!-- ./wrapper -->

    <?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/suoxuahd/public_html/resources/views/doctor/home.blade.php ENDPATH**/ ?>