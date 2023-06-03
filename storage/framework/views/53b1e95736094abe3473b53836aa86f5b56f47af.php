<?php $__env->startSection('content'); ?>
<style>
    @media  print {
 .no-print {
      display: none;
  }
}
</style>
<div class="container">

            <form action="<?php echo e(URL::to('/accountant/report/expense')); ?>">
                <div class="row no-print" id="">
                    <div class="col-md-4">
                        <input type="date" name="start" class="form-control">
                    </div>
                    <div class="col-md-4">
                        <input type="date" name="end" class="form-control">
                    </div>
                    <div class="col-md-2">
                        <button class="btn btn-success">Submit</button>
                    </div>
                    <div class="col-md-2">
                        <button onclick="window.print()" type="button" class="btn btn-info">Print</button>
                    </div>
                </div>
            </form>
            <br>
            <div class="card">
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                            <?php if(isset($start)&&isset($end)): ?>
                            <tr>
                                <th colspan="4" style="text-align: center;">
                                    Expenses from <?php echo e($start); ?> to <?php echo e($end); ?>

                                </th>
                            </tr>
                            <?php endif; ?>
                            <tr>
                                <th>Date</th>
                                <th>Amount</th>
                                <th>Paid</th>
                                <th>Due</th>

                            </tr>
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = $expenses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $expense): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($expense->date); ?></td>
                                <td><?php echo e($expense->total); ?></td>
                                <td><?php echo e($expense->total_paid); ?></td>
                                <td><?php echo e($expense->total-$expense->total_paid); ?></td>

                            </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>
                </div>
            </div>

</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.accountant', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/suoxuahd/public_html/resources/views/accountant/appointment/expense_report.blade.php ENDPATH**/ ?>