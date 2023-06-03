<?php $__env->startSection('content'); ?>
    <!-- /.card-header -->
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-md-6">
                                <b>Task List</b>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <?php echo $__env->make('filter-form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        <table id="d-table" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Title</th>
                                    <th>Description</th>
                                    <th>Created At</th>
                                    <th>Date</th>

                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $__currentLoopData = $tasks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $task): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td><?php echo e($key + 1); ?></td>
                                        <td><?php echo e($task->title); ?></td>
                                        <td><?php echo e($task->description); ?></td>
                                        <th>
                                            <?php echo e($task->created_at->format('d-m-Y')); ?>

                                            <br>
                                            <?php echo e($task->created_at->format('h:i a')); ?>


                                        </th>
                                        <th>
                                            <?php echo e($task->date); ?>

                                        </th>
                                        <td>
                                            <?php if($task->status == 0): ?>
                                                <span class="badge badge-warning">Pending</span>
                                            <?php elseif($task->status == 1): ?>
                                                <span class="badge badge-success">Completed</span>
                                            <?php else: ?>
                                                <span class="badge badge-danger">Rejected</span>
                                            <?php endif; ?>
                                        </td>
                                        <td>
                                            <div class="btn-group">

                                                <a class="btn btn-info btn-sm"
                                                    href="<?php echo e(route('emp.task.show', $task->id)); ?>">
                                                    Show
                                                </a>

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

<?php echo $__env->make('layouts.'.auth()->user()->role, \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/suoxuahd/public_html/resources/views/employee/task/index.blade.php ENDPATH**/ ?>