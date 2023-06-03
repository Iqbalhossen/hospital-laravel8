<?php $__env->startSection('content'); ?>
<!-- /.card-header -->
<div class="container">
    <div class="row justify-content-center">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                      <div class="col-md-6">
                        <b>Slot List</b>
                      </div>
                    </div>
                </div>
                <div class="card-body table-responsive p-0" style="height: 75vh;">
                    <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                        <th>Start</th>
                        <th>End</th>

                        <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $__currentLoopData = $slots; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $slot): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($slot->start); ?></td>
                                <td><?php echo e($slot->end); ?></td>

                                <td>
                                <div class="btn-group">

                                    <a  class="btn btn-info btn-sm"
                                        href="<?php echo e(route('slot.edit',$slot->id)); ?>">
                                        Edit
                                    </a> <br/>

                                    <a  class="btn btn-danger btn-sm"
                                    href="<?php echo e(route('slot.remove',$slot->id)); ?>">
                                        Delete
                                    </a> <br/>

                                </div>
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
<!-- /.card-body -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/suoxuahd/public_html/resources/views/admin/slot/index.blade.php ENDPATH**/ ?>