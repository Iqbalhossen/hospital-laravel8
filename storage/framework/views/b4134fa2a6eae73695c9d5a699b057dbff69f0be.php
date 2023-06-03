<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-md-6">
                                <b>Add New Requisition</b>
                            </div>
                            <div class="col-md-6">
                                <div class="dropdown float-right">
                                    <a href="<?php echo e('/employee/requisition'); ?>" class="btn btn-success">Requisition List</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <?php if(session('success')): ?>
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <strong><?php echo e(session('success')); ?></strong>
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        <?php endif; ?>
                        <?php if(session('error')): ?>
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                <strong><?php echo e(session('error')); ?></strong>
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        <?php endif; ?>


                        <form method="post" action="<?php echo e(route('requisition.store')); ?>">
                            <?php echo e(csrf_field()); ?>

                            <div class="form-group row">
                                <label for="name" class="col-sm-2 col-form-label"> Title*</label>
                                <div class="col-sm-6">
                                    <input required id="title" type="text" class="form-control" name="title"
                                        value="<?php echo e(old('title')); ?>" />
                                    <?php if($errors->has('title')): ?>
                                        <span class="text-danger"><?php echo e($errors->first('title')); ?></span>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="end" class="col-sm-2 col-form-label"> Description*</label>
                                <div class="col-sm-6">
                                    <textarea required class="form-control" name="description" id="" cols="10"
                                        rows="3"><?php echo e(old('description')); ?></textarea>
                                    <?php if($errors->has('description')): ?>
                                        <span class="text-danger"><?php echo e($errors->first('description')); ?></span>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="end" class="col-sm-2 col-form-label"> Employee</label>
                                <div class="col-sm-6">
                                    <select name="user_id" class="form-control" id="">
                                        <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value="<?php echo e($user->id); ?>"><?php echo e($user->name); ?></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="name" class="col-sm-2 col-form-label"> Amount*</label>
                                <div class="col-sm-6">
                                    <input required id="amount" type="number" class="form-control" name="amount"
                                        value="<?php echo e(old('amount')); ?>" />
                                    <?php if($errors->has('amount')): ?>
                                        <span class="text-danger"><?php echo e($errors->first('amount')); ?></span>
                                    <?php endif; ?>
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-sm-10 offset-sm-2">
                                    <button type="submit" class="btn btn-primary">Add Requisition</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.'.auth()->user()->role, \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/suoxuahd/public_html/resources/views/employee/requisition/create.blade.php ENDPATH**/ ?>