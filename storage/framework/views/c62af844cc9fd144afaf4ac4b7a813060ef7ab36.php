<?php $__env->startSection('content'); ?>

<div class="card">
    <div class="card-header">
        Start new conversation
    </div>
    <div class="card-body">
        <form action="<?php echo e(route('conversation.store')); ?>" method="post">
            <?php echo csrf_field(); ?>
            <div class="form-group">
                <label for="">User</label>
                <select name="user_id" id="" class="form-control">
                    <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($user->id); ?>"><?php echo e($user->name); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
            </div>
            <div class="form-group">
                <label for="">Message</label>
                <textarea name="message" id="" class="form-control"></textarea>
            </div>
            <div class="form-group">
                <button class="btn btn-primary">Send</button>
            </div>
        </form>
    </div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.'.auth()->user()->role, \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/suoxuahd/public_html/resources/views/conversation/create.blade.php ENDPATH**/ ?>