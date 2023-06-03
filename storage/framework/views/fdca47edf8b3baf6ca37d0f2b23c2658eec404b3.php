<?php $__env->startSection('content'); ?>

<div class="card">
    <div class="card-header">
        <a class="btn btn-info" href="<?php echo e(route('conversation.create')); ?>">Start new</a>
    </div>
    <div class="card-body">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Last Message</th>
                    <th>Send At</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $conversations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $conversation): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($conversation->id); ?></td>
                    <td><?php echo e($conversation->sender_id!=auth()->user()->id?$conversation->sender->name:$conversation->receiver->name); ?></td>
                    <td><?php echo e($conversation->messages->last()->message); ?></td>
                    <td>
                        <?php echo e($conversation->messages->last()->created_at->diffForHumans()); ?>

                    </td>
                    <td>
                        <a href="<?php echo e(route('conversation.chat',$conversation->id)); ?>" class="btn btn-primary">Chat</a>
                    </td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    </div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.'.auth()->user()->role, \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/suoxuahd/public_html/resources/views/conversation/index.blade.php ENDPATH**/ ?>