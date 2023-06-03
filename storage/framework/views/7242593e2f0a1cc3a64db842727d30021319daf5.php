<?php $__env->startSection('content'); ?>
    <!-- /.card-header -->
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-md-6">
                                <b>Requisition List</b>
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
                                    <th>Created By</th>
                                    <th>Assigned to</th>
                                    <th>Created At</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $__currentLoopData = $requisitions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $requisition): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td><?php echo e($key + 1); ?></td>
                                        <td><?php echo e($requisition->title); ?></td>
                                        <td><?php echo e($requisition->user->name); ?>(<?php echo e($requisition->user->id); ?>)</td>
                                        <td><?php echo e($requisition->employee->name); ?>(<?php echo e($requisition->employee->id); ?>)</td>

                                        <th>
                                            <?php echo e($requisition->created_at->format('d-m-Y')); ?>

                                            <br>
                                            <?php echo e($requisition->created_at->format('h:i a')); ?>


                                        </th>
                                        <td>
                                            <?php if($requisition->status == 0): ?>
                                                <span class="badge badge-warning">Pending</span>
                                            <?php elseif($requisition->status == 1): ?>
                                                <span class="badge badge-success">Completed</span>
                                            <?php else: ?>
                                                <span class="badge badge-danger">Rejected</span>
                                            <?php endif; ?>
                                        </td>
                                        <td>
                                            <div class="btn-group">
                                                <?php if($requisition->employee->id == auth()->user()->id && $requisition->emp_approved == 0): ?>
                                                    <a class="btn btn-warning btn-sm"
                                                        href="<?php echo e(route('requisition.approve', $requisition->id)); ?>">
                                                        Approve
                                                    </a>
                                                <?php endif; ?>
                                                <a class="btn btn-info btn-sm" href="#">
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

<?php echo $__env->make('layouts.'.auth()->user()->role, \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/suoxuahd/public_html/resources/views/employee/requisition/index.blade.php ENDPATH**/ ?>