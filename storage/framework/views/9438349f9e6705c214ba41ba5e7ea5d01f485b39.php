

<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-md-6">
                                <b>Edit Group</b>
                            </div>
                            <div class="col-md-6">
                                <div class="dropdown float-right">
                                    <a href="<?php echo e('/admin/therapy/list'); ?>" class="btn btn-success">Therapy List</a>
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


                        <form method="post" action="<?php echo e(route('group.update', $group->id)); ?>">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('PUT'); ?>
                            <div class="form-group row">
                                <label for="name" class="col-sm-2 col-form-label">Group Name*</label>
                                <div class="col-sm-6">
                                    <input id="name" type="text" class="form-control" name="name"
                                        value="<?php echo e($group->name); ?>" />
                                    <?php if($errors->has('name')): ?>
                                        <span class="text-danger"><?php echo e($errors->first('name')); ?></span>
                                    <?php endif; ?>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="name" class="col-sm-2 col-form-label">Group Price*</label>
                                <div class="col-sm-6">
                                    <input id="price" type="text" class="form-control" name="price"
                                        value="<?php echo e($group->price); ?>" />
                                    <?php if($errors->has('price')): ?>
                                        <span class="text-danger"><?php echo e($errors->first('price')); ?></span>
                                    <?php endif; ?>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="doses" class="col-sm-2 col-form-label">Therapies</label>
                                <div class="col-sm-6">
                                    <select multiple name="therapies[]" id="" class="select2 form-control">
                                        <?php $__currentLoopData = $therapies; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $therapy): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value="<?php echo e($therapy->id); ?>" <?php $__currentLoopData = $group->therapies; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $gTherapy): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> <?php echo e($therapy->id == $gTherapy->id ? ' selected':''); ?> <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>><?php echo e($therapy->therapy_name); ?></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>

                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-10 offset-sm-2">
                                    <button type="submit" class="btn btn-primary">Update Therapy Group</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
    <script>
        $(document).ready(function() {
            $('.select2').select2();
        });
    </script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/suoxuahd/public_html/resources/views/admin/group/edit.blade.php ENDPATH**/ ?>