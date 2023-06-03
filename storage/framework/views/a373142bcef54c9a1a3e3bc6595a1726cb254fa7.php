<?php $__env->startSection('content'); ?>
    <!-- /.card-header -->
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-md-6">
                                <b>Expense List</b>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <?php echo $__env->make('filter-form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        <table id="d-table" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>SL No</th>
                                    <th>Title</th>
                                    <td>Type</td>
                                    <th>Description</th>
                                    <th>Amount</th>
                                    <th>Paid</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $__currentLoopData = $expenses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $expense): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td><?php echo e($key+1); ?></td>
                                        <td><?php echo e($expense->title); ?></td>
                                        <td><?php echo e($expense->expenseType->name); ?></td>
                                        <td><?php echo e($expense->description); ?></td>
                                        <td><?php echo e($expense->amount); ?></td>
                                        <td><?php echo e($expense->paid); ?></td>

                                        <td>
                                            <div class="btn-group">
                                                <a class="btn btn-warning btn-sm"
                                                    href="<?php echo e(route('expense.pay', $expense->id)); ?>">Pay</a>
                                                <a class="btn btn-info btn-sm"
                                                    href="<?php echo e(route('expense.edit', $expense->id)); ?>">
                                                    Edit
                                                </a>

                                                <a class="btn btn-danger btn-sm"
                                                    href="<?php echo e(route('expense.remove', $expense->id)); ?>">
                                                    Delete
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

<?php echo $__env->make('layouts.'.auth()->user()->role, \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/suoxuahd/public_html/resources/views/accountant/expense/index.blade.php ENDPATH**/ ?>