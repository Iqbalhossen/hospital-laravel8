<?php $__env->startSection('content'); ?>
<!-- /.card-header -->
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <table class="table table-striped">
                        <tbody>
                            <tr>
                                <th>Title</th>
                                <td><?php echo e($task->title); ?></td>
                            </tr>
                            <tr>
                                <th>Description</th>
                                <td><?php echo e($task->description); ?></td>
                            </tr>
                            <tr>
                                <th>Status</th>
                                <td>
                                    <?php if($task->status == 0): ?>
                                        <span class="badge badge-warning">Pending</span>
                                    <?php elseif($task->status == 1): ?>
                                        <span class="badge badge-success">Progressing</span>
                                    <?php else: ?>
                                        <span class="badge badge-danger">Completed</span>
                                    <?php endif; ?>
                                </td>
                            </tr>
                            <tr>
                                <form action="<?php echo e(route('task.note.status',$task->id)); ?>">

                                    <th>
                                        <select name="status" id="" class="form-control">
                                            <option value="0">Pending</option>
                                            <option <?php echo e($task->status==0?'selected':''); ?> value="1">Progressing</option>
                                            <option <?php echo e($task->status==1?'selected':''); ?> value="2">Completed</option>

                                        </select>
                                    </th>
                                    <td>
                                        <button class="btn btn-success">Update</button>
                                    </td>
                                </form>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
           <div class="card">
               <div class="card-body">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th colspan="2">Tracks</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $__currentLoopData = $task->statuses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $status): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <th>
                                <?php if($status->status == 0): ?>
                                <span class="badge badge-warning">Pending</span>
                            <?php elseif($status->status == 1): ?>
                                <span class="badge badge-success">Progressing</span>
                            <?php else: ?>
                                <span class="badge badge-danger">Completed</span>
                            <?php endif; ?>

                          </th>
                          <th>
                            <?php echo e($status->created_at->diffForHumans()); ?>

                          </th>
                            <td><?php echo e($status->user->name); ?></td>
                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
               </div>
           </div>
           <div class="card">
            <div class="card-body">
             <table class="table table-striped">
                 <thead>
                     <tr>
                         <th colspan="2">Assigns</th>
                     </tr>
                 </thead>
                 <tbody>
                     <?php $__currentLoopData = $task->assigns; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $assign): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                     <tr>
                         <td>
                            <b><?php echo e($assign->assignedBy->name); ?></b> assigned to <b><?php echo e($assign->assignedTo->name); ?></b>
                       </td>
                       <th>
                         <?php echo e($assign->created_at->diffForHumans()); ?>

                       </th>

                     </tr>
                     <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                 </tbody>
             </table>
            </div>
        </div>
        </div>
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th colspan="2">Notes</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = $task->notes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $note): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <th>
                                    <?php echo e($note->user->name); ?>

                                    <br>
                                <?php echo e($note->created_at->diffForHumans()); ?></th>
                                <td><?php echo e($note->note); ?></td>
                            </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                            <tr>
                                <th>Add Note</th>
                                <td>
                                    <form action="<?php echo e(route('task.note.store',$task->id)); ?>" method="post">
                                        <?php echo csrf_field(); ?>
                                        <div class="form-group">
                                            <textarea name="note" id="note" class="form-control"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <button class="btn btn-success" type="submit">Add Note</button>
                                        </div>
                                    </form>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/suoxuahd/public_html/resources/views/admin/task/show.blade.php ENDPATH**/ ?>