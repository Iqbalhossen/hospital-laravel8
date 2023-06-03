<?php $__env->startSection('content'); ?>
<!-- /.card-header -->
<div class="container">
    <div class="row justify-content-center">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                      <div class="col-md-6">
                        <b>Attendence Report</b>
                      </div>
                    </div>
                </div>
                <div class="card-body " >
                    <table id="d-table" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                        <th>Date</th>
                        <th>Prsent</th>
                        <th>On Leave</th>
                        <th>Absent</th>


                        </tr>
                    </thead>
                    <tbody>
                        <?php $__currentLoopData = $userAttendences; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $r): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($r->attendence_date); ?></td>
                                <td><?php echo e($r->present); ?></td>

                                <td><?php echo e($r->on_leave); ?></td>
                                <td><?php echo e($totalUser-$r->present-$r->on_leave); ?></td>


                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /.card-body -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/suoxuahd/public_html/resources/views/admin/user_attendence/report.blade.php ENDPATH**/ ?>