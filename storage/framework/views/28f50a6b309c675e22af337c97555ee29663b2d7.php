

    <div class="row">
        <?php $__currentLoopData = $slots; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $slot): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-md-4" style="margin-top:10px;">
                <button id="sl-<?php echo e($slot->id); ?>" onclick="updateSlot(<?php echo e($slot->id); ?>)" type="button" <?php echo e(in_array($slot->id,$appointmentSlots)?'disabled':''); ?> class="slot-button btn btn-<?php echo e(in_array($slot->id,$appointmentSlots)?'danger':'success'); ?>">
                    <?php echo e($slot->start); ?> to <?php echo e($slot->end); ?>

                </button>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>

<?php /**PATH /home/suoxuahd/public_html/resources/views/admin/appointment/slot.blade.php ENDPATH**/ ?>