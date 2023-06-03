<?php $__env->startSection('content'); ?>
<style>
    .info-box>a{
        color: #fff;
    }
</style>
<!-- /.card-header -->
<div class="row" style="height: 300px;">


    <div class="container-fluid">
      <!-- Info boxes -->
      <div class="row">

        <!-- /.col -->
        <div class="col-12 col-sm-6 col-md-3">

            <div class="small-box bg-info">
                <div class="inner">
                  <h3><?php echo e($totalRegisteredUsers); ?></h3>

                  <p>Total Registered</p>
                </div>

                <a href="<?php echo e(URL::to('admin/patient/list')); ?>?dashboard=true" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
              </div>

            <!-- /.info-box-content -->
          <!-- /.info-box -->
        </div>
        <div class="col-12 col-sm-6 col-md-3">
            <div class="small-box bg-warning">
                <div class="inner">
                  <h3><?php echo e(count($appointments)); ?></h3>

                  <p>Total Appointment</p>
                </div>

                <a href="<?php echo e(URL::to('admin/appointment/list')); ?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
              </div>



              <!-- /.info-box-content -->
            <!-- /.info-box -->
          </div>
          <div class="col-12 col-sm-6 col-md-3">
            <div class="small-box bg-success">
                <div class="inner">
                  <h3><?php echo e($therapyCounts); ?></h3>

                  <p>Total Therapy</p>
                </div>

                <a href="<?php echo e(URL::to('admin/appointment/list')); ?>?therapy=true" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
              </div>

            <!-- /.info-box -->
          </div>
          <div class="col-12 col-sm-6 col-md-3">
            <div class="small-box bg-danger">
                <div class="inner">
                  <h3><?php echo e($totalTask); ?></h3>

                  <p>Total Task</p>
                </div>

                <a href="<?php echo e(URL::to('/admin/task')); ?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
              </div>

            <!-- /.info-box -->
          </div>
          <div class="col-12 col-sm-6 col-md-3">
            <div class="small-box bg-primary">
                <div class="inner">
                  <h3><?php echo e($totalCompleteTask); ?></h3>

                  <p>Completed Task</p>
                </div>

                <a href="<?php echo e(URL::to('/admin/task')); ?>?status=2" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
              </div>
            <!-- /.info-box -->
          </div>
          <div class="col-12 col-sm-6 col-md-3">
            <div class="small-box bg-info">
                <div class="inner">
                  <h3><?php echo e($income); ?></h3>

                  <p>Total Earning</p>
                </div>

                <a href="<?php echo e(URL::to('admin/appointment/list')); ?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
              </div>
            <!-- /.info-box -->
          </div>
          <div class="col-12 col-sm-6 col-md-3">
            <div class="small-box bg-success">
                <div class="inner">
                  <h3><?php echo e($expense); ?></h3>

                  <p>Total Expense</p>
                </div>

                <a href="<?php echo e(route('expense.index')); ?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
              </div>
            <!-- /.info-box -->
          </div>
          <div class="col-12 col-sm-6 col-md-3">
            <div class="small-box bg-warning">
                <div class="inner">
                  <h3><?php echo e($totalRequisition); ?></h3>

                  <p>Total Requisition</p>
                </div>

                <a href="<?php echo e(URL::to('accountant/requisition/list')); ?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
              </div>

            <!-- /.info-box -->
          </div>
          <div class="col-12 col-sm-6 col-md-3">
            <div class="small-box bg-primary">
                <div class="inner">
                  <h3><?php echo e($todayIncome); ?></h3>

                  <p>Today Earning</p>
                </div>

                <a href="<?php echo e(URL::to('admin/appointment/list')); ?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
              </div>
            <!-- /.info-box -->
          </div>
          <div class="col-12 col-sm-6 col-md-3">
            <div class="small-box bg-info">
                <div class="inner">
                  <h3><?php echo e($todayExpense); ?></h3>

                  <p>Today Expense</p>
                </div>

                <a href="<?php echo e(route('expense.index')); ?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
              </div>
            <!-- /.info-box -->
          </div>
          <div class="col-12 col-sm-6 col-md-3">
            <div class="small-box bg-warning">
                <div class="inner">
                  <h3><?php echo e($pendingAppointment); ?></h3>

                  <p>Pending Appointments</p>
                </div>

                <a href="<?php echo e(URL::to('admin/appointment/list')); ?>?pending=true" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
              </div>
            <!-- /.info-box -->
          </div>
          <div class="col-12 col-sm-6 col-md-3">
            <div class="small-box bg-danger">
                <div class="inner">
                  <h3><?php echo e($waiverAppointment); ?></h3>

                  <p>Waiver Appointments</p>
                </div>

                <a href="<?php echo e(URL::to('admin/appointment/list')); ?>?waiver=true" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
              </div>
            <!-- /.info-box -->
          </div>

        <!-- /.col -->
      </div>
      <!-- /.content -->
    </div>
    <!-- ./wrapper -->

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/suoxuahd/public_html/resources/views/admin/home.blade.php ENDPATH**/ ?>