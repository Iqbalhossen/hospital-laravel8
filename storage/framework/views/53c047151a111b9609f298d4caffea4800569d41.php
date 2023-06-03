<?php $__env->startSection('content'); ?>
<!-- /.card-header -->
<div class="container">
    <div class="row justify-content-center">
        <div class="col-12">
            <form action="<?php echo e(route('user-attendence.store')); ?>" method="post">
                <?php echo csrf_field(); ?>
            <div class="card">
                <div class="card-header">
                    <div class="row">
                      <div class="col-md-4">
                        <div class="row">
                            <div class="col-md-6">
                                <b>Attendence Shit for </b>
                            </div>
                            <div class="col-md-6">
                        <input onchange="updateDate(this.value)" type="date" id="date" value="<?php echo e($date); ?>" class="form-control">

                            </div>
                            <script>
                                function updateDate(date){
                                    window.location.href = "<?php echo e(route('user-attendence.index')); ?>?date="+date;
                                }
                            </script>
                        </div>
                      </div>
                      <div class="col-md-2">
                        <div class="form-group">
                            <button class="btn btn-info">Update Attendence</button>
                        </div>
                      </div>
                      <div class="col-md-2">
                        <input  type="date" id="start" value="" class="form-control">

                      </div>
                      <div class="col-md-2">
                        <input  type="date" id="end" value="<?php echo e($date); ?>" class="form-control">

                      </div>
                      <div class="col-md-2">
                        <button onclick="viewReport()" type="button" class=" btn btn-info">View Report</button>

                      </div>
                      <script>
                        function viewReport(){
                            var start = document.getElementById('start').value;
                            var end = document.getElementById('end').value;

                            window.location.href = "<?php echo e(URL::to('/admin/attendence/report')); ?>?start="+start+"&end="+end;
                        }
                    </script>

                    </div>
                </div>
                <div class="card-body " >

                    <div class="row">
                            <input type="hidden" name="date" value="<?php echo e($date); ?>">
                            <?php $__currentLoopData = $userAttendences; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $attendence): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="col-md-6">
                            <div class="row" style="width: 100%;">
                                <div class="col-md-6">
                                    <b><?php echo e($attendence->user->name); ?> (<?php echo e($attendence->user->id); ?>)</b>
                                </div>
                                <div class="col-md-6">
                                    <input <?php echo e($attendence->present == 1?'checked':''); ?> value="<?php echo e($attendence->user->id); ?>" type="checkbox" name="user[]" id="">

                                </div>
                            </div>
                        </div>
                        <hr>

                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                </div>

                </div>
            </div>
        </form>
        </div>
    </div>
</div>
<!-- /.card-body -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/suoxuahd/public_html/resources/views/admin/user_attendence/index.blade.php ENDPATH**/ ?>